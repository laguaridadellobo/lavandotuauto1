<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScrubbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrubbers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last');
            $table->string('mail');
            $table->string('pass');
            $table->string('phone');
            $table->string('reputation')->default('1');
            $table->string('location')->default('');
            $table->string('typeuser')->default('lavador');
            $table->string('photo')->default('perfil.jpg');
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
        Schema::dropIfExists('scrubbers');
    }
}
