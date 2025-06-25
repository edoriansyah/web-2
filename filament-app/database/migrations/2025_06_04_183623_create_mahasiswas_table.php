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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->string('email')->unique();
            $table->string('telepon')->nullable();
            $table->string('alamat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('foto')->nullable();
            $table->string('status')->default('aktif'); // aktif, tidak aktif, lulus
            $table->string('angkatan')->nullable(); // Tahun angkatan
            $table->string('jenis_kelamin')->nullable(); // L, P
            $table->string('agama')->nullable(); // Islam, Kristen, Katolik, Hindu, Buddha, Lainnya
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
