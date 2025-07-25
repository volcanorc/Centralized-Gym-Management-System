<footer class="">
    <div class="relative items-center w-full py-12 text-center bg-peak-4 text-primary md:py-24 lg:py-32">
        <div class="container grid items-center justify-center gap-4 px-4 m-auto text-center md:px-6">
            <div class="space-y-3 text-lemon-base">
                <h2 class="text-3xl font-bold tracking-tighter text-lemon-base md:text-4xl/tight">
                    Join Our Vibrant Community
                </h2>
                <p class="mx-auto max-w-[600px] md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed text-primary">
                    Connect with like-minded individuals, attend exclusive
                    events, and take your fitness to new heights.
                </p>
            </div>
            <div class="max-w-sm mx-auto space-y-2">
                <form class="flex flex-col gap-2 sm:flex-row">
                    <x-forms.text-input
                        class="items-center flex-1 w-full h-10 px-3 py-2 text-sm rounded-md sm:w-auto text-primary"
                        placeholder="Enter your email" type="email" />
                    <div>
                        <x-custom.primary-button class="bg-lemon-base text-secondary" type="button"
                            onclick="window.location.href = '{{ route('register') }}'">
                            Join Us
                        </x-custom.primary-button>
                    </div>
                </form>
            </div>
            <p class="text-xs text-primary">
                Sign up to get notified about our latest updates and
                promotions.
            </p>
        </div>
    </div>
    <div class="w-full px-5 pt-6 pb-6 mx-auto text-sm bg-black text-gray-300 sm:pt-8 md:pt-10">
        <div class="gap-8 mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 lg:justify-between">

            <!-- Danao Gym Section -->
            <div class="space-y-4 text-center lg:text-left mx-auto">
                <span class="text-lg font-bold dark:text-white">Danao Gym</span>

                <p class="text-gray-400">
                    Join today and take the first step towards achieving your fitness goals.
                </p>
                <form class="flex justify-center lg:justify-start">
                    <x-custom.primary-button onclick="window.location.href = '{{ route('register') }}'" type="button">
                        Join Now
                    </x-custom.primary-button>
                </form>
                <p class="text-xs text-gray-400">
                    By joining, you agree to our <a class="underline dark:text-tint_4" href="#">Privacy
                        Policy</a>.
                </p>
            </div>

            <!-- Contact Us Section -->
            <div class="space-y-4 text-center lg:text-left mx-auto">
                <h3 class="mb-2 font-semibold text-md">Connect with Us</h3>

                <!-- Social Media Links -->
                <div class="flex flex-col space-y-2 lg:space-y-4 items-center lg:items-start">
                    <a href="https://www.facebook.com/profile.php?id=61567209182726" target="_blank"
                        class="flex items-center group text-gray-400 hover:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                        <span class="ml-2">Gym One </span>
                    </a>
                    <a class="flex items-center group text-gray-400 hover:text-gray-100">
                        <svg data-name="1-Email" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d="M29 4H3a3 3 0 0 0-3 3v18a3 3 0 0 0 3 3h26a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm-.72 2L16 14.77 3.72 6zM30 25a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.23l13.42 9.58a1 1 0 0 0 1.16 0L30 7.23z" />
                        </svg>
                        <span>gymoneadmin@gmail.com</span>
                    </a>

                    {{-- <a href="#" class="flex items-center group text-gray-400 hover:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                        <span class="ml-2">Instagram</span>
                    </a>

                    <a href="#" class="flex items-center group text-gray-400 hover:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5 9.341-9.334v-.424A6.67 6.67 0 0 0 16 3.542a6.533 6.533 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.816 6.533 6.533 0 0 1-2.084.797A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.286 3.286 0 0 0 1.017 4.382 3.323 3.323 0 0 1-1.487-.409v.041a3.288 3.288 0 0 0 2.633 3.218 3.203 3.203 0 0 1-.865.115c-.211 0-.417-.021-.616-.061a3.287 3.287 0 0 0 3.066 2.277A6.588 6.588 0 0 1 .781 13.58a9.29 9.29 0 0 0 5.025 1.473" />
                        </svg>
                        <span class="ml-2">Twitter</span>
                    </a> --}}
                </div>
            </div>

            <!-- Address Section -->
            <div class="space-y-4 text-center lg:text-left mx-auto">
                <h3 class="mb-2 font-semibold text-md">Our Location</h3>
                <address class="not-italic text-gray-400">
                    Gym One Danao <br>
                    Near Juan Luna Road, Danao City, Cebu
                </address>
                <p class="text-gray-400">Mon - Sat, 8:30 AM - 12:00 PM, 2:00 PM - 8:00 PM</p>
                <p class="text-gray-400">Sunday, 2:00 PM - 8:00 PM</p>
            </div>
        </div>
    </div>

</footer>
