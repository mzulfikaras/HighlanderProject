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
            $table->bigInteger('merk_id')->unsigned();
            $table->char('enginetype')->nullable();
            $table->string('gambar')->nullable();
            $table->integer('kva');
            $table->string('geno');
            $table->string('type')->nullable();
            $table->bigInteger('harga')->nullable();
            $table->string('kondisi');
            $table->string('warna')->nullable();
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
