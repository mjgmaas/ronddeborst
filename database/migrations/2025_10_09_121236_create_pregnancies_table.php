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
        Schema::create('pregnancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->date('due_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->enum('delivery_type', [
                'vaginal_spontaneous',
                'vaginal_induced',
                'vaginal_instrumental',
                'cesarean_elective',
                'cesarean_emergency',
                'water_birth',
                'breech_vaginal',
                'assisted_other',
                'unknown',
                'other',
            ])->nullable();
            $table->string('delivery_type_other')->nullable();
            $table->enum('birth_place', ['home', 'hospital', 'birth_center', 'unknown', 'other'])->nullable();
            $table->string('birth_place_other')->nullable();
            $table->text('complications')->nullable();
            $table->text('medication_during_delivery')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregnancies');
    }
};
