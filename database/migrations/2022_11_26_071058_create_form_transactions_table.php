<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('Userid')->nullable();
            $table->string('Transactionnumber')->nullable();
            $table->integer('Total_berat')->nullable();
            $table->string('Phone')->nullable();
            $table->string('No_resi')->nullable();
            $table->string('Kurir')->nullable();
            $table->string('Kota')->nullable();
            $table->integer('Ongkir')->nullable();
            $table->integer('Total')->nullable();
            $table->string('Bukti_transaksi')->nullable();
            $table->string('Status')->nullable();
            $table->dateTime('Date')->nullable();
            $table->string('Address')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_transactions');
    }
}
