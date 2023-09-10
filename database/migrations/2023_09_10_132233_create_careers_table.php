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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            $table->longtext('keywords');
            $table->longtext('location');
            $table->longtext('qualification');
            $table->longtext('overview');
            $table->longtext('responsibility');
            $table->longtext('benefit');
            $table->string('skill');
            $table->string('salary');

            $table->tinyInteger('type')->default(1)->comment('1 => fulltine, 2 => parttime, 3 => freelance');
            $table->tinyInteger('remote')->default(1)->comment('1 => Yes, 2 => No, 3 => Depends');
            $table->tinyInteger('status')->default(1)->comment('1 => Open, 2 => Paused, 3 => Closed');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
