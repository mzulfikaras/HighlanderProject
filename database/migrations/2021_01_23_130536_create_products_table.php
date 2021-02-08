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
            $table->char('code')->unique();
            $table->string('nama');
            $table->string('gambar');
            $table->bigInteger('merk_id')->unsigned();
            $table->bigInteger('harga');
            $table->string('standbypower');
            $table->string('primepower');
            $table->string('enginemodel');
            $table->string('fuelcosumption');
            $table->string('cylinder');
            $table->string('enginedata');
            $table->char('size');
            $table->timestamps();

            $table->foreign('merk_id')->references('id')->on('merks')->onDelete('cascade')->onUpdate('cascade');
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
