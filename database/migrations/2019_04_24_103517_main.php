<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Main extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Main', function (Blueprint $table) {
            $table->bigIncrements('key');
            $table->integer('user_id')->unsigned();
        });
        Schema::table('Main', function (Blueprint $table) {
            $table->foreign('user_id')->references('ID')->on('User')->onUpdate('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Main');
    }
}
