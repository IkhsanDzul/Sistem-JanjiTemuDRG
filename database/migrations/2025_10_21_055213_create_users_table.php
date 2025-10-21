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
            $table->uuid('id')->primary();
            $table->string('role')->nullable();
            $table->string('nama_lengkap', 50);
            $table->string('email', 40)->unique();
            $table->string('password', 100);
            $table->text('alamat');
            $table->boolean('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('nomor_telp', 16);
            $table->string('nik', 16);
            $table->string('golongan_darah', 5)->nullable();
            $table->string('alergi', 255)->nullable();
            $table->string('no_str', 50)->nullable();
            $table->string('status', 30)->nullable();
            $table->string('pengalaman_tahun', 10)->nullable();
            $table->string('spesialisasi_gigi', 100)->nullable();
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
