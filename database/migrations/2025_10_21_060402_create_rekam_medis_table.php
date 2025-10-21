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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('janji_temu_id');
            $table->text('keluhan');
            $table->text('diagnosa');
            $table->text('tindakan');
            $table->text('resep_obat');
            $table->text('catatan');
            $table->decimal('biaya', 10, 2);
            $table->foreign('janji_temu_id')->references('id')->on('janji_temus')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
