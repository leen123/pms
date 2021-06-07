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
            $table->string('name')->nullable();
            $table->string('barcode')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('limit_Qty')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('current_price')->nullable();
            $table->bigInteger('net_price')->nullable();
            $table->string('application')->nullable();
            $table->string('composition')->nullable();
            $table->string('side_effects')->nullable();
            $table->string('notes')->nullable();

           $table->bigInteger('format_id')->unsigned();
            $table->foreign('format_id')->references('id')->on('formats')->onDelete('cascade');

            $table->bigInteger('factory_id')->unsigned();
            $table->foreign('factory_id')->references('id')->on('factories')->onDelete('cascade');

            $table->bigInteger('shelf_id')->unsigned();
            $table->foreign('shelf_id')->references('id')->on('shelfs')->onDelete('cascade');

            $table->bigInteger('pharmacy_id')->unsigned();
            $table->foreign('pharmacy_id')->references('id')->on('pharmacies')->onDelete('cascade');

            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');

            $table->bigInteger('caliber_id')->unsigned();
            $table->foreign('caliber_id')->references('id')->on('caliberes')->onDelete('cascade');

            $table->bigInteger('chemical_id')->unsigned();
            $table->foreign('chemical_id')->references('id')->on('chamicals')->onDelete('cascade');

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
