<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiredevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiredevelopers', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('hire_developer');
            $table->string('client_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('requisition_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hiredevelopers');
    }
}
