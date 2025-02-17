<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();

             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


             $table->integer('product_id')->unsigned();
              $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');


              $table->integer('order_id')->unsigned()->nullable();;
              $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');





            $table->integer('product_quantity')->default(1);
            $table->string('ip_address')->nullable();
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
        Schema::dropIfExists('cards');
    }
}
