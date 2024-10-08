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
        Schema::create('Pemain MU', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama_pemain');
            $table->string('no_punggung');
            $table->string('posisi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pemain MU');
    }
};
