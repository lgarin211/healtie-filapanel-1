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
        Schema::create('ushes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('tujuan');
            $table->string('profilepaat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ushes');
    }
};
