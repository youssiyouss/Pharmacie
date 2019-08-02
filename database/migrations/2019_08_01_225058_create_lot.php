<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lot', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num');
            $table->integer('achat');
            $table->string('medoc');
            $table->DateTime('date_fab');
            $table->double('prix');
            $table->integer('qt_achte');
            $table->integer('qt_stock');
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
        Schema::dropIfExists('Lot');
    }
}
