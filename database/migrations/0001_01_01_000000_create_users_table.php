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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('asalSekolah');
            $table->string('usernameKelompok');
            $table->string('passPeserta');
            $table->string('namaKetua');
            $table->string('emailKetua');
            $table->string('namaKedua');
            $table->string('namaKetiga');
            $table->string('jenisKonsumsi');
            $table->string('alergi');
            $table->string('buktiTransaksi');
            $table->boolean('verified_by_admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
