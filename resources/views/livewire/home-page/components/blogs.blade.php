<section class="bg-GrayTint1">
    <div class="container lg:px-20 px-8 mx-auto overflow-hidden py-8 md:py-4 lg:py-20 ">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200"  class="flex justify-center items-center flex-col mb-14 text-center  lg:p-0">
            <h2 class="font-56-300 hidden sm:block text-my-blue-navy ">مقالات</h2>
        </div>
        <div class="grid gap-6 grid-cols-12 mb-14">
            <div data-aos="fade-left" data-aos-duration="1500" data-aos-offset="300" class="p-4 my-shadow col-span-12 xl:col-span-6 rounded-lg relative">
                <a href="{{route('article', $article[0]->slug)}}" class="after:absolute after:inset-0" wire:navigate></a>
                <img class="w-full lg:h-[25rem] h-52 rounded-lg object-cover" src="{{asset('storage/article/thumbnail/'. $article[0]->articleImage->url)}}" alt="img">
                <h3 class=" text-GrayShade3 mt-4 !mb-0 text-base">{{$article[0]->title}}</h3>
                <p class=" text-gray-600 mt-2 text-justify !text-xs !mb-0 leading-normal">{{$article[0]->short_text}}</p>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <img class="mr-2 w-10 h-10 rounded-full object-fill" src="{{asset('storage/users/profile/'. $article[0]->user->profileImage->url)}}" alt="{{$article[0]->user->name}}">
                        <div class="mr-2">
                            <p class=" text-gray-600 !text-xxs !mb-0">{{$article[0]->user->name}}</p>
                            <p class="text-gray-400 !mb-0 !text-xxs">{{$article[0]->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <button class="flex items-center gap-3">
                        <p class=" text-my-pink font-14-bold !mb-0">بیشتر ...</p>
                        <img class="h-6 w-6" src="{{asset('storage/website/back.svg')}}" alt="ژاو استودیو">
                    </button>
                </div>
            </div>

            <div data-aos="fade-right" data-aos-duration="1500" data-aos-offset="300" class=" col-span-12 xl:col-span-6 flex flex-col justify-between h-full">
                @forelse($article->take(-3) as $item)
                    <div class="my-shadow p-4 rounded-lg flex xl:flex-nowrap flex-wrap gap-4 relative">
                        <a href="{{route('article', $item->slug)}}" class="after:absolute after:inset-0" wire:navigate></a>
                        <img class="xl:h-[10.5rem] lg:h-[25rem] h-52 aspect-square rounded-md object-cover xl:w-2/5 w-full" src="{{asset('storage/article/thumbnail/'. $item->articleImage->url)}}" alt="{{$item->title}}">
                        <div class="flex flex-col justify-between w-full">
                            <h3 class="text-base mb-2 font-16-bold text-GrayShade3 line-clamp-2">{{$item->title}}</h3>
                            <p class=" text-gray-600 !mb-4 !text-xs text-justify line-clamp-3 leading-normal">{{$item->short_text}}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <img class="mr-2 w-10 h-10 aspect-square object-fill rounded-full" src="{{asset('storage/users/profile/'. $item->user->profileImage->url)}}" alt="{{$item->user->name}}">
                                    <div class="mr-2">
                                        <p class="text-gray-600 !text-xxs !mb-0">{{$item->user->name}}</p>
                                        <p class="text-gray-400 !mb-0 !text-xxs">{{ $item->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <button class="flex items-center gap-3">
                                    <p class="text-my-pink font-14-bold !mb-0">بیشتر ...</p>
                                    <img class="h-6 w-6 -ms-4 text-my-pink" src="{{asset('storage/website/back.svg')}}" alt="ژاو استودیو">
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
        <div class="flex justify-center items-center hover:opacity-70">
            <button  data-aos="zoom-in" data-aos-duration="1500" class="font-16-400 text-white bg-gradient-to-r from-my-light-blue to-my-blue-navy px-8 py-3 rounded-full">همه بلاگ ها</button>
        </div>
    </div>
</section>
