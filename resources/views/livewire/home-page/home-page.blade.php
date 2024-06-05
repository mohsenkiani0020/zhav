@section('title') اجرای انواع وب سایت و موبایل اپلیکیشن @endsection
@section("keywords")
    <meta name="keywords" content="طراحی وب سایت, کد نویسی, وب سایت شخصی, وب سایت فروشگاهی, وب سایت شرکتی, وب اپلیکیشن, اپلیکیشن موبایل, ساخت اپلیکیشن اندرویدی, ساخت اپلیکیشن برای IOS, دیجیتال مارکتینگ, استارت اپ, استارت اپ کانادا">
@endsection


<div>

    @includeIf('livewire.home-page.components.hero')
    @includeIf('livewire.home-page.components.services')
    @includeIf('livewire.home-page.components.mobile-app')
    @includeIf('livewire.home-page.components.web-app')
    @includeIf('livewire.home-page.components.process')
    @includeIf('livewire.home-page.components.portfolio')
    @includeIf('livewire.home-page.components.advantages')
    @includeIf('livewire.home-page.components.packages')
    @includeIf('livewire.home-page.components.contact-us')
    @includeIf('livewire.home-page.components.blogs')

    {{-- <section>
        <div class="relative image-counseling  bg-center bg-no-repeat bg-cover h-[60vh] bg-fixed">
            <div class="flex flex-col justify-center w-full h-full text-center bg-gradient-to-b from-[#09070b9b] to-[#dc354678]">
                <div class="container mx-auto px-8 md:px-8 xl:px-20">
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-offset="400">
                        <p class=" font-56-300 hidden sm:block text-center text-my-white">مشاوره</p>
                        <p class=" font-40-300 sm:hidden text-center text-my-white">مشاوره</p>
                        <p class="mt-2 text-my-lighter-gray">اگر قصد دریافت تماس از جانب مشاوران ما را دارید کافیست شماره تماس خود و یا ایمیل خود را در این قسمت وارد کنید.</p>
                        <div class="flex justify-center mt-6 ">
                            <form class="flex justify-center mt-6 border-2 rounded-full w-full sm:w-[50%] lg:w-[60%] ">
                                <input type="text" wire:model="name" class="hidden">
                                <input id="inputclass" wire:model="email_phone" class="focus:outline-none py-3 px-2 bg-transparent text-my-white text-left w-full" type="text">
                                <button wire:click.prevent="submitForm" class="bg-my-white py-3 px-6 rounded-full">ارسال</button>
                            </form>
                            @if(session()->has('success'))
                                <p>{{session('success')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}





    <style>
        .image-work-steps{
            background-image: url({{asset('storage/website/hiro-content.webp')}});
        }
        .bg-splide {
            background-image: url({{asset('storage/website/hiro-content2.webp')}});
        }
        .image-counseling {
            background-image: url({{asset('storage/website/hiro-content3.webp')}});
        }
    </style>
</div>

