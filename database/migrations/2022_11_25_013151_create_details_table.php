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
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id',12);
            $table->integer('Bus_id')->unsigned();
            $table->integer('Truck_stop_id')->unsigned();
            $table->integer('Trajectory_id')->unsigned();
            $table->foreign('Bus_id')->references('id')->on('buses');
            $table->foreign('Truck_stop_id')->references('id')->on('truck_stops');
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
        Schema::dropIfExists('details');
    }
};
