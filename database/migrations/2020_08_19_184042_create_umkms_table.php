<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_umkm');
            $table->string('nama_pemilik');
            $table->string('nama_umkm');
            $table->string('nama_produk');
            $table->string('tipe_binaan');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kota');
            $table->boolean('status')->default(true);
            $table->string('image')->nullable();
            $table->string('no_wa');
            $table->string('email')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('bpom')->nullable();
            $table->string('pirt')->nullable();
            $table->text('google_map')->nullable();
            $table->string('tokopedia')->nullable();
            $table->string('shopee')->nullable();
            $table->string('bukalapak')->nullable();
            $table->string('website')->nullable();
            $table->string('video')->nullable();
            $table->string('sertifikat_halal')->nullable();
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
        Schema::dropIfExists('umkms');
    }
}
