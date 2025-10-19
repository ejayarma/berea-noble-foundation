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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_post_category_id')->constrained('blog_post_categories');
            $table->foreignId('author_id')->constrained('authors');
            $table->string('title');
            $table->string('image');
            $table->string('slug');
            $table->longText('content');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['title', 'deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
