<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balancer_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('balancer_sheet_id')->constrained()->onDelete('cascade');
            $table->string('item');
            $table->date('date');
            $table->string('type');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balancer_transactions');
    }
};
