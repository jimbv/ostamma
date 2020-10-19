<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('documento')->unique();
            $table->bigInteger('cuil')->unique();
            $table->string('apellido',100);
            $table->string('nombres',100);
            $table->string('calle',200)->nullable();
            $table->integer('altura')->nullable(); 
            $table->integer('piso')->nullable();
            $table->string('dpto',2)->nullable(); 
            $table->integer('localidad_id'); 
            $table->foreign('localidad_id')->references('id')->on('localidades'); 
            $table->integer('user_id'); 
            $table->foreign('user_id')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
