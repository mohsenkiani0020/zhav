<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class SingleArticle extends Component
{
    public Article $article;
    public Article $nextArticle;

    public function mount(Article $article): void
    {
        $this->article = $article;
        $this->nextArticle = Article::where('id', '<>', $article->id)->inRandomOrder()->first();
    }


    public function render()
    {
        return view('livewire.articles.single-article.single-page')->extends('layout.layout')->section('content');
    }
}
