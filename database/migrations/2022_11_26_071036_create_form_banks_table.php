<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Norek')->nullable();
            $table->string('Nama')->nullable();
            $table->string('File')->nullable();
            $table->string('Created_by')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_banks');
    }
}
