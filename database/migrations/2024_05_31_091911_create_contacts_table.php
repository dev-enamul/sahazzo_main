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
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description');
            $table->longText('address');
            $table->string('phone_no');
            $table->string('phone_no_2')->nullable();
            $table->string('email');
            $table->string('email2')->nullable();
            $table->text('map')->nullable();
            $table->string('twitter')->nullable();
            $table->string('fb')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('pinterest')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
