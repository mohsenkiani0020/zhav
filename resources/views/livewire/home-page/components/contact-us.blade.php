<section>
    <div class="relative image-counseling  bg-center bg-no-repeat bg-cover h-[60vh] bg-fixed">
        <div class="flex flex-col justify-center w-full h-full text-center bg-gradient-to-b from-[#09070b9b] to-[#dc354678]">
            <div class="container mx-auto px-8 md:px-8 xl:px-20">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-offset="400">
                    <h2 class="!text-center text-white !mb-0">مشاوره کسب و کار</h2>
                    <p class="mt-2 text-my-lighter-gray font-16-400 !mb-0 !text-center">اگر قصد دریافت تماس از جانب مشاوران ما را دارید کافیست شماره تماس خود و یا ایمیل خود را در این قسمت وارد کنید.</p>
                    <div class="flex justify-center mt-6 flex-col items-center">
                        <form class="flex justify-center mt-6 border-2 rounded-full w-full sm:w-[50%] lg:w-[60%] ">
                            <input type="text" wire:model="name" class="hidden">
                            <input id="inputclass" wire:model="email_phone" class="focus:outline-none py-3 px-2 bg-transparent text-my-white text-left w-full" type="text" placeholder="ایمیل یا شماره تماس">
                            <button wire:click.prevent="submitForm" class="bg-my-white py-3 px-6 rounded-full">ارسال</button>
                        </form>
                        @error("email_phone")
                        <p class="mt-2 text-my-lighter-gray font-16-bold !mb-0">این فیلد اجباری است</p>
                        @enderror
                        @if(session()->has('success'))
                            <p class="mt-2  text-my-lighter-gray font-16-bold !mb-0">{{session('مشاوران ما به زودی با شما تماس خواهند گرفت')}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
