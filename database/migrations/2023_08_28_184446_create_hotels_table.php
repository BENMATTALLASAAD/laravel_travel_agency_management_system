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
        Schema::create('hotels', function (Blueprint $table) {
                $table->id();
                $table->string('nom_hotel',50)->unique();
                $table->string('adresse_hotel',50);
                $table->string('email_hotel',50);
                $table->string('website_hotel',50);
                $table->string('catégorie_hotel',50);        
                $table->date('date_hotel');
                $table->integer('nbr_personnes');
                $table->string('durée',50);
                $table->decimal('prix_hotel', 9, 3);
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
