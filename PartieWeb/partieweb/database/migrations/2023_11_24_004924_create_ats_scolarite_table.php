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
        Schema::create('ats_scolarite', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('apogee');
            $table->string('cin');
            $table->string('nom');
            $table->date('date')->nullable();
            $table->date('date_naissance');
            $table->string('cne');
            $table->string('filiere');
            $table->string('annee_univ');
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
        Schema::dropIfExists('ats_scolarite');
    }
};
