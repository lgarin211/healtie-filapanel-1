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
        Schema::create('bpases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('height');
            $table->string('weight');
            $table->string('bmi');
            $table->string('goals');
            $table->timestamp('periode');
            $table->integer('ushid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpases');
    }
};
