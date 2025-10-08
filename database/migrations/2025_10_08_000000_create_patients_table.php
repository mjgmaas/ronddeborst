<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('street');
            $table->string('housenumber');
            $table->string('housenumber_suffix')->nullable();
            $table->string('postal_code');
            $table->string('city');
            $table->string('country');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('birthdate')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
