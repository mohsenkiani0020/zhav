<section>
    <div>
        <div>
            <div class="relative hiro-image bg-center bg-no-repeat bg-cover h-[100vh] bg-fixed">
                <div class="absolute inset-0 bg-[rgba(0,0,0,0.4)] flex flex-col-reverse">
                    <div data-aos="fade-up" data-aos-duration="3000" class="mb-8 sm:mb-32 px-8 sm:px-2 md:px-8 xl:px-20">
                        <h1 class="text-my-white lg:text-7xl">درباره ما</h1>
                        <h2 class="text-my-white !my-5 font-300 lg:max-w-[50%] text-xl sm:text-2xl">تیم خلاق و توانمند ژاو استودیو همراه شما از ایده تا خلق محصول و فروش نهایی است، با ما تنها نباشید!</h2>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        @media (min-width: 320px) {
            .hiro-image {
                background-image: url({{asset('storage/website/image-about-us-mobbile.jpg')}});
            }
        }
    
        @media (min-width: 760px){
            .hiro-image {
                background-image: url({{asset('storage/website/about-us.webp')}});
            }
        }
    </style>
    
</section>