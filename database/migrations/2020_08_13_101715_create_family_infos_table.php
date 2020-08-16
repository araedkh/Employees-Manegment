<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_infos', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->integer('idNumber');
            $table->string('relation');
            $table->date('DateOfBirth');
            $table->string('socialstatus');
            $table->string('does he study ?');
            $table->string('does he work ?');
            $table->binary('IDImage');
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
        Schema::dropIfExists('family_infos');
    }
}
