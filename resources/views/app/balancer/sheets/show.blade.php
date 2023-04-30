<x-app-layout title="Balancer - {{ $sheet->name }}" navParent="balancer">

    <x-app.page-header>
        {{ $sheet->name }}
        <span class="float-right font-normal">Beginning Balance: ${{ $sheet->beginning_balance }}</span>
    </x-app.page-header>

    <div class="flex mt-4">
        <div class="w-2/5 bg-slate-100 p-2 rounded">
            <h3>Add Transaction</h3>
            <form method="POST" action="{{ route('balancer-transactions.store', ['balancerSheet' => $sheet]) }}">
                @csrf
                <div class="mb-4">
                    <x-input-label for="date" value="Transaction Date" />
                    <x-text-input type="date" id="date" name="date" class="block mt-1 w-full" />
                </div>

                <div class="mb-4">
                    <x-input-label for="item" value="Item" />
                    <x-text-input type="text" id="item" name="item" class="block mt-1 w-full" />
                </div>

                <div class="mb-4">
                    <x-input-label for="type" value="Type" />
                    <x-select id="type" name="type" class="block mt-1 w-full">
                        <option value="income" selected>Income</option>
                        <option value="expense">Expense</option>
                    </x-select>
                </div>

                <div class="mb-4">
                    <x-input-label for="amount" value="Amount" />
                    <x-text-input type="number" step="0.01" id="amount" name="amount" class="block mt-1 w-full" />
                </div>

                <div class="block mt-4">
                    <label for="repeat" class="inline-flex items-center">
                        <input id="repeat" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="repeat">
                        <span class="ml-2 text-sm">{{ __('Repeat Transaction') }}</span>
                    </label>
                </div>

                <div class="mb-4">
                    <x-input-label for="repeat_cadance" value="Repeat Transaction" />
                    <x-select id="repeat_cadance" name="repeat_cadance" class="block mt-1 w-full">
                        <option>None</option>
                        <option value="biweekly">Bi-Weekly</option>
                        <option value="monthly">Monthly</option>
                    </x-select>
                </div>

                <div class="mb-4">
                    <x-input-label for="repeat_until" value="Repeat Until" />
                    <x-text-input type="date" id="repeat_until" name="repeat_until" class="block mt-1 w-full" />
                </div>
    
                <x-primary-button>Submit</x-primary-button>
            </form>
        </div>
        <div class="w-full ml-4">
            @if ($sheet->transactions->isEmpty())
                <div class="alert alert-info">No transactions have been entered.</div>
            @else
                <h3>Transactions</h3>
                <table class="w-full border">
                    <thead>
                        <tr class="text-left border-b bg-slate-50">
                            <th class="p-2">Date</th>
                            <th>Item</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Balance</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sheet->transactions as $transaction)
                            @php
                            if ($loop->first) $balance = $sheet->beginning_balance;
        
                            $balance = $transaction->type == 'income'
                                ? $balance + $transaction->amount
                                : $balance - $transaction->amount
                            @endphp
                            <tr class="border-b text-sm">
                                <td class="p-2">
                                    {{ $transaction->date }}
                                </td>
                                <td>
                                    {{ $transaction->item }}
                                </td>
                                <td>
                                    <span class="rounded py-1 px-2 {{ $transaction->type == 'income' ? 'text-green-200 bg-green-600' : 'text-red-200 bg-red-600' }}">{{ Str::ucfirst($transaction->type) }}</span>
                                </td>
                                <td>
                                    <span class="rounded py-1 px-2 {{ $transaction->type == 'income' ? 'text-green-200 bg-green-600' : 'text-red-200 bg-red-600' }}">${{ $transaction->amount }}</span>
                                </td>
                                <td>
                                    <span class="rounded py-1 px-2 {{ $balance >= 0 ? 'text-green-200 bg-green-600' : 'text-red-200 bg-red-600' }}">${{ round($balance, 2) }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('balancer-transactions.edit', $transaction)}}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </a>
                                    {{-- <x-edit-transaction :transaction="$transaction"></x-edit-transaction> --}}
                                    {{-- <button class="btn btn-outline-primary btn-sm py-0 p-1">
                                        <i class="bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm py-0 p-1">
                                        <i class="bi-trash"></i>
                                    </button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

</x-app-layout>