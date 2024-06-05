<div>
    <div class="relative lg:m-5">
        <div class="absolute -z-10 h-full w-full lg:max-w-full p-5 lg:rounded-2xl bg-cover bg-center" style="background-image: url({{ Storage::url('/website/auth/login.png') }})  "></div>
        <header class="max-h-full overflow-hidden ">
            <div class="container mx-auto my-16 pt-10">
                <div class="grid grid-cols-5 w-full lg:w-100 mx-auto relative rounded-2xl overflow-hidden justify-start mt-20 lg:px-0 md:px-14">
                    <div class="flex flex-col self-center w-full xl:col-span-2 lg:col-span-3 col-span-5 ">
                        <div
                            class="shadow-inner shadow-white/40 bg-white/60 backdrop-opacity-95 backdrop-blur flex flex-col justify-around py-7 md:px-10 px-4 rounded-2xl border border-white md:w-[560px] md:h-[670px]">
                            <h1 class="font-bold lg:text-4xl md:text-3xl text-2xl text-black mb-4 text-center">Welcome to Landa
                                                                                                               Trip</h1>
                            <div class="w-full">
                                <div class="flex flex-col w-full">
{{--                                    <a href="{{ route('third-party.auth.redirect', ["provider"=> "google"]) }}" class="flex justify-center rounded-2xl w-full py-1 border border-darkGray mt-2">--}}
{{--                                        <img class="w-12 px-2" src="{{ Storage::url('/website/login/google.svg') }}">--}}
{{--                                        <h4 class="self-center text-lg font-medium">Log in with Google</h4>--}}
{{--                                    </a>--}}
{{--                                    <a href="{{ route('third-party.auth.redirect', ["provider"=> "facebook"]) }}" class="flex justify-center rounded-2xl w-full py-1 border border-darkGray mt-2">--}}
{{--                                        <img class="w-12 px-2" src="{{ Storage::url('/website/login/facebook.svg') }}">--}}
{{--                                        <h4 class="self-center text-lg font-medium">Log in with Facebook</h4>--}}
{{--                                    </a>--}}
                                </div>
                            </div>
                            <div class="w-full bg-black h-px"></div>
                            @if(Session::get('successful'))
                                <!-- <div class="text-green-600 text-xl">{{Session::get('successful')}}</div> -->
                                <div class="alert bg-transparent border-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <span>{{Session::get('successful')}}</span>
                                </div>
                            @else
                                <form class="grow-1 flex flex-col justify-center">
                                    @csrf
                                    <div class="my-2">
                                        <input
                                            class="text-black w-full py-3 px-4 rounded-2xl placeholder-darkGray border border-darkGray outline-0 bg-transparent @error('email') is-invalid @else @enderror"
                                            type="email" wire:model.live="email" id="input-email" placeholder="Email"/>
                                        @error('email')
                                        <div class="bg-error mb-0 p-2 w-full mb-2 ps-2 py-2 rounded-full mb-4">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="my-2">
                                        <input
                                            class="text-black w-full py-3 px-4 rounded-2xl placeholder-darkGray border border-darkGray outline-0 bg-transparent @error('password') is-invalid @else   @enderror"
                                            type="password" wire:model.live="password" id="input-pass" placeholder="Password"/>
                                        @error('password')
                                        <div class="bg-error mb-0 p-2 w-full mb-2 ps-2 py-2 rounded-full mb-4">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{--                                <div class="bg-primary w-75 mx-auto my-2" style="height: 50px;"></div>--}}
                                    <input type="hidden" name="recaptcha" id="recaptcha">
                                    <div class="w-full mx-auto flex justify-center mt-8">
                                        <button type="submit"
                                            wire:click.prevent="login"
                                            class="text-white bg-black px-10 py-4 rounded-2xl flex flex-row ">
                                            {{ __('Log In') }}
                                            <img src="{{ Storage::url('/website/auth/arrow-right.svg') }}">
                                        </button>
                                    </div>
                                </form>
                            @endif
                            <div class="pt-4 flex flex-row justify-center">
                                <span class="pe-2">Don't have an account?</span>
                                <a class="text-primary decoration-none"
                                    wire:navigate
                                    href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                            </div>
                            <div class="flex flex-row justify-center">
                                <a class="text-orange-500 decoration-none"
                                    href="{{ route('forgot-password') }}" wire:navigate>{{ __('pages/auth-lang.Forget-password') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:flex p-0 flex flex-row justify-end"></div>
                </div>
            </div>
        </header>
    </div>
</div>
