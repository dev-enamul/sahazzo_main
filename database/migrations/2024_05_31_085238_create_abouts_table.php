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
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('mission_text')->nullable();
            $table->string('mission_image')->nullable();
            $table->string('vission_text')->nullable();
            $table->string('vission_image')->nullable();
            $table->string('values_text')->nullable();
            $table->string('values_image')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
