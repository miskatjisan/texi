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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('comp_name');
            $table->string('trade_name');
            $table->string('comp_phone');
            $table->string('comp_mobile');
            $table->string('comp_url');
            $table->string('fulloffice_address');
            $table->string('post_code');
            $table->string('city');
            $table->string('country');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('email');
            $table->string('password');
            $table->string('booking_email');
            $table->string('li_authority');
            $table->string('li_number');
            $table->string('li_expiry_date');
            $table->string('ins_number');
            $table->string('ins_expiry_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
