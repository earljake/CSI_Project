<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('client', function (Blueprint $table) {
            $table->unique(['firstname', 'lastname']);
        });
    }
    
    public function down()
    {
        Schema::table('client', function (Blueprint $table) {
            $table->dropUnique('clients_first_name_last_name_unique');
        });
    }
};
