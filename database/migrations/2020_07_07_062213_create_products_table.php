<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('jenis_ternak_id');
            $table->unsignedBigInteger('user_id');
            $table->text('description')->nullable();
            $table->string('image');
            $table->integer('price');
            $table->integer('weight');
            $table->string('lokasi');
            $table->string('map_lokasi')->nullable();
            $table->string('pengiriman');
            $table->string('pembayaran');
            $table->boolean('status')->default(true);
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
