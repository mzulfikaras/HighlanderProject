<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->char('code',4)->unique();
            $table->string('nama');
            $table->string('gambar');
            $table->bigInteger('merk')->unsigned();
            $table->string('harga');
            $table->string('standbypower');
            $table->string('primepower');
            $table->string('enginemodel');
            $table->string('fuelcosumption');
            $table->string('cylinder');
            $table->string('enginedata');
            $table->string('size');
            $table->timestamps();

            // $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
