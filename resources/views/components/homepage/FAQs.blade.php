<div class="bg-peak-5 text-primary items-center w-full">
    <!-- Set parent to full width -->
    <div class="container flex flex-col items-center justify-center gap-4 px-4 md:px-6 w-[70%] mx-auto my-4">
        <div class="text-center mt-5">
            <h1 class="font-bold text-4xl">Have questions? We've got answers!</h1>
        </div>
        <div class="space-y-4 w-full">
            <details class="border border-border rounded-md p-4 w-full">
                <summary class="cursor-pointer">Where is the Gym Located?</summary>
                <p class="text-sm italic pl-4">Gym One Danao is conveniently located near Juan Luna Road in Danao City,
                    Cebu.</p>
                @include('gym-map')
            </details>
            </details>

            @foreach ($questions as $question)
            <details class="border border-border rounded-md p-4 w-full">
                <summary class="cursor-pointer">{{ $question->question }}</summary>
                <p class="text-sm italic pl-4">{{ $question->answer }}</p>
                <p class="text-sm italic pl-4">{{ $question->extra_answer ? $question->extra_answer : '' }}</p>
            </details>
            @endforeach

        </div>
        <div class="mt-2 contents-left flex items-center gap-2">
            <p>Still have questions?</p>
            <x-custom.secondary-button onclick="window.location.href = 'https://www.facebook.com/profile.php?id=61567209182726'">Contact us</x-custom.secondary-button>
        </div>
    </div>

</div>