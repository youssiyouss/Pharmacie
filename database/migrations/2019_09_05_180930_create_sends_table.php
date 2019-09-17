<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('to');
            $table->string('subject');
            $table->text('message');
            $table->date('day_sended');
            $table->time('time_sended');
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
        Schema::dropIfExists('Sends');
    }
}
