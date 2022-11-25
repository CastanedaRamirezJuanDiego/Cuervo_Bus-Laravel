<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Name',80);
            $table->String('Img_User',100);
            $table->String('Email',100);
            $table->String('Password',100);
            $table->double('Matricula',30);
            $table->integer('Cuatrimestre_id')->unsigned();
            $table->integer('Direction_id')->unsigned();
            $table->integer('Trajectory_id')->unsigned();
            $table->foreign('Cuatrimestre_id')->references('id')->on('cuatrimestes');
            $table->foreign('Direction_id')->references('id')->on('directions');
            $table->foreign('Trajectory_id')->references('id')->on('trajectories');
            $table->SoftDeletes();
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
        Schema::dropIfExists('users');
    }
};
