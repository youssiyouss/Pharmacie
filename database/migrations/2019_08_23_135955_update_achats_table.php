<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('achats', function (Blueprint $table) {
          $table->unsignedBigInteger('fournisseur')->unsigned()->index()->change();
          $table->foreign('fournisseur')->references('id')->on('fournisseurs')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('achats', function (Blueprint $table) {
             $table->dropForeign('achats_fournisseur_id_foreign');
        });
    }
}
