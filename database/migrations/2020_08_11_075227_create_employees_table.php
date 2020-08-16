<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('documentType');
            $table->integer('documentNumber');
            $table->string('fullName');
            $table->string('name');
            $table->date('dataOfBirth');
            $table->string('socialState');
            $table->string('gender');
            $table->integer('phoneNumber');
            $table->integer('wataniaMobile');
            $table->integer('Tel');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->integer('jobNumber');
            $table->date('startDate');
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
        Schema::dropIfExists('employees');
    }
}
