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
        Schema::create('sleep_tracks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->time('start');
            $table->time('wake');
            $table->string('esensi');
            $table->string('deskpoin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sleep_tracks');
    }
};
