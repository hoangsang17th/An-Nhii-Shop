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
            $table->bigIncrements('Product_ID');
            $table->string('Product_Name');
            $table->bigInteger('Category_ID');
            $table->bigInteger('Price_Product');
            $table->text('Product_Des', 2500);
            $table->string('Product_Image');
            $table->bigInteger('Product_Quantity');
            $table->string('Product_Keywords');
            $table->char('Meta_Des', 165);
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
