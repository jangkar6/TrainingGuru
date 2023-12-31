<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pengaduan')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->date('tanggal_tanggapan');
            $table->text('tanggapan');
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_pengaduan')->on('pengaduan')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
