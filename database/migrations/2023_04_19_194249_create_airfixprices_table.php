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
        Schema::create('airfixprices', function (Blueprint $table) {
            $table->id();
            $table->string('journey_type')->nullable();
            $table->string('a_from')->nullable();
            $table->string('a_to')->nullable();
            $table->float('a_fare')->nullable();
            $table->integer('pick_drop_charge')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airfixprices');
    }
};
