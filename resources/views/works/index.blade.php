<x-guest-layout>

    <x-slot name="imagepop">
        <section class="px-4 h-screen fixed top-0 left-0 right-0 z-[1111] bg-seagreen/40 backdrop-blur-sm hidden justify-center items-center py-4" id="imagepopsec">
            <div class="max-w-2xl mx-auto  bg-white  p-4 max-h-screen overflow-y-scroll">
                <div class="flex justify-end mb-4 " onclick="hidepopimage()">
                    <button class="font-mont px-4 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['X'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">X</button>
                </div>
                <img src="{{ asset('images/abouthero.jpg') }}" alt="" srcset="" id="shownimg" class="w-full ">
            </div>
        </section>
    </x-slot>



    {{-- hero section --}}
    <div class="h-screen max-h-[170px] sm:max-h-[445px] bg-cover bg-center pt-20"
        style="background-image: url('{{ asset('images/abouthero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center  text-white h-full">
            <div class="text-center w-full">
                <h1 class="font-mont font-regular text-4xl sm:text-7xl uppercase"><span
                        class="font-bold ml-4">{!!$category->name!!}</span> </h1>
                        {{-- No Vacancy Available --}}
            </div>
        </div>
    </div>



    {{-- Projects --}}
    <section class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-4 gap-5">

            {{-- individual Project --}}
            <div class=" ">
                <div class="">
                    <p class="mb-1">October 15, 2023</p>
                    <h2 class="font-mont font-bold text-3xl sm:text-3xl mb-4">Smart Intro</h2>
                </div>
                <div class="w-full aspect-square bg-no-repeat bg-center bg-cover hover:scale-105 transition-all duration-150 ease-in-out relative" style="background-image: url({{asset('images/poptest.jpg')}})" onclick="imagepop('{{asset('images/poptest.jpg')}}')">
                    <div class="flex gap-2 absolute bottom-0 right-0">
                        {{-- Technology used --}}
                        <div class="bg-white/40 backdrop-blur-sm w-10 aspect-square flex justify-center items-center p-2"><span class="iconify text-2xl" data-icon="devicon:laravel"></span></div>
                        <div class="bg-white/40 backdrop-blur-sm w-10 aspect-square flex justify-center items-center p-2"><span class="iconify text-2xl" data-icon="devicon:figma"></span></div>
                    </div>
                </div>
                <a href="https://www.figma.com/proto/UPg1klTgAMtsriQl52q65S/Smart-Intro?type=design&t=RtNsOciSN3sW1rty-1&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=2%3A30&node-id=2-30&mode=design" target="_blank">

                    <button class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['LIVE_PREVIEW'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">LIVE PREVIEW</button>
                </a>
            </div>
            {{-- individual Project --}}
            <div class=" ">
                <div class="">
                    <p class="mb-1">October 15, 2023</p>
                    <h2 class="font-mont font-bold text-3xl sm:text-3xl mb-4">Smart Intro</h2>
                </div>
                <div class="w-full aspect-square bg-no-repeat bg-center bg-cover hover:scale-105 transition-all duration-150 ease-in-out" style="background-image: url({{asset('images/poptest.jpg')}})" onclick="imagepop('{{asset('images/poptest.jpg')}}')">

                </div>
                <a href="https://www.figma.com/proto/UPg1klTgAMtsriQl52q65S/Smart-Intro?type=design&t=RtNsOciSN3sW1rty-1&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=2%3A30&node-id=2-30&mode=design" target="_blank">

                    <button class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['LIVE_PREVIEW'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">LIVE PREVIEW</button>
                </a>
            </div>
            {{-- individual Project --}}
            <div class=" ">
                <div class="">
                    <p class="mb-1">October 15, 2023</p>
                    <h2 class="font-mont font-bold text-3xl sm:text-3xl mb-4">Smart Intro</h2>
                </div>
                <div class="w-full aspect-square bg-no-repeat bg-center bg-cover hover:scale-105 transition-all duration-150 ease-in-out" style="background-image: url({{asset('images/poptest.jpg')}})" onclick="imagepop('{{asset('images/poptest.jpg')}}')">

                </div>
                <a href="https://www.figma.com/proto/UPg1klTgAMtsriQl52q65S/Smart-Intro?type=design&t=RtNsOciSN3sW1rty-1&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=2%3A30&node-id=2-30&mode=design" target="_blank">

                    <button class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['LIVE_PREVIEW'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">LIVE PREVIEW</button>
                </a>
            </div>
            {{-- individual Project --}}
            <div class=" ">
                <div class="">
                    <p class="mb-1">October 15, 2023</p>
                    <h2 class="font-mont font-bold text-3xl sm:text-3xl mb-4">Smart Intro</h2>
                </div>
                <div class="w-full aspect-square bg-no-repeat bg-center bg-cover hover:scale-105 transition-all duration-150 ease-in-out" style="background-image: url({{asset('images/poptest.jpg')}})" onclick="imagepop('{{asset('images/poptest.jpg')}}')">

                </div>
                <a href="https://www.figma.com/proto/UPg1klTgAMtsriQl52q65S/Smart-Intro?type=design&t=RtNsOciSN3sW1rty-1&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=2%3A30&node-id=2-30&mode=design" target="_blank">

                    <button class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['LIVE_PREVIEW'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">LIVE PREVIEW</button>
                </a>
            </div>
            {{-- individual Project --}}
            <div class=" ">
                <div class="">
                    <p class="mb-1">October 15, 2023</p>
                    <h2 class="font-mont font-bold text-3xl sm:text-3xl mb-4">Smart Intro</h2>
                </div>
                <div class="w-full aspect-square bg-no-repeat bg-center bg-cover hover:scale-105 transition-all duration-150 ease-in-out" style="background-image: url({{asset('images/poptest.jpg')}})" onclick="imagepop('{{asset('images/poptest.jpg')}}')">

                </div>
                <a href="https://www.figma.com/proto/UPg1klTgAMtsriQl52q65S/Smart-Intro?type=design&t=RtNsOciSN3sW1rty-1&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=2%3A30&node-id=2-30&mode=design" target="_blank">

                    <button class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['LIVE_PREVIEW'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">LIVE PREVIEW</button>
                </a>
            </div>


        </div>
    </section>


    <x-slot name="script">
        <script>
            function imagepop(url) {
                $('#imagepopsec').toggleClass('hidden').toggleClass('flex');
                $('#shownimg').attr('src', url);
            }
            function hidepopimage(param) {
                $('#imagepopsec').toggleClass('hidden').toggleClass('flex');
                $('#shownimg').attr('src', '');
            }
        </script>
    </x-slot>
</x-guest-layout>
