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
        Schema::create('ats_reussite', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('apogee');
            $table->string('cin');
            $table->string('nom');
            $table->date('date')->nullable();
            $table->string('status');
            $table->string('document')->nullable();
            $table->text('motif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ats_reussite');
    }
};
