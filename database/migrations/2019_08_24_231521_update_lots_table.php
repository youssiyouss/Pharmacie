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
             $table->integer('nbr_medoc_lot')->after('prix');
    
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
            $table->dropColumn('nbr_medoc_lot');
            });
    }
}
