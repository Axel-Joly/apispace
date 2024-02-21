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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            
            $table->string('image');
            $table->string('en_name');
            $table->string('fr_name');
            $table->text('en_description');
            $table->text('fr_description');
            $table->string('en_distance');
            $table->string('fr_distance');
            $table->string('en_duration');
            $table->string('fr_duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};