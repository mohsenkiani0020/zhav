<div class="container mx-auto pb-10">
    <div class="flex flex-col lg:flex-row gap-x-14">
        <div class="basis-full lg:basis-3/4 mt-7">
            <div>
                <h1 class="text-2xl font-bold my-5">{{ $article->title }}</h1>
            </div>
            {!! $article->body !!}
        </div>
        @includeIf('livewire.articles.single-article.components.info-sidebar')
    </div>
</div>
