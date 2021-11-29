<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheSoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_soins', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->float('temperature');
            $table->float('poids');
            $table->string('details');
            $table->unsignedInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users');
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
        Schema::dropIfExists('fiche_soins');
    }
}
