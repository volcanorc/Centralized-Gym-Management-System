<div class="items-center w-full py-4 bg-peak-5 text-primary">
    <div class="container w-[70%] p-5 m-auto">
        <div>
            <h1 class="text-5xl font-raleway uppercase">Schedule Trainers</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 p-5 w-full justify-between">
            <div class="polygon-1-wrapper relative">
                <div class="polygon-1 bg-lemon-base absolute flex justify-center bottom-0">
                    <div class="absolute w-full xl:w-[85%] h-[150%] t-[-40%] z-50 inset-0">
                        <img src="/images/public/trainer_2.png" alt="Trainer Image"
                            class="object-cover w-full h-full" />
                    </div>
                </div>
            </div>
            <div class="polygon-2 flex flex-col p-10 md:pr-5 gap-5 bg-green-500 pl-12 sm:pl-24 md:pl-16 lg:pl-20">
                <div class="space-y-1">
                    <div>
                        <h2 class="text-sm md:text-lg">Don't know here to start? Worry no more</h2>
                        <h1 class="text-2xl md:text-1xl text-left font-bold">Book a Session with a Private Trainer</h1>
                        <p class="text-xs md:text-base">#Zero2Hero</p>
                    </div>
                    <div>
                        <button class="inline-flex items-center px-4 py-2 border border-white/70 rounded-md font-semibold text-sm uppercase  shadow-md "><strike>Unavailable</strike></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .polygon-1-wrapper {
        width: 100%;
        max-width: 500px;
        height: 300px;
        overflow: visible;
    }

    .polygon-1 {
        width: 100%;
        height: 300px;
        clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
        position: relative;
        z-index: 5;
    }

    .polygon-2 {
        width: 100%;
        max-width: 500px;
        height: 300px;
        z-index: 5;
        clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
    }
</style>