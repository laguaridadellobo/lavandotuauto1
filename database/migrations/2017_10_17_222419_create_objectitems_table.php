<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectitems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('computer');
            $table->string('purse');
            $table->string('documents');
            $table->string('tools');
            $table->string('keys');
            $table->string('suitcase');
            $table->string('bag');
            $table->string('ropa');
            $table->string('watch');
            $table->string('phone');
            $table->string('other');
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
        Schema::dropIfExists('objectitems');
    }
}
