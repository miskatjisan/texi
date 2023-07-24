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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('pay_type');
            $table->float('price');
            $table->string('card_num');
            $table->string('cvc_mm_yy');
            $table->string('from');
            $table->string('to');
            $table->string('date');
            $table->string('time');
            $table->integer('flight_num');
            $table->string('area');
            $table->string('class');
            $table->string('type');
            $table->integer('passenger');
            $table->integer('cabin');
            $table->integer('checkin');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('client_countrycode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
