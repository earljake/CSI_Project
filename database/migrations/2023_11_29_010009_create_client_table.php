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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('custom_id');
            $table->string('category');
            $table->string('firstname'); 
            $table->string('lastname');
            $table->string('company_name');
            $table->string('address');
            $table->string('email');
            $table->string('phone_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
