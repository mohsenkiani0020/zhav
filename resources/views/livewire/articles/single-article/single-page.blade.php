@section('title'){{$article->title}} @endsection
@section('author'){{$article->user->name}}@endsection
<div>
    @section("description"){{ $article->description }}@endsection
    @section("keywords")
        @switch(app()->getLocale())
            @case("fr")
                <meta name="keywords" content="{{ $article->keywords }}">
                @break
            @case("fa")
                <meta name="keywords" content="{{ $article->keywords }}">
                @break
            @default
                <meta name="keywords" content="{{ $article->keywords }}">
        @endswitch
    @endsection

    @section('content')
        @includeIf('livewire.articles.single-article.components.hero')
        <div class="bg-GrayTint1">
            @includeIf('livewire.articles.single-article.components.blog_body')
        </div>
    @stop
</div>
