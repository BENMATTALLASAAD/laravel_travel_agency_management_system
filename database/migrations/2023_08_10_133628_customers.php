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
        Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->string('login',50);
        $table->string('password',50);
        $table->string('nom',50);        
        $table->string('prénom',50);
        $table->string('image',250);
        $table->text('adresse');
        $table->string('email',50)->unique();
        $table->integer('num_telephone',50);
        $table->string('sexe',50);
        $table->date('date_naissance');
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
