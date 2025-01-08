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
        Schema::create('mvm_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recharge_stock_id')->nullable()->constrained("recharge_stocks")->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('transaction_id')->nullable()->constrained("transactions")->nullOnDelete()->cascadeOnUpdate() ;
            $table->enum('Type', ['ENTREE', 'SORTIE'])->nullable();
            $table->integer('Quantite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mvm_stocks');
    }
};
