<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('founds', function (Blueprint $table) {
            $table->integer('categorys_id')->unsigned();
            $table->integer('places_id')->unsigned();
          

            $table->foreign('categorys_id')
            ->references('id')
            ->on('categorys');
            $table->foreign('places_id') ->references('id') ->on('places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('founds', function (Blueprint $table) {
            // $table->dropForeign();
        });
    }
}
