<div>
    <div>
        <div class="relative hiro-image  bg-center bg-no-repeat bg-cover h-[100vh] bg-fixed">
            <div class="absolute inset-0 bg-[rgba(0,0,0,0.4)]">
{{--                <div data-aos="fade-up" data-aos-duration="3000" class="pt-60 px-8 sm:px-2 md:px-8 xl:px-20">--}}
{{--                    <p class="text-my-white font-72-bold hidden sm:block">ژاو استودیو</p>--}}
{{--                    <p class="text-my-white font-56-bold block sm:hidden">ژاو استودیو</p>--}}
{{--                    <!-- <p class="text-white H3Black mt-4">همه چیز از یک رویا شروع ﻣﻰشود</p> -->--}}
{{--                    <p class="text-my-white font-24-bold mt-5 hidden sm:block">خدمات طراحی و اجرای انواع وب سایت‌های شخصی، <br/> تجاری و اپلیکیشن های موبایل اندروید و iOS</p>--}}
{{--                    <p class="text-my-white mt-5 block sm:hidden text-justify font-16-bold leading-7">خدمات طراحی و اجرای انواع وب سایت‌های شخصی،تجاری، وب اپلیکیشن و اپلیکیشن های موبایل اندروید و iOS</p>--}}
{{--                    <div class="flex gap-3 mt-9 justify-center sm:justify-normal flex-col sm:flex-row">--}}
{{--                        <button class="hover:opacity-70 font-16-400 rounded-full px-9 py-3 text-my-white border-2  ">خدمات</button>--}}
{{--                        <button class="hover:opacity-70 font-16-bold border-2 border-solid bg-my-white rounded-full px-9 py-3"><p class="bg-gradient-to-r from-my-light-blue to-my-blue-navy text-transparent bg-clip-text ">تماس با ما</p></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>

<style>
    @media (min-width: 320px) {
        .hiro-image {
            background-image: url({{asset('storage/article/header/'.$article->articleHeaderImage->url)}});
        }
    }

    @media (min-width: 760px){
        .hiro-image {
            background-image: url({{asset('storage/article/header/'. $article->articleHeaderImage->url)}});
        }
    }
</style>
