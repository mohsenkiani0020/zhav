<div class="basis-full lg:basis-1/4 mt-10">
    <div class="flex flex-col items-center">
        <h5 class="font-bold text-black inline-block mx-auto px-4 py-2">نویسنده</h5>
        <div class="text-center relative">
            <img class="rounded-full mx-auto w-30 aspect-square my-3 lazyload object-cover"
                src="{{ asset("/storage/users/profile/" . $article->user->profileImage->url) }}"
                alt="{{ $article->user->profileImage->alt }}">
            <div class="flex flex-col ms-3 items-center">
                <h2 class="text-dark text-xl font-semibold !mt-0 mb-5">{{ $article->user->name }}</h2>
            </div>
            <div>
                <p class="!m-0">زمان مطالعه: <strong>{{ $article->reading_time }}</strong>دقیقه</p>
                <p class="block !m-0">دسته بندی:</p>
                @forelse($article->articleCategory as $category)
                    <span class="bg-indigo text-white text-xs font-medium p-1 px-1.5 rounded-2xl dark:bg-indigo-900"># {{ $category->title }}</span>
                @empty
                @endforelse
            </div>
        </div>
        {{--                social media--}}
        {{--                <div class="w-full flex justify-center w-fit bg-secondary rounded-lg">--}}
        {{--                    @forelse($article->user->socialMedia as $item)--}}
        {{--                        <a class="text-decoration-none badge" href="{{ $item->pivot->address }}">--}}
        {{--                            <img src="{{Storage::url("/website/blog/facebook.png")}}">--}}
        {{--                        </a>--}}
        {{--                    @empty--}}
        {{--                    @endforelse--}}
        {{--                </div>--}}
    </div>
    <div class="flex flex-col ms-3 items-center mt-8 mt-lg-10 mt-xl-12">
        <div class="w-full text-center my-5">
            <h5 class="text-2xl font-bold text-black border-b-4 border-my-blue-navy inline-block mx-auto px-4 py-2">دیگر مقالات</h5>
        </div>
    </div>
    <div class="flex flex-row items-center space-y-5 space-y-lg-0 sticky top-20">
        <div class="w-full xl:w-14/24">
            <div class="h-full flex flex-col justify-between shadow p-3 rounded-lg gap-y-5">
                <a class="text-decoration-none text-black" href="{{ route('article', $nextArticle->slug) }}" wire:navigate>
                    <img class="rounded-4 w-full max-h-16rem mb-4 lazyload rounded-lg aspect-square"
                        src="{{ asset("storage/article/thumbnail/" . $nextArticle->articleImage->url) }}"
                        alt="{{ $nextArticle->articleImage->alt }}">
                    <h5 class="mt-3">{{ $nextArticle->title }}</h5>
                    <p class="flex-grow-1">{{ $nextArticle->description }}</p>
                </a>
                <div class="flex flex-row my-5">
                    <img class="w-14 rounded-full me-4 lazyload aspect-square"
                        src="{{ asset("storage/users/profile/" . $nextArticle->user->profileImage->url) }}"
                        alt="{{ $nextArticle->user->profileImage->alt }}">
                    <div class="flex flex-col">
                        <span class="font-semibold flex-grow-1 text-sm mb-2">{{  $nextArticle->user->name }}</span>
                        <span class="text-xs ">{{ $nextArticle->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
