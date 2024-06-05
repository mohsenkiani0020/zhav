<?php

use App\Models\Article;
use App\Models\ArticleCategory;
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
        Schema::create('article_article_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Article::class);
            $table->foreignIdFor(ArticleCategory::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_article_categories');
    }
};
