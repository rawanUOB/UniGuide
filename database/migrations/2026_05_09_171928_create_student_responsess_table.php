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
        Schema::create('student_responses', function (Blueprint $table) {
            $table->id();
            $table->decimal('math', 3, 2);
            $table->decimal('creativity', 3, 2);
            $table->decimal('problem_solving', 3, 2);
            $table->decimal('communication_skills', 3, 2);
            $table->decimal('technology_interest', 3, 2);
            $table->decimal('leadership', 3, 2);
            $table->decimal('analytical_thinking', 3, 2);
            $table->decimal('attention_to_details', 3, 2);
            $table->decimal('biology_interest', 3, 2);
            $table->decimal('fitness_interest', 3, 2);
            $table->decimal('teamwork', 3, 2);
            $table->decimal('stress_tolerance', 3, 2);
            $table->decimal('ethics', 3, 2);
            $table->decimal('patience', 3, 2);
            $table->decimal('empathy', 3, 2);
            $table->decimal('spatial_thinking', 3, 2);
            $table->decimal('research_drive', 3, 2);
            $table->decimal('persuasion', 3, 2);
            $table->decimal('social_interest', 3, 2);
            $table->decimal('risk_taking', 3, 2);
            $table->decimal('aesthetic_sensitivity', 3, 2);
            $table->string('recommended_major'); // what was recommended
            $table->string('chosen_major')->nullable(); // what the student chose from recommendations
            $table->text('disagreement_majors')->nullable(); //what the user thinks doesnt fit them. 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_test_results');
    }
};
