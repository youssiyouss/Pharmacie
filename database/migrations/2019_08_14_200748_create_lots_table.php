<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('achat');
            $table->unsignedBigInteger('medoc');
            $table->DateTime('date_fab');
            $table->date('date_per');
            $table->double('prix');
            $table->integer('nbr_medoc_lot');
            $table->integer('qt_stock');
            $table->DateTime('deleted_at')->nullable();
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
        Schema::dropIfExists('lots');
    }
}
