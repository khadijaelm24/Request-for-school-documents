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
        Schema::create('convention_stage', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('apogee');
            $table->string('cin');
            $table->string('nom');
            $table->string('nom_societe');
            $table->string('adr_societe');
            $table->string('tel_societe');
            $table->string('email_societe');
            $table->string('nom_rep_societe');
            $table->string('qualite_rep_societe');
            $table->string('encadrant_societe');
            $table->string('annee_etude');
            $table->string('filiere');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('encadrant_pedagogique');
            $table->string('sujet_stage');
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
        Schema::dropIfExists('convention_stage');
    }
};
