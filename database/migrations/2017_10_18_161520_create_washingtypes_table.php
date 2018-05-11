<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWashingtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washingtypes', function (Blueprint $table) {
            $table->increments('idw');
            $table->string('typewash');
            $table->string('auto');
            $table->string('location');

            $table->integer('idh')->unsigned();
            $table->foreign('id')->references('id')->on('highusers');

            $table->integer('ids')->unsigned();
            $table->foreign('id')->references('id')->on('scrubbers');

            $table->integer('ido')->unsigned();
            $table->foreign('id')->references('id')->on('objectitems');

            $table->integer('idp')->unsigned();
            $table->foreign('id')->references('id')->on('promotions');
            $table->softDeletes();	
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
        Schema::dropIfExists('washingtypes');
    }
}
