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
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id',12);
            $table->String('Name_Driver',80);
            $table->String('Email',100);
            $table->String('Password',100);
            $table->double('Phone_Number',30);
            $table->String('Age');
            $table->String('License');
            $table->integer('Center_id')->unsigned();
            $table->foreign('Center_id')->references('id')->on('centers');
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
        Schema::dropIfExists('drivers');
    }
};
