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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('google',24)->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ['admin', 'customer'])->default('customer');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->integer('profile')->default(0);
            $table->integer('layout')->nullable()->default(1);
            $table->string('img')->nullable();
            $table->string('logo')->nullable();
            $table->string('company')->nullable();
            $table->string('designation', 1000)->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();
            $table->string('description')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('password')->nullable();
            $table->string('contact')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->integer('postal')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
