<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('move')->default(0);
            $table->string('agility')->default(0);
            $table->string('defence')->default(0);
            $table->string('vitality')->default(0);
            $table->string('attributes');
            $table->string('size');
            $table->integer('wounds')->default(8);
            $table->string('weapons');
            $table->string('abilities');
            $table->string('inspiration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
