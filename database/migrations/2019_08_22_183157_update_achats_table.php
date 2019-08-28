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
        Schema::table('Achats', function (Blueprint $table) {
    $table->unsignedBigInteger('fournisseur')->after('date');
    $table->foreign('fournisseur')->references('id')->on('Fournisseurs')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Achats', function (Blueprint $table) {
            $table->dropForeign('achats_fournisseur_id_foreign');
});
    }
}
