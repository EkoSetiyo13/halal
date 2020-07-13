<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormPenerimaQurbansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_penerima_qurbans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('user_id');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('jumlah_sapi');
            $table->integer('jumlah_kambing');
            $table->integer('jumlah_kerbau');
            $table->integer('jumlah_lain');
            $table->integer('jumlah_warga');
            $table->text('alamat');
            $table->text('map_alamat')->nullable();
            $table->boolean('status')->default(true);
            $table->string('no_wa')->nullable();
            $table->boolean('is_pelapor')->nullable();
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
        Schema::dropIfExists('form_penerima_qurbans');
    }
}
