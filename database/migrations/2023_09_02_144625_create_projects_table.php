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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longtext('keywords');
            $table->longtext('tools');
            $table->longtext('client')->nullable();

            // category
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->dateTime('start_date')->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->longtext('description');
            $table->string('link')->nullable();
            $table->string('cover_home')->nullable();
            $table->string('cover_work')->nullable();
            $table->string('cover_details')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 => active, 2 => inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
