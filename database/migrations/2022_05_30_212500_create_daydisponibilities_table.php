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
        Schema::create('daydisponibilities', function (Blueprint $table) {
            $table->id();
          
            $table->string('day');
            $table->unsignedBigInteger('instantcookingdisponibilitiesid')->nullable();
            $table->timestamps();

            $table->foreign('instantcookingdisponibilitiesid')->references('id')->on('instantcookingdisponibilities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daydisponibilities');
    }
};
