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
        Schema::create('equipe', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('modalidade');
            $table->string('status');
            $table->string('capitao');
            $table->string('timea')->nullable();
            $table->string('timeb')->nullable();
            $table->string('confrat')->nullable();
            $table->string('local');
            $table->string('horainicial');
            $table->string('horafinal');
            $table->string('checkbox');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('equipe');
    }

    
};

