<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users');
            $table->unsignedBigInteger('addressID');
            $table->foreign('addressID')->references('id')->on('addresses');
            $table->unsignedBigInteger('receiptID');
            $table->foreign('receiptID')->references('id')->on('receipts');
            
            $table->date('departureDate');
            $table->date('deliveryDate')->nullable();
            $table->string('status');
            $table->double('cost');
            $table->string('recipientName');
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
        Schema::dropIfExists('shipments');
    }
}
