<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankgeneratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankgenerates', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount'); 
            $table->integer('merchant_id'); 
            $table->integer('reference')->uniqe();
            $table->boolean('transaction_status')->default(0); 
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
        Schema::dropIfExists('bankgenerates');
    }
}
