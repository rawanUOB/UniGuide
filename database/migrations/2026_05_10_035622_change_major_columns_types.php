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

                $table->longText('description')->change();
                $table->json('Study_Plan')->change();
                $table->json('Teaching_Methods')->nullable()->change();
                $table->json('Assessment_Methods')->nullable()->change();
                $table->json('Skills')->change();
                $table->json('Career_Opportunities')->change();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('majors', function (Blueprint $table) {

                $table->longText('description')->change();
                $table->json('Study_Plan')->change();
                $table->json('Teaching_Methods')->nullable()->change();
                $table->json('Assessment_Methods')->nullable()->change();
                $table->json('Skills')->change();
                $table->json('Career_Opportunities')->change();
            
        });
    }
};
