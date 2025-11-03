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
        // 1. Add as nullable
        Schema::table('invoices', function (Blueprint $table) {
            $table->string('invoice_number')->nullable()->unique()->after('id');
        });

        // 2. Set invoice_number for existing records
        $invoices = \App\Models\Invoice::orderBy('created_at')->get();
        $counters = [];
        foreach ($invoices as $invoice) {
            $year = $invoice->created_at ? $invoice->created_at->format('y') : now()->format('y');
            $month = $invoice->created_at ? $invoice->created_at->format('m') : now()->format('m');
            $key = $year . $month;
            if (!isset($counters[$key])) {
                $counters[$key] = 1;
            } else {
                $counters[$key]++;
            }
            $number = str_pad($counters[$key], 2, '0', STR_PAD_LEFT);
            $invoice_number = $year . $month . $number;
            $invoice->invoice_number = $invoice_number;
            $invoice->save();
        }

        // 3. Make NOT NULL if supported (not for SQLite)
        Schema::table('invoices', function (Blueprint $table) {
             $table->string('invoice_number')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('invoice_number');
        });
    }
};
