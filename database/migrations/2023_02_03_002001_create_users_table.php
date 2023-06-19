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
            $table->foreignId('province_id');
            $table->foreignId('regency_id');
            $table->foreignId('district_id');
            $table->foreignId('level_id');
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('school', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
