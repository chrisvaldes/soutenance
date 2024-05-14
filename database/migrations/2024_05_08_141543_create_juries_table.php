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
        Schema::create('juries', function (Blueprint $table) {
            $table->id();
            $table->string("president")->nullable(false);
            $table->string("examinateur")->nullable(false);
            $table->string("rapporteur")->nullable(false);
            $table->string("encadreur")->nullable();
            $table->string("entreprise")->nullable();
            $table->date("date")->nullable(false);
            $table->time("heure")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juries');
    }
};
