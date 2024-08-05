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
        Schema::create('orderhistories', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('user')->nullable();
            $table->string('ordernumber')->nullable();
            $table->string('card')->nullable();
            $table->string('quantity')->nullable();
            $table->string('totalBill')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
