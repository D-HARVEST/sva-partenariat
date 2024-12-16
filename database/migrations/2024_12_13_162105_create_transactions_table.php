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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('Volume');
            $table->integer('Cout');
            $table->integer('Prix');
            $table->integer('AncienPrix');
            $table->integer('Validite');
            $table->string('Statut');
            $table->integer('idPaiement');
            $table->string('Telephone');
            $table->boolean('isPaied')->default(false);
            $table->boolean('isSent')->default(false);
            $table->timestamp('isSentAt')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
