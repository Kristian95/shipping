<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipientShippingMethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipient_shipping_method', function (Blueprint $table) {
            $table->integer('shipping_method_id')->unsigned();
            $table->integer('recipient_id')->unsigned();
            $table->timestamps();

            // Indexes
            $table->primary(['shipping_method_id', 'recipient_id'], 'shipping_recipient');
            $table->foreign('shipping_method_id')->references('id')->on('shipping_methods')->onDelete('cascade');
            $table->foreign('recipient_id')->references('id')->on('recipients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipient_shipping_method');
    }
}
