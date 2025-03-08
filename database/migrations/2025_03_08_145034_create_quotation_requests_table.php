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
        Schema::create('quotation_requests', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('website_url')->nullable();
            $table->string('project_name');
            $table->string('service_type');
            $table->string('service_type_other')->nullable();
            $table->text('project_description');
            $table->string('primary_goal');
            $table->string('primary_goal_other')->nullable();
            $table->text('target_audience')->nullable();
            $table->text('features')->nullable();
            $table->string('tech_stack')->nullable();
            $table->string('hosting_status')->nullable();
            $table->text('design_style')->nullable();
            $table->text('brand_assets')->nullable(); // JSON for file paths
            $table->string('budget');
            $table->string('timeline');
            $table->text('competitors')->nullable();
            $table->text('additional_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_requests');
    }
};
