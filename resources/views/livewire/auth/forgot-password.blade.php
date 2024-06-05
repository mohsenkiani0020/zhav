<div>
    <div class="relative lg:m-5">
        <div class="absolute -z-10 h-full w-full lg:max-w-full p-5 lg:rounded-2xl bg-cover bg-center"
            style="background-image: url({{ Storage::url('/website/auth/forgot.png') }})  "></div>

        <header class="max-h-full overflow-hidden ">
            <div class="container mx-auto my-16 pt-10">
                <div
                    class="grid grid-cols-5 w-full lg:w-100 mx-auto relative rounded-2xl overflow-hidden justify-start mt-20 lg:px-0 md:px-14">
                    <div class="flex flex-col self-center w-full xl:col-span-2 lg:col-span-3 col-span-5 ">
                        <div
                            class="md:w-[560px] md:h-[670px] shadow-inner shadow-white/40 bg-white/60 backdrop-opacity-95 backdrop-blur flex flex-col justify-center py-20 md:px-10 px-4 rounded-2xl border border-white">
                            <h1 class="font-bold lg:text-4xl md:text-3xl text-2xl text-black mb-4 text-center">Forget
                                                                                                               password
                                                                                                               ?</h1>
                            <div class="w-full my-10">
                                <p class="flex justify-center text-center text-lg">
                                    Don’t worry, it happens. Please enter your email address. </p>
                            </div>
                            <div class="w-full bg-black h-px"></div>
                            <form id="forgot_pass" action="{{route('password.email')}}" method="POST">
                                @csrf
                                <div class="relative my-10">
                                    <input
                                        class="text-darkGray w-full py-3 px-4 rounded-2xl placeholder-darkGray border border-darkGray outline-0 bg-transparent  @error('email') is-invalid  @else @enderror"
                                        type="text" name="email" wire:model.live="email" id="email"
                                        placeholder="Enter Your Email"/>
                                </div>
                                @error('email')
                                <div class="bg-danger mb-0 p-1 w-100 mt-2 ps-2 py-1">{{ $message }}</div>
                                @enderror
                                <div class="w-full mx-auto flex justify-center ">
                                    <button type="submit"
                                        class="text-white bg-black px-10 py-4 rounded-2xl flex flex-row ">
                                        {{ __('Enter') }}
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
</div>@script
<script>
    <!-- Add this script to the bottom of your blade file or in a separate JavaScript file -->
    document.addEventListener('DOMContentLoaded', function () {
        // Find the form by its ID
        var form = document.getElementById('forgot_pass');

        // Attach a submit event listener to the form
        form.addEventListener('submit', function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the form data
            var formData = new FormData(form);

            // Make an AJAX request using the Fetch API
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token in the headers
                },
            })
                .then(response => response.json()) // Assuming the server returns JSON, adjust if needed
                .then(data => {
                    // Handle the response data here
                    console.log(data);
                })
                .catch(error => {
                    // Handle errors here
                    console.error(error);
                });
        });
    });
</script>@endscript
