<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('Ventes', function (Blueprint $table) {
    $table->unsignedBigInteger('lot')->after('date');
    $table->foreign('lot')->references('id')->on('Lots')->onDelete('cascade');
});  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('vente_lots_id_foreign');
    }
}
