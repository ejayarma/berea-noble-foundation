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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('album_id')->constrained('albums')->cascadeOnDelete();
            $table->string('title');
            $table->text('alt_text')->nullable();
            $table->text('description')->nullable();
            $table->string('file_path');
            $table->string('thumbnail_path')->nullable();
            $table->string('category')->default('all');
            $table->integer('file_size')->nullable(); // in bytes
            $table->string('mime_type')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->boolean('is_published')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('album_id');
            $table->index('category');
            $table->index('is_published');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
