<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->DateTime('date');
            $table->integer('qt_achat');
<<<<<<< HEAD:database/migrations/2019_08_17_205945_create_achats_table.php
            
             $table->DateTime('deleted_at')->nullable();
=======
            $table->string('fournisseur');
            $table->DateTime('deleted_at')->nullable();
>>>>>>> master:database/migrations/2019_08_14_200814_create_achats_table.php
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
        Schema::dropIfExists('achats');
    }
}
