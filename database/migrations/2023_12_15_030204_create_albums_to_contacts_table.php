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
        Schema::create('albums_to_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('album_id')->references('id')->on('album_contacts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('contact_id')->references('id')->on('contacts')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums_to_contacts');
    }
};
