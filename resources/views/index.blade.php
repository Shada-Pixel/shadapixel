<x-guest-layout>

    <x-slot name="headerstyle">
        <link rel="stylesheet" href="{{ asset('css/textswitch.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    </x-slot>

    <x-slot name="canonical">
        <link rel="canonical" href="https://shadapixel.com/">
    </x-slot>

    <x-slot name="headerscript">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <!-- Include Owl carousal plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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


    <section class="" data-aos="fade-up">
        <div class="max-w-7xl mx-auto py-12 sm:py-24">
            <div class="text-center max-w-2xl mx-auto">
                <h3 class="uppercase text-gray-500">Innovate</h3>
                <h1 class="text-2xl sm:text-5xl font-bold mt-2 font-mont">Transforming Ideas into Digital Experiences</h1>
                <p class="text-gray-600 mt-3 sm:text-base">At Shadapixel, we specialize in crafting stunning websites that captivate and convert. Our branding and digital marketing services ensure your business stands out in a crowded marketplace.</p>
                
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-24 mt-24 items-center">
                <div class="space-y-12">
                    {{-- Individual divs --}}
                    <div class="flex flex-col items-center aspect-video justify-center" data-aos="fade-right">
                        <svg class="w-8 h-8 text-gray-700 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v18H3V3z"></path></svg>
                        <h2 class="font-bold text-lg sm:text-2xl">Web Design Excellence</h2>
                        <p class="text-gray-600 text-center">Custom websites that reflect your brand and engage your audience effectively.</p>
                    </div>
                    <div class="flex flex-col items-center aspect-video justify-center" data-aos="fade-right">
                        <svg class="w-8 h-8 text-gray-700 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v18H3V3z"></path></svg>
                        <h2 class="font-bold text-lg sm:text-2xl">Branding That Resonates</h2>
                        <p class="text-gray-600 text-center">Creating memorable identities that connect with your target market and elevate your business.</p>
                    </div>
                </div>
                
                <div class="flex justify-center">
                    <img src="{{ asset('images/developer.png') }}" alt="" class="w-full rounded-lg">
                    
                </div>
                
                <div class="space-y-12">
                    <div class="flex flex-col items-center aspect-video justify-center" data-aos="fade-left">
                        <svg class="w-8 h-8 text-gray-700 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v18H3V3z"></path></svg>
                        <h2 class="font-bold text-lg sm:text-2xl">Digital Marketing Strategies</h2>
                        <p class="text-gray-600 text-center">Driving traffic and engagement through tailored marketing campaigns that deliver measurable results.</p>
                    </div>
                    <div class="flex flex-col items-center aspect-video justify-center" data-aos="fade-left">
                        <svg class="w-8 h-8 text-gray-700 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v18H3V3z"></path></svg>
                        <h2 class="font-bold text-lg sm:text-2xl">Get Started Today</h2>
                        <p class="text-gray-600 text-center">Let's collaborate to bring your vision to life and achieve your business goals.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 flex justify-center space-x-4" data-aos="fade-up">
                <a class="font-mont px-10 py-4 bg-seagreen text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 hover:scale-105" href="{{ route('quotation.form') }}">Get Quotation
                </a>
                <a href="#" class="font-mont px-10 py-4 bg-nblue text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 hover:scale-105">Place Order</a>
            </div>
        </div>
        
    </section>

    {{-- projects --}}
    <div class="py-12 sm:py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto pl-6 mb-12"><h2 class="font-mont font-bold text-5xl">Recent<br>Projects</h2></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  flex gap-5 relative ">
            <div class="sm:min-w-[100vw] ">
                <div class="owl-carousel blogCarousal owl-theme  sm:left-0">
                    @forelse ($industry->projects as $project)
                    {{-- item --}}
                    <div class="item">
                        <img src="{{ asset($project->cover_work) }}" alt="{{ $project->name }}" srcset=""
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
                style="background-image: url('{{ asset('images/Rectangle16.jpg') }}');">
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
    <x-clientSection/>



    {{-- testimonials --}}
    <section class="">
        <div class="max-w-7xl mx-auto py-12">
            <h2 class="text-2xl sm:text-4xl font-bold mt-2 font-mont">Client Feedback</h2>
            <p class="text-gray-600 mb-12">Shadapixel transformed our vision into reality.</p>

            <!-- Testimonial slider dev -->
            <div class="owl-carousel testimonial-carousel owl-theme px-4 sm:px-0">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="text-seagreen text-xl">★★★★★</span>
                    </div>
                    <p class="text-nblue font-bold text-lg">
                        "Working with Shadapixel was a game-changer for us. Their creativity and professionalism exceeded our expectations."
                    </p>
                    <div class="flex items-center mt-4 text-sm text-gray-600">
                        <span class="font-bold">Alice Johnson</span> - CEO, Innovate Corp
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Webflow_logo.svg" alt="Webflow" class="h-4 ml-2">
                    </div>
                </div>

            </div>
        </div>

    </section>


    
    <!-- Portfolio Section -->
    <section class="bg-white p-8 rounded-lg shadow-md max-w-4xl mx-auto mt-8">
        <h2 class="text-2xl font-bold text-gray-900">Explore Our Stunning Portfolio</h2>
        <p class="text-gray-600 mt-2">
            Discover the creativity and innovation behind our projects. Let us help bring your vision to life.
        </p>
        
        <div class="mt-4">
            <a href="#" class="bg-black text-white px-4 py-2 rounded-md text-sm font-medium">View</a>
            <a href="#" class="border border-gray-600 text-gray-900 px-4 py-2 rounded-md text-sm font-medium ml-2">Contact</a>
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
                style="background-image: url('{{ asset('images/Rectangle 23.jpg') }}');">
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
                    <h3 class="text-lg font-bold">Sabbir Hussain</h3>
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

                <a href="{{route('story').'/#team'}}">

                    <button
                        class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['TEAM_MEMBER'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">TEAM
                        MEMBER</button>
                </a>
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
                        {{-- <div class="flex justify-start space-x-2 text-nblue text-lg sm:text-2xl mt-2">
                            @foreach ($member->soocial_medias as $sm)
                                @if ($sm['name'] != null)
                                    <a class="hover:text-seagreen" href="{{ $sm['link'] }}" target="_blank"><span
                                            class="iconify" data-icon="iconoir:{{ $sm['icon'] }}"></span></a>
                                @endif
                            @endforeach
                        </div> --}}
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <x-slot name="script">
        <script src="{{ asset('js/textswitch.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
        <script>
            AOS.init();
            $(document).ready(function(){
                $(".testimonial-carousel").owlCarousel({
                    items: 2,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 1000,
                    autoplayHoverPause: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:true
                        },
                        680:{
                            items:2,
                            nav:false
                        }
                    }
                });
            });
        </script>
    </x-slot>


</x-guest-layout>
