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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('options');
            $table->string('name');
            $table->string('price');
            $table->boolean('ondemand');
            $table->string('labels');
            $table->unsignedBigInteger('holiday_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
           
            $table->timestamps();



            $table->foreign('holiday_id')->references('id')->on('holidays')->onDelete('cascade');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
};
