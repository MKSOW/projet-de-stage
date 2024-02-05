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
        Schema::create('utilisations', function (Blueprint $table) {
            $table->foreignId('vature_id')->constrained();
            $table->foreignId('salarie_id')->constrained();
            $table->primary(['vature_id','salarie_id']);
            $table->datetime('dateDebutUtilisation');
            $table->datetime('dateFinUtilisation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisations');
    }
};
