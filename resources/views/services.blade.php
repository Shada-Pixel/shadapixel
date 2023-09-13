<x-guest-layout>
    {{-- hero section --}}
    <div class="h-screen max-h-[170px] sm:max-h-[445px] bg-cover bg-center pt-20"
        style="background-image: url('{{ asset('images/abouthero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-start items-center  text-white h-full">
            <div class="text-center w-full">
                <h1 class="font-mont font-regular text-4xl sm:text-7xl uppercase"><span
                        class="font-bold ml-4">Services</span> </h1>
            </div>
        </div>
    </div>

    {{-- services --}}
    <div class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-4 gap-8">


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
            <div class="showOnScroll transition-all duration-500 ease-in-out delay-125">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">EDITING</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">Video Editing</h3>
                <p>Our video editing service helps businesses create compelling video content that engages their target
                    audience. Whether it's a promotional video, a social media clip, or a training video, we use our
                    expertise in video editing to create content that tells your brand story effectively.</p>
            </div>
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


            {{-- serviece item --}}
            <div class="showOnScroll transition-all duration-500 ease-in-out delay-175">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">APP</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">App Development</h3>
                <p>Elevate your brand with our cutting-edge App Development services. Whether you're looking to build a native Android or iOS app or need a cross-platform solution, our team of experts will transform your ideas into user-friendly, feature-rich applications. From concept to launch, we ensure your app not only meets industry standards but also delights users with exceptional design and functionality.
                </p>
            </div>

            {{-- serviece item --}}
            <div class="showOnScroll transition-all duration-500 ease-in-out delay-175">
                <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">MARKETING</p>
                <h3 class="font-mont font-bold text-2xl sm:text-3xl mb-2">SMM & SEO</h3>
                <p>Boost your online presence and drive real results with our Social Media Marketing (SMM) and Search Engine Optimization (SEO) services. We craft tailored strategies to enhance your brand's visibility, engage your target audience, and improve your search engine rankings. With data-driven insights and a focus on ROI, we'll help you maximize your digital marketing efforts.</p>
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
                <img src="{{ asset('images/clients/Logo.svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(1).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(2).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(3).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(5).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(5).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(6).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(7).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(8).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(9).svg') }}" alt="" srcset="" class="w-full">
            </div>


            {{-- client --}}
            <div class="">
                <img src="{{ asset('images/clients/Logo(2).svg') }}" alt="" srcset="" class="w-full">
            </div>
        </div>
    </div>



</x-guest-layout>
