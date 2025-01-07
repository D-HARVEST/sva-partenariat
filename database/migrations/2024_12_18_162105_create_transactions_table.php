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
            $table->integer('Validite')->default(720);
            $table->string('ModePaiement');
            $table->boolean('Statut')->default(false);
            $table->integer('idPaiement');
            $table->string('Telephone');
            $table->boolean('isPaied')->default(false);
            $table->boolean('isSent')->default(false);
            $table->timestamp('isSentAt')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('data_package_id')->constrained()->onDelete('cascade');
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
