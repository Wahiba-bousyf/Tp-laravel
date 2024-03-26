<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('annonces',function(Blueprint $table){
            $table->id();
            $table->string('titre');
            $table->string('des');
            $table->string('type');
            $table->string('ville');
            $table->integer('superficie');
            $table->enum('etat',['Neuf','Ancien'])->default('Neuf');
            $table->decimal('prix',6,2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
