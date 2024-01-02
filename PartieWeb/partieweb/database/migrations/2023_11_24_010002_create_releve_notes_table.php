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
        Schema::create('releve_notes', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('apogee');
            $table->string('cin');
            $table->string('nom_module');
            $table->string('semestre');
            $table->float('note');
            $table->string('statut');
            $table->string('points_jury');
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
        Schema::dropIfExists('releve_notes');
    }
};
