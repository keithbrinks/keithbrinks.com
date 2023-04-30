<?php

namespace App\Http\Controllers;

use App\Models\BalancerSheet;
use App\Models\BalancerTransaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BalancerTransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BalancerSheet $balancerSheet, Request $request)
    {
        if ($request->repeat) {
            $transactions = collect();
            $day_iteration = Carbon::parse($request->date);

            while ($day_iteration->lte($request->repeat_until)) {

                $transactions->push([
                    'date' => $day_iteration,
                    'item' => $request->item,
                    'type' => $request->type,
                    'amount' => $request->amount,
                ]);

                switch ($request->repeat_cadance) {
                    case 'biweekly':
                        $day_iteration = Carbon::parse($day_iteration)->addWeeks(2);
                        break;
                    case 'monthly':
                        $day_iteration = Carbon::parse($day_iteration)->addMonth();
                        break;
                }
                
            }

            $balancerSheet->transactions()->createMany($transactions->toArray());

        } else {

            $balancerSheet->transactions()->create([
                'date' => $request->date,
                'item' => $request->item,
                'type' => $request->type,
                'amount' => $request->amount,
            ]);

        }

        return redirect()->route('balancer-sheets.show', $balancerSheet->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BalancerTransaction $transaction)
    {
        $transaction->update([
            'date' => $request->date,
            'item' => $request->item,
            'type' => $request->type,
            'amount' => $request->amount,
        ]);

        return redirect()->route('sheets.show', $transaction->sheet_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BalancerTransaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('sheets.show', $transaction->sheet_id);
    }
}
