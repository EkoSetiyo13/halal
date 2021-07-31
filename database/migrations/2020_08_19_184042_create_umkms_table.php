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
            $table->string('email');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('bpom')->nullable();
            $table->string('pirt')->nullable();
            $table->decimal('lat', 10, 6)->nullable();
            $table->decimal('long', 10, 6)->nullable();
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
