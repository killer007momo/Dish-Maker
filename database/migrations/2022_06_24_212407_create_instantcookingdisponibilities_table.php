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
        Schema::create('instantcookingdisponibilities', function (Blueprint $table) {
           
            $table->id();
            $table->unsignedBigInteger('userprofile_id')->nullable();
            $table->string('entrydate');
            $table->timestamps();
            $table->foreign('userprofile_id')->references('id')->on('userprofiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instantcookingdisponibilities');
    }
};
