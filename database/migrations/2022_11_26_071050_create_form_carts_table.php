<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_carts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Userid')->nullable();
            $table->string('Product_id')->nullable();
            $table->string('Qty')->nullable();
            $table->string('Desc')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_carts');
    }
}
