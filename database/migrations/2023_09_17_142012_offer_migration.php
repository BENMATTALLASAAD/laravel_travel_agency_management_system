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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('nom_offre',50);        
            $table->date('date_depart');
            $table->integer('nbr_personnes');
            $table->string('durée_offre',50);
            $table->string('destination_offre',50);
            $table->decimal('prix_offre', 9, 3);
            $table->string('image',250);
            $table->timestamps();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
