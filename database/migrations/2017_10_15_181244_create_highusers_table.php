<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highusers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('last');
          $table->string('mail');
          $table->string('pass');
          $table->string('typeuser')->default('Cliente');
          $table->string('phone');
          $table->string('sex')->default('');
          $table->string('photo')->default('perfil.jpg');
          $table->string('location')->default('');
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
        Schema::dropIfExists('highusers');
    }
}
