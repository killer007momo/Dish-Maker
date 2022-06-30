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
        Schema::create('bankinformations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userprofileid')->nullable();
            $table->string('iban');
            $table->string('nomprenomouraisonsociale');
            $table->timestamps();
            $table->foreign('userprofileid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankinformations');
    }
};
