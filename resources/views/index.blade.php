<x-guest-layout>

    <x-slot name="headerstyle">
        <link rel="stylesheet" href="{{ asset('css/textswitch.css') }}">
        <link rel="stylesheet" href="{{ asset('css/marquee.css') }}">
    </x-slot>

    {{-- hero section --}}
    <div class="h-screen max-h-[930px] bg-cover bg-center"
        style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-start items-center  text-white h-full">
            <div class="">
                {{-- <p class="font-dm font-normal text-sm tracking-[.3em] uppercase mb-4">Design</p> --}}
                <div class="text mb-8">
                    <p>
                        <span class="word font-dm font-normal text-sm tracking-[.3em] uppercase mb-4">Design</span>
                        <span class="word font-dm font-normal text-sm tracking-[.3em] uppercase mb-4">Development</span>
                        <span class="word font-dm font-normal text-sm tracking-[.3em] uppercase mb-4">Marketing</span>
                    </p>
                </div>
                <h1 class="font-mont font-bold text-4xl sm:text-7xl">Visionary ideas<br>
                    for the future</h1>
                <a href="{{ route('story') }}">
                    <x-primary-buttonw>read our story</x-primary-buttonw>
                </a>
            </div>
        </div>
    </div>


    {{-- services --}}
    <div class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-3 gap-12 space-y-5">
            {{-- heading --}}
            <div class="">
                <h2 class="font-mont font-bold text-2xl sm:text-5xl">Transforming<br> Ideas into Digital <span
                        class="">Success</span> </h2>
            </div>

            {{-- serviece item --}}
            <div class="showOnScroll transition-all duration-500 ease-in-out delay-0">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">MARKETING</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Digital Marketing</h3>
                <p>Our digital marketing service is designed to help businesses grow and reach their target audience
                    online. We use a combination of search engine optimization (SEO), social media marketing, email
                    marketing, and pay-per-click (PPC) advertising to create a customized strategy that meets your
                    business goals.</p>
            </div>
            {{-- serviece item --}}
            <div class="showOnScroll transition-all duration-500 ease-in-out delay-75">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">DESIGN</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Graphic Design</h3>
                <p>Our graphic design service helps businesses stand out from the crowd with stunning visual content.
                    From logos and business cards to brochures and social media graphics, we create designs that are not
                    only aesthetically pleasing but also communicate your brand message effectively.</p>
            </div>
            {{-- serviece item --}}
            <div class="showOnScroll transition-all duration-500 ease-in-out delay-100">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">DESIGN</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">UI / UX Design</h3>
                <p>Our UI/UX design service is focused on creating engaging and user-friendly interfaces that provide a
                    seamless experience for your users. We use a combination of research, design, and testing to ensure
                    that your website or application is easy to use and visually appealing, while also meeting the needs
                    of your target audience.</p>
            </div>
            {{-- serviece item --}}
            {{-- <div class="showOnScroll transition-all duration-500 ease-in-out delay-125">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">EDITING</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Video Editing</h3>
                <p>Our video editing service helps businesses create compelling video content that engages their target
                    audience. Whether it's a promotional video, a social media clip, or a training video, we use our
                    expertise in video editing to create content that tells your brand story effectively.</p>
            </div> --}}
            {{-- serviece item --}}
            <div class="showOnScroll transition-all duration-500 ease-in-out delay-150">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">WEB</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Web Design</h3>
                <p>Our web design service is focused on creating websites that not only look great but also function
                    flawlessly. We work closely with our clients to understand their unique needs and goals, and then
                    craft a custom design that reflects their brand and engages their target audience.</p>
            </div>
            {{-- serviece item --}}
            <div class="showOnScroll transition-all duration-500 ease-in-out delay-175">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">WEB</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Web Development</h3>
                <p>Our web development service covers everything from simple landing pages to complex web applications.
                    We use the latest technologies and frameworks to build fast, reliable, and scalable web solutions
                    that meet the unique needs of our clients.</p>
            </div>

        </div>
    </div>

    {{-- projects --}}
    <div class="py-12 sm:py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto pl-6 mb-12"><h2 class="font-mont font-bold text-5xl">Recent<br>Projects</h2></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  flex gap-5 relative ">
            <div class="sm:min-w-[100vw] ">
                <div class="owl-carousel blogCarousal owl-theme  sm:left-0">
                    @forelse ($industry->projects as $project)
                    {{-- item --}}
                    <div class="item">
                        <img src="{{ asset($project->cover_work) }}" alt="" srcset=""
                            class="mb-8">
                        <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">{{$industry->name}} | {{ date('M d, Y', strtotime($project->delivery_date)) }}
                        </p>
                        <h4 class="font-mont font-bold text-2xl sm:text-3xl mb-2">{{ $project->name }}</h4>
                        <a href="{{ route('projects.details', $project->slug) }}" target="_blank">
                            <x-primary-button>Read More</x-primary-button>
                        </a>
                    </div>
                    @empty
                    <div class="py-20 flex justify-center items-center sm:col-span-4">
                        <h2 class="text-center font-bold font-mont text-4xl">We are working right now <span class="text-seagreen">....</span></h2>
                    </div>
                    @endforelse

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

                <a href="{{ route('contact') }}"><x-primary-button>Contact Us</x-primary-button></a>

            </div>
        </div>

    </div>

    {{-- clients --}}
    <section>

        <div class="max-w-7xl mx-auto py-12 sm:py-24">

            <div class="grid grid-cols-4 gap-10">
                {{-- client --}}
                <div class="">
                    <img src="{{ asset('images/clients/usawa.png') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div>
                {{-- client --}}
                <div class="">
                    <img src="{{ asset('images/clients/rb.svg') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div>
                {{-- client --}}
                <div class="">
                    <img src="{{ asset('images/clients/afn.svg') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div>
                {{-- client --}}
                {{-- <div class="">
                    <img src="{{ asset('images/clients/bcnf.png') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div> --}}
                {{-- client --}}
                <div class="">
                    <img src="{{ asset('images/clients/bm.png') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div>
                {{-- client --}}
                {{-- <div class="">
                    <img src="{{ asset('images/clients/abn.png') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div> --}}
            </div>
        </div>

    </section>



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
                            class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['send'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">Send</button>
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
            <p>Discover our work of stunning digital projects that showcase our expertise and creativity.</p>
            <a href="{{ route('contact') }}">
                <x-primary-button>Get in touch</x-primary-button>
            </a>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row gap-5">
            <div class="sm:w-1/2 mb-4 sm:mb-0">
                <h2 class="font-mont font-bold text-3xl sm:text-4xl mb-4">Team</h2>
                <p>At Shada Pixel, we are proud to have a team of highly skilled and creative individuals who are
                    passionate about crafting exceptional digital experiences. Our diverse team is composed of talented
                    web designers, web developers, graphic designers, UI/UX Designers, video editors, digital marketer
                    and more.</p>
                <button
                    class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['TEAM_MEMBER'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">TEAM
                    MEMBER</button>
            </div>
            <div class="sm:w-1/2 grid grid-cols-2 gap-5">

                @foreach ($exicutives as $member)
                    {{-- member --}}
                    <div class="mb-5">
                        <img src="{{ asset($member->photo) }}" alt="{{ $member->name }}" srcset=""
                            class="mb-8">
                        <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">
                            {{ $member->designation }}</p>

                        <h3 class="font-mont font-bold text-base sm:text-lg">{{ $member->name }}</h3>
                        <div class="flex justify-start space-x-2 text-nblue text-lg sm:text-2xl mt-2">
                            @foreach ($member->soocial_medias as $sm)
                                @if ($sm['name'] != null)
                                    <a class="hover:text-seagreen" href="{{ $sm['link'] }}" target="_blank"><span
                                            class="iconify" data-icon="iconoir:{{ $sm['icon'] }}"></span></a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <x-slot name="script">
        <script src="{{ asset('js/textswitch.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    </x-slot>


</x-guest-layout>
