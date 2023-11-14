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
        Schema::create('cards', function (Blueprint $table) {
            $table->id('nomor_series'); // no series
            $table->string('name'); // nama
            $table->string('level'); // tingkatan
            $table->timestamp('active_date'); // masa aktif
            $table->string('from'); // asal
            $table->string('images'); // Foto
            $table->unsignedInteger('user_id')->nullable(); // user_id
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
