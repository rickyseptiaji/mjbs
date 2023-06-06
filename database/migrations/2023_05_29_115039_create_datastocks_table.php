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
        Schema::create('datastocks', function (Blueprint $table) {
            $table->id();
            $table->string('produk');
            $table->string('kode');
            $table->enum('kondisi', ['Baru', 'Bekas']);
            $table->double('qty', 2, 1);
            $table->enum('satuan', ['L','G', 'Kg']);
            $table->double('jumlah', 2, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datastocks');
    }
};
