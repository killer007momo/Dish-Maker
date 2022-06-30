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
        Schema::create('tookordertables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id');
           
            $table->string('advance');
            $table->string('comissionprice');
            $table->string('totalht');
            $table->string('tva');
            $table->string('orderdate');
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tookordertables');
    }
};
