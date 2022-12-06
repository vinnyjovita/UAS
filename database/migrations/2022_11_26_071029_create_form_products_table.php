<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Kategori')->nullable();
            $table->string('Ukuran')->nullable();
            $table->string('Expired')->nullable();
            $table->integer('Berat')->nullable();
            $table->string('Deskripsi')->nullable();
            $table->string('File')->nullable();
            $table->string('Created_by')->nullable();
            $table->integer('Stock')->nullable();
            $table->integer('Harga')->nullable();
            $table->integer('Filter')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_products');
    }
}
