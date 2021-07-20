<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billdetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('quantity')->nullable();
            $table->double('factory_price')->nullable();
            $table->double('selling_price')->nullable();
            $table->date('MGF_date')->nullable();
            $table->date('expirty_date')->nullable();
            $table->double('price')->nullable();

            $table->bigInteger('bill_id')->unsigned();
            $table->foreign('bill_id')->references('id')->on('bills')->onDelete('cascade');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

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
        Schema::dropIfExists('billdetails');
    }
}
