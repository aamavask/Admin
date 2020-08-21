<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Product_Name');
            $table->string('Highlights');
            $table->string('Short_Description');
            $table->string('Long_Description');
            $table->string('Specifications');
            $table->string('Providers');
            $table->string('Weights');
            $table->string('Sizes');
            $table->string('Dimensions');
            $table->string('Category_ID');
            $table->string('Varient_ID');
            $table->string('Regular_Price');
            $table->string('Sales_Price');
            $table->string('Tax_Class');
            $table->string('Shipping_Class');
            $table->string('SKU');
            $table->string('Vendor_ID');
            $table->string('Stock');
            $table->string('Stock_Alert');
            $table->string('Back_Order_Options');
            $table->string('Max_Number_of_order_in_bulk');
            $table->string('Tags');
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
        Schema::dropIfExists('products');
    }
}
