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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->unique()->nullable();
            $table->string('name');
            $table->date('dob');
            $table->enum('gender', ['male', 'female']);
            $table->enum('edu_status', ['yet_to_start', 'preschool', 'primary', 'secondary', 'tertiary', 'completed']);
            $table->date('admission_date')->nullable();
            $table->longText('admission_notes')->nullable();
            $table->string('guardian_name');
            $table->string('guardian_phone_no')->nullable();
            $table->string('guardian_relationship');
            $table->string('photo_url')->nullable();
            $table->longText('behavior_notes')->nullable();
            $table->date('enrollment_date')->nullable();
            $table->date('expected_completion_date')->nullable();
            $table->longText('health_notes')->nullable();
            $table->boolean('has_special_needs')->default(false);
            $table->longText('special_needs_description')->nullable();
            $table->enum('residency_status', ['active', 'inactive', 'on_leave'])->default('active')->nullable();
            $table->string('school_name')->nullable();
            $table->enum('school_affiliation', ['public', 'private', 'ngo'])->nullable();
            $table->string('school_location')->nullable();
            $table->string('school_county')->nullable();
            $table->string('school_phone_no')->nullable();
            $table->longText('school_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
