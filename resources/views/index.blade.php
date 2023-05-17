<x-guest-layout>
    {{-- hero section --}}
    <div class="h-screen max-h-[930px] bg-cover bg-center"
        style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-start items-center  text-white h-full">
            <div class="">
                <p class="font-dm font-normal text-sm tracking-[.3em] uppercase mb-4">Design</p>
                <h1 class="font-mont font-bold text-4xl sm:text-7xl">Visionary ideas<br>
                    for the future</h1>
                <x-primary-buttonw>View all projects</x-primary-buttonw>
            </div>
        </div>
    </div>


    {{-- services --}}
    <div class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-4 gap-5 space-y-5">
            {{-- heading --}}
            <div class="sm:col-span-2">
                <h2 class="font-mont font-bold text-3xl sm:text-6xl">Visionary ideas <br> for the future</h2>
            </div>

            {{-- serviece item --}}
            <div class="">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">MARKETING</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Digital Marketing</h3>
                <p>Our digital marketing service is designed to help businesses grow and reach their target audience
                    online. We use a combination of search engine optimization (SEO), social media marketing, email
                    marketing, and pay-per-click (PPC) advertising to create a customized strategy that meets your
                    business goals.</p>
            </div>
            {{-- serviece item --}}
            <div class="">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">DESIGN</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Graphic Design</h3>
                <p>Our graphic design service helps businesses stand out from the crowd with stunning visual content.
                    From logos and business cards to brochures and social media graphics, we create designs that are not
                    only aesthetically pleasing but also communicate your brand message effectively.</p>
            </div>
            {{-- serviece item --}}
            <div class="">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">DESIGN</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">UI / UX Design</h3>
                <p>Our UI/UX design service is focused on creating engaging and user-friendly interfaces that provide a
                    seamless experience for your users. We use a combination of research, design, and testing to ensure
                    that your website or application is easy to use and visually appealing, while also meeting the needs
                    of your target audience.</p>
            </div>
            {{-- serviece item --}}
            <div class="">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">EDITING</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Video Editing</h3>
                <p>Our video editing service helps businesses create compelling video content that engages their target
                    audience. Whether it's a promotional video, a social media clip, or a training video, we use our
                    expertise in video editing to create content that tells your brand story effectively.</p>
            </div>
            {{-- serviece item --}}
            <div class="">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">WEB</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Web Design</h3>
                <p>Our web design service is focused on creating websites that not only look great but also function
                    flawlessly. We work closely with our clients to understand their unique needs and goals, and then
                    craft a custom design that reflects their brand and engages their target audience.</p>
            </div>
            {{-- serviece item --}}
            <div class="">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">WEB</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Web Development</h3>
                <p>Our web development service covers everything from simple landing pages to complex web applications.
                    We use the latest technologies and frameworks to build fast, reliable, and scalable web solutions
                    that meet the unique needs of our clients.</p>
            </div>

        </div>
    </div>

    {{-- blog --}}
    <div class="py-12 sm:py-24 overflow-hidden">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  flex gap-5 relative ">
            <div class="sm:min-w-[100vw] ">
                <div class="owl-carousel blogCarousal owl-theme  sm:left-0">
                    {{-- item --}}
                    <div class="item">
                        <img src="{{ asset('images/blogs/cover (1).jpg') }}" alt="" srcset="" class="mb-8">
                        <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">DESIGN | JAN 02, 2023
                        </p>
                        <h4 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Creative Team</h4>
                        <x-primary-button>Read More</x-primary-button>

                    </div>
                    {{-- item --}}
                    <div class="item">
                        <img src="{{ asset('images/blogs/cover (2).jpg') }}" alt="" srcset="" class="mb-8">
                        <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">DESIGN | JAN 02, 2023
                        </p>
                        <h4 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Creative Team</h4>
                        <x-primary-button>Read More</x-primary-button>

                    </div>
                    {{-- item --}}
                    <div class="item">
                        <img src="{{ asset('images/blogs/cover (3).jpg') }}" alt="" srcset="" class="mb-8">
                        <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">DESIGN | JAN 02, 2023
                        </p>
                        <h4 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Creative Team</h4>
                        <x-primary-button>Read More</x-primary-button>

                    </div>
                    {{-- item --}}
                    <div class="item">
                        <img src="{{ asset('images/blogs/cover (2).jpg') }}" alt="" srcset="" class="mb-8">
                        <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">DESIGN | JAN 02, 2023
                        </p>
                        <h4 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Creative Team</h4>
                        <x-primary-button>Read More</x-primary-button>

                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- innovative idea --}}
    <div class="">
        <div class=" flex">
            <div
                class="sm:w-1/2 bg-seagreen py-16 pl-[11vw] pr-5 min-h-[400px] flex flex-col justify-center items-start">
                <h2 class="font-mont font-bold text-5xl">Innovative<br>Ideas</h2>

                <p class="mt-6">We thrive on innovative ideas. Our team of creative minds is dedicated to pushing
                    boundaries, exploring new possibilities, and delivering cutting-edge solutions that make a lasting
                    impact. From concept to execution, we embrace the power of innovation to transform businesses and
                    drive success in the digital landscape.<br><br>

                    With a deep understanding of the ever-evolving digital world, we harness the latest technologies and
                    trends to craft unique strategies tailored to each client's needs. Our innovative ideas are rooted
                    in extensive research, industry insights, and a forward-thinking approach, ensuring that we stay
                    ahead of the curve and deliver exceptional results.</p>
                <x-primary-button onclick="toggleInnoPop()">Learn more</x-primary-button>
            </div>
            <div class="sm:w-1/2 min-h-[400px] bg-cover bg-no-repeat bg-center"
                style="background-image: url('{{ asset('../images/Rectangle16.jpg') }}');">
            </div>
        </div>
    </div>

    {{-- innovation pop --}}
    <div
        class="fixed h-screen w-full bg-nblue/40 z-[9999] top-0 left-0 hidden justify-center items-start sm:items-center overflow-y-scroll innovationPop">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-10  bg-white relative">

                {{-- button --}}
                <div class="bg-nblue/40 p-1 absolute top-4 right-4" onclick="toggleInnoPop()">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            <div class="">
                <h2 class="font-mont font-bold text-5xl mb-10">Innovative Ideas</h2>


                <p>We thrive on innovative ideas. Our team of creative minds is dedicated to pushing boundaries,
                    exploring new possibilities, and delivering cutting-edge solutions that make a lasting impact. From
                    concept to execution, we embrace the power of innovation to transform businesses and drive success
                    in the digital landscape.<br><br>

                    With a deep understanding of the ever-evolving digital world, we harness the latest technologies and
                    trends to craft unique strategies tailored to each client's needs. Our innovative ideas are rooted
                    in extensive research, industry insights, and a forward-thinking approach, ensuring that we stay
                    ahead of the curve and deliver exceptional results.<br><br>


                    Whether you're looking for a captivating website design, immersive user experiences, robust mobile
                    applications, or comprehensive digital marketing campaigns, our innovative ideas will elevate your
                    brand and captivate your audience. We believe that every project presents an opportunity to break
                    barriers and bring something truly extraordinary to life.<br><br>

                    Collaboration is at the heart of our process. We work closely with our clients, listening to their
                    goals, understanding their vision, and infusing our innovative ideas to create impactful solutions
                    that exceed expectations. Our dedication to delivering excellence and our commitment to continuous
                    innovation sets us apart as a digital agency that can turn visions into reality.</p>

                <x-primary-button>Contact Us</x-primary-button>

            </div>
        </div>

    </div>

    {{-- clients --}}
    <div class="">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-24 grid grid-cols-2 sm:grid-cols-6 gap-10 sm:gap-20">


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset=""
                    class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset=""
                    class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset=""
                    class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset=""
                    class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset=""
                    class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset=""
                    class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset=""
                    class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/logoipsum.svg') }}" alt="" srcset=""
                    class="w-full">
            </div>
        </div>
    </div>

    {{-- update --}}
    <div class="bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-24 flex flex-col sm:flex-row gap-5">
            <div class="sm:w-1/3">
                <h2 class="font-mont font-bold text-4xl mb-4">Update</h2>
            </div>
            <div class="sm:grow">
                <p>Subscribe to our stories and newsletter to stay in touch
                    with the latest news and updates.</p>
                <form method="POST" action="">
                    @csrf

                    <!-- Email Address -->
                    <div class="flex items-end w-full gap-5">
                        <div class="grow">
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" placeholder="Email Address" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <button
                            class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['send'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-gray-900 overflow-hidden hover:after:top-0 after:transition-all after:duration-300">Send</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- bg-gradient-to-r from-nblue from-80% via-cream via-80% to-cream --}}
        <div class="">

            <div class="w-[90%] ml-0 mr-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-24 bg-cover bg-no-repeat"
                style="background-image: url('{{ asset('../images/Rectangle 23.jpg') }}');">
                <h2 class="font-mont font-bold text-2xl sm:text-4xl text-white mb-4 text-center">Subscribe to our
                    newsletter to stay in<br>
                    touch with the latest.</h2>
            </div>
        </div>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-24">
            <h2 class="font-mont font-bold text-3xl sm:text-4xl mb-4">Want to learn more?</h2>
            <x-primary-button>Get in touch</x-primary-button>
            <div class="flex items-center gap-10 sm:gap-20 mt-16">
                <div class="">
                    <h3 class="text-lg font-bold">Mehnaz Afsana</h3>
                    <p>Managing Director</p>
                    <p>Shada Pixel</p>
                </div>
                <div class="">
                    <h3 class="text-lg font-bold">Ishtiuq Ahmed</h3>
                    <p>Chief Executive Officer</p>
                    <p>Shada Pixel</p>
                </div>
            </div>




        </div>
    </div>

    {{-- team --}}
    <div class="py-12 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row">
            <div class="sm:w-1/2 mb-4 sm:mb-0">
                <h2 class="font-mont font-bold text-3xl sm:text-4xl mb-4">Team</h2>
                <p>No postea cetero facilisi nec, eam ne nibeh sale fabellas.<br>Eruditi invidunt duo te, iusto
                    adolescens prima.</p>
            </div>
            <div class="sm:w-1/2 grid grid-cols-2 gap-5">
                {{-- member --}}
                <div class="mb-5">
                    <img src="{{ asset('images/members/member (1).jpg') }}" alt="" srcset=""
                        class="mb-8">
                    <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">UI/UX Designer</p>

                    <h3 class="font-mont font-bold text-base sm:text-lg">Ishtiuq Ahmed Chowdhury</h3>
                    <div class="flex justify-start space-x-2 text-nblue text-lg sm:text-2xl mt-2">
                        <a href="https://www.facebook.com/IamIshtiuq/" target="_blank"><span class="iconify"
                                data-icon="circum:facebook"></span></a>
                        <a href="https://www.linkedin.com/in/ishtiuqahmed/" target="_blank"><span class="iconify"
                                data-icon="circum:linkedin"></span></a>
                        <a href="https://www.instagram.com/ishtiuqahmed/" target="_blank"><span class="iconify"
                                data-icon="circum:instagram"></span></a>
                        <a href="https://www.behance.net/ishtiuqahmed" target="_blank"><span class="iconify"
                                data-icon="ph:behance-logo-bold"></span></a>
                        <a href="https://dribbble.com/iamishtiuq" target="_blank"><span class="iconify"
                                data-icon="icon-park-outline:dribble"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
