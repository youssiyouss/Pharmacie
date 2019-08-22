<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmaciens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('Prenom');
            $table->string('tel');
            $table->Date('date_nais');
            $table->string('email')->unique();
            $table->string('login')->unique();
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
        Schema::dropIfExists('pharmaciens');
    }
}
