<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Medicament', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
             $table->string('prix');
            $table->double('dosage');
            $table->string('forme');
            $table->string('famille');
            $table->string('resume');
            $table->string('mode');
            $table->string('composition');
            $table->string('plus');
           
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
        Schema::dropIfExists('Medicament');
    }
}
