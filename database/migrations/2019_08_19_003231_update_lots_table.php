<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Lots', function (Blueprint $table) {
    $table->unsignedBigInteger('achat')->after('medoc');

    $table->foreign('achat')->references('id')->on('Achats');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Lots', function (Blueprint $table) {
            $table->dropForeign('lots_achat_id_foreign');
});
    }
}
