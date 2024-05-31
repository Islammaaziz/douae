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
            Schema::create('conges', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('employee_id');
                $table->foreign('employee_id')->references('id')->on('employes')->onDelete('cascade');
                $table->string('first_name'); // Champ pour le prénom de l'employé
                $table->string('last_name');  // Champ pour le nom de l'employé
                $table->date('start_date');
                $table->date('end_date');
                $table->string('status')->default('pending');
                $table->text('comment')->nullable();
                $table->integer('annual_conge_days')->default(18); // Champ pour les jours de congé annuels demandés
                $table->timestamps();
            });
    
        }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conges');
    }
};
