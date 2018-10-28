<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenderShippingMethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sender_shipping_method', function (Blueprint $table) {
            $table->integer('shipping_method_id')->unsigned();
            $table->integer('sender_id')->unsigned();
            $table->timestamps();

            // Indexes
            $table->primary(['shipping_method_id', 'sender_id'], 'shipping_sender');
            $table->foreign('shipping_method_id')->references('id')->on('shipping_methods')->onDelete('cascade');
            $table->foreign('sender_id')->references('id')->on('senders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sender_shipping_method');
    }
}
