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
        Schema::table('majors', function (Blueprint $table) {
        $table->text('description')->nullable()->change();
        $table->text('Study_Plan')->nullable()->change();
        $table->text('Skills')->nullable()->change();
        $table->text('Career_Opportunities')->nullable()->change();

    });
    }

    public function down(): void
    {
        Schema::table('majors', function (Blueprint $table) {
        $table->text('description')->nullable(false)->change();
        $table->text('Study_Plan')->nullable(false)->change();
        $table->text('Skills')->nullable(false)->change();
        $table->text('Career_Opportunities')->nullable(false)->change();
        });
    }
};
