<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('AI_data', function (Blueprint $table)  {
            $table->id();
            $table->string('Major');
            $table->decimal('Math',3,2);
            $table->decimal('Creativity',3,2);
            $table->decimal('Problem_Solving',3,2);
            $table->decimal('Communication_Skills',3,2);
            $table->decimal('Technology_Interest',3,2);
            $table->decimal('Leadership',3,2);
            $table->decimal('Analytical_Thinking',3,2);
            $table->decimal('Attention_to_Details',3,2);
            $table->decimal('Biology_Interest',3,2);
            $table->decimal('Fitness_Interest',3,2);
            $table->decimal('Teamwork',3,2);
            $table->decimal('Stress_Tolerance',3,2);
            $table->decimal('Ethics',3,2);
            $table->decimal('Patience',3,2);
            $table->decimal('Empathy',3,2);
            $table->decimal('Spatial_Thinking',3,2);
            $table->decimal('Research_Drive',3,2); 
            $table->decimal('Persuasion',3,2);   
            $table->decimal('Social_Interest',3,2);
            $table->decimal('Risk_Taking',3,2);
            $table->decimal('Aesthetic_Sensitivity',3,2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('AI_data');
    }
};
