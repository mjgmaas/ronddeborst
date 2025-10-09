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
        Schema::table('patients', function (Blueprint $table) {
            $table->string('general_practitioner')->nullable()->after('last_viewed_at');
            $table->string('midwife')->nullable()->after('general_practitioner');
            $table->string('maternity_care_provider')->nullable()->after('midwife');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn(['general_practitioner', 'midwife', 'maternity_care_provider']);
        });
    }
};
