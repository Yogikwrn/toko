<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
        {
            Schema::create('brg_keluar', function (Blueprint $table) {
                $table->id();
                $table->integer('id_barang');
                $table->date('tgl_klr');
                $table->integer('jml_brg_keluar')->nullable();
                $table->bigInteger('total')->nullable();
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
        Schema::dropIfExists('brg_keluar');
    }
};
