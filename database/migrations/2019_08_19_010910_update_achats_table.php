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
    $table->integer('qt_achat')->after('date');

    
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
            $table->integer('qt_achat');
});
    }
}
