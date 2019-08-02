<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pharmacien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('Prenom');
            $table->string('tel');
            $table->DateTime('date_nais');
            $table->string('email');
            $table->string('login');
            $table->string('psw');
            $table->BOOLEAN('isadmin');
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
        Schema::dropIfExists('Pharmacien');
    }
}
