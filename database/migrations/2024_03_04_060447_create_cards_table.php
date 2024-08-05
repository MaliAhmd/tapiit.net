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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('cardname',35);
            $table->double('cardprice');
            $table->string('carddesc');
            $table->double('sale')->nullable();
            $table->double('saleprice')->nullable();
            $table->string('files')->nullable();
            // $table->string('file1')->nullable();
            // $table->string('file2')->nullable();
            // $table->string('file3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
