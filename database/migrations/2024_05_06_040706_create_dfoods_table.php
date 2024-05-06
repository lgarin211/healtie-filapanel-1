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
        Schema::create('dfoods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barcode')->nullable()->index();
            $table->string('name');
            $table->integer('natrium');
            $table->integer('fat');
            $table->integer('sugar');
            $table->integer('kcal');
            $table->string('poster');
            $table->string('etc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dfoods');
    }
};
