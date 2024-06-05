<div>
    <div class="relative lg:m-5">
        <div class="absolute -z-10 h-full w-full lg:max-w-full p-5 lg:rounded-2xl bg-cover bg-center"
            style="background-image: url({{ Storage::url('/website/auth/register-by-provider.png') }})  "></div>
        <header class="max-h-full overflow-hidden ">
            <div class="container mx-auto my-16 pt-10">
                <div class="grid grid-cols-5 w-full lg:w-100 mx-auto relative rounded-2xl overflow-hidden justify-start mt-16 lg:px-0 md:px-14">
                    <div class="flex flex-col self-center w-full xl:col-span-2 lg:col-span-3 col-span-5 ">
                        <div
                            class="md:w-[560px] md:h-[670px]  bg-white/60 backdrop-opacity-95 backdrop-blur flex flex-col justify-around py-40 md:px-10 px-4 rounded-2xl border border-white ">
                            <h1 class="font-bold lg:text-4xl md:text-3xl text-2xl text-black mb-4 text-center">Welcome
                                                                                                               to Zhav Studio</h1>
                            <div class="w-full mt-4">
                                <h3 class="text-black my-4 text-center">{{ auth()->user()->email }}</h3>
                            </div>
                            <div class="w-full bg-black h-px"></div>
                            <form class="px-2">
                                @csrf
                                <div class="md:grid md:grid-cols-2 gap-4">
                                    <div class="lg:my-0.5 my-3">
                                        <input class="text-darkGray w-full py-3 px-4 rounded-2xl placeholder-darkGray border border-darkGray outline-0 bg-transparent  @error('first_name') is-invalid  @else @enderror"
                                            type="text" wire:model.live="first_name"

                                            placeholder="First Name"/>
                                        @error('first_name')
                                        <div class="bg-error rounded-lg mb-0 p-2 w-full mt-2 ps-2  ">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="lg:my-0.5 my-3">
                                        <input class="text-darkGray w-full py-3 px-4 rounded-2xl placeholder-darkGray border border-darkGray outline-0 bg-transparent @error('last_name') is-invalid @else  @enderror"
                                            type="text" wire:model.live="last_name"
                                            placeholder="Last Name"/>
                                        @error('last_name')
                                        <div class="bg-error rounded-lg mb-0 p-2 w-full mt-2 ps-2  ">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <button type="submit"
                                        wire:click.prevent="nextStep"
                                        class="text-white bg-black px-10 py-4 rounded-2xl flex flex-row mt-8">
                                        {{ __('Next') }}
                                        <img src="{{ Storage::url('/website/auth/arrow-right.svg') }}">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hidden lg:flex p-0 flex flex-row justify-end"></div>
                </div>
            </div>
        </header>
    </div>
</div>
