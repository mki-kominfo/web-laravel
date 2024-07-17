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
        Schema::create('taxs', function (Blueprint $table) {
            $table->id('tax_id');
            $table->foreignId('outlet_id')->references('outlet_id')->on('outlets');
            $table->string('tax_name');
            $table->string('tax_rate');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxs');
    }
};
