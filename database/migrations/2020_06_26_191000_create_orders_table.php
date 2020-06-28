<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->text('order_bill_id');
            $table->text('order_product_id')->nullable();
            $table->text('order_product_name')->nullable();
            $table->text('order_product_quantity')->nullable();
            $table->text('order_product_price')->nullable();


            $table->text('order_customer_first_name')->nullable();
            $table->text('order_customer_last_name')->nullable();
            $table->text('order_customer_country_name')->nullable();
            $table->text('order_customer_address_line_one')->nullable();
            $table->text('order_customer_address_line_two')->nullable();
            $table->text('order_customer_address_district_name')->nullable();
            $table->text('order_customer_phone_no')->nullable();
            $table->text('order_customer_phone_email_address')->nullable();

            $table->text('order_shipping_first_name')->nullable();
            $table->text('order_shipping_last_name')->nullable();
            $table->text('order_shipping_country_name')->nullable();
            $table->text('order_shipping_address_line_one')->nullable();
            $table->text('order_shipping_address_line_two')->nullable();
            $table->text('order_shipping_address_district_name')->nullable();
            $table->text('order_shipping_phone_no')->nullable();
            $table->text('order_shipping_phone_email_address')->nullable();

            $table->text('order_status')->nullable();
            $table->text('order_profit')->nullable();
            
           
            
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
        Schema::dropIfExists('orders');
    }
}
