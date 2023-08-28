<x-guest-layout>
    {{-- hero section --}}
    <div class="h-screen max-h-[170px] sm:max-h-[445px] bg-cover bg-center pt-20"
        style="background-image: url('{{ asset('images/abouthero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center  text-white h-full">
            <div class="text-center w-full">
                <h1 class="font-mont font-regular text-4xl sm:text-7xl uppercase"><span
                        class="font-bold ml-4">Career</span> </h1>
                        {{-- No Vacancy Available --}}
            </div>
        </div>
    </div>



    {{-- Job opeining --}}
    <section class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-5">


            {{-- Single --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-5 py-5">
                <div class="">
                    <p class="mb-3">October 15, 2023</p>
                    <h2 class="font-mont font-bold text-3xl sm:text-6xl mb-10">Video Editor</h2>
                </div>
                <div class="">
                    <p>Are you a creative and skilled Video Editor?
                        Are you passionate about crafting compelling visual stories that captivate audiences? Join our dynamic digital agency and unleash your editing expertise on exciting projects ranging from social media campaigns to brand promotions.</p>
                </div>
                <div class="">
                    <div class="">
                        <p><span class="text-seagreen">Location:</span> Remote</p>
                        <p><span class="text-seagreen">Work Experience:</span> 2 Years</p>
                        <p><span class="text-seagreen">Vacancy: </span> 2</p>
                        <p><span class="text-seagreen">Last Submission Date: </span> October 15, 2023</p>
                        <p><span class="text-seagreen">Skill: </span> Adobe Premiere Pro, Adobe After Effects, DaVinci Resolve</p>
                    </div>

                    <button class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['APPLY'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">APPLY</button>
                </div>
            </div>



            {{-- Single --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-5 py-5">
                <div class="">
                    <p class="mb-3">October 15, 2023</p>
                    <h2 class="font-mont font-bold text-3xl sm:text-6xl mb-10">App Developer</h2>
                </div>
                <div class="">
                    <p>Are you a creative and skilled Video Editor?
                        Are you passionate about crafting compelling visual stories that captivate audiences? Join our dynamic digital agency and unleash your editing expertise on exciting projects ranging from social media campaigns to brand promotions.</p>
                </div>
                <div class="">
                    <div class="">
                        <p><span class="text-seagreen">Location:</span> Remote</p>
                        <p><span class="text-seagreen">Work Experience:</span> 2 Years</p>
                        <p><span class="text-seagreen">Vacancy: </span> 2</p>
                        <p><span class="text-seagreen">Last Submission Date: </span> October 15, 2023</p>
                        <p><span class="text-seagreen">Skill: </span> Adobe Premiere Pro, Adobe After Effects, DaVinci Resolve</p>
                    </div>

                    <button class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['APPLY'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">APPLY</button>
                </div>
            </div>



        </div>
    </section>
</x-guest-layout>
