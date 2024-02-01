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
        Schema::create('marketing', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('custom_id');
            $table->string('customer_name'); 
            $table->string('sales_person');;
            $table->string('reference');
            $table->string('project_category')->nullable();
            $table->string('project_description')->nullable();
            $table->date('lead_date')->nullable();
            $table->date('engage_date')->nullable();
            
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketing');
    }
};
