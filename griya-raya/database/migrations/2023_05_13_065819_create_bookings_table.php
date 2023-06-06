<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            
            $table->string('category');
            $table->string('judul');
            $table->decimal('harga', 15, 2);
            $table->text('isi_paket');
            $table->text('foto');
            $table->string('ringkasan');
            $table->string('telepon');
            $table->string('alamat');
            $table->date('tanggal');
            $table->string('jumlah_pengunjung');
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
        Schema::dropIfExists('bookings');
    }
}
