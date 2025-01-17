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
        Schema::create('data_packages', function (Blueprint $table) {
            $table->id();
            $table->string('referenceAPI')->nullable();
            $table->integer('Volume');
            $table->integer('Cout');
            $table->integer('Prix');
            $table->integer('AncienPrix');
            $table->integer('Validite')->default(720);
            $table->foreignId('recharge_stock_id')->nullable()->constrained("recharge_stocks")->nullOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_packages');
    }
};
