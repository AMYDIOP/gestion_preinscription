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
        Schema::create('demande_admissions', function (Blueprint $table) {
            $table->id();
            $table->enum('statut',['en_attente','rejeter','accepter'])->default('en_attente');
            $table->date('date_soumission');
            $table->date('niveau_etude');


            $table->foreignId('user_id')->constrained();
            $table->foreignId('programme_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes_admissions');
    }
};
