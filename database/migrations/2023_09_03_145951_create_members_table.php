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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('designation');
            $table->string('photo');
            $table->json('soocial_medias')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->json('skills')->nullable();
            $table->tinyInteger('type')->default(1)->comment('1 => inhouse, 2 => freelance , 3 => x-inhouse');
            $table->tinyInteger('executive')->default(2)->comment('1 => yes, 2 => No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
