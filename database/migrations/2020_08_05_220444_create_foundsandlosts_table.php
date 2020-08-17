<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoundsandlostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foundsandlosts', function (Blueprint $table) {
            $table->id();
            $table->string('disclaimer');
            $table->string('title');
            $table->string('description');
            $table->string('date');
            $table->string('name');
            $table->string('gmail');
            $table->string('numberphone');
            $table->timestamps();

            $table->integer('categorys_id')->unsigned();
            $table->integer('places_id')->unsigned();
          

            $table->foreign('categorys_id')->references('id')->on('categorys');
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
        Schema::dropIfExists('foundsandlosts');
       
    }
}
