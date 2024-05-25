<x-guest-layout>
    {{-- hero section --}}
    <div class="h-screen max-h-[170px] sm:max-h-[445px] bg-cover bg-center pt-20"
        style="background-image: url('{{ asset('images/abouthero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-start items-center  text-white h-full">
            <div class="text-center w-full">
                <h1 class="font-mont font-regular text-4xl sm:text-7xl uppercase"><span
                        class="font-bold ml-4">Story</span> </h1>
            </div>
        </div>
    </div>


    {{-- Welcome --}}
    <div class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- heading --}}
            <div class="mb-10 text-center sm:mb-20 ">
                <h2 class="font-mont font-bold text-3xl sm:text-6xl">Welcome to Shada Pixel</h2>
            </div>

            {{-- serviece item --}}
            <div class="text-center">
                <p>Welcome to Shadapixel, a dynamic digital agency established in 2018. We are passionate about helping
                    businesses thrive in the digital realm by providing a comprehensive range of cutting-edge services.
                    From digital marketing strategies to captivating graphic designs, seamless web development,
                    user-centric UI/UX design, and captivating video editing, we are here to transform your online
                    presence into a powerful tool for success.<br><br>

                    At Shadapixel, we believe that the digital landscape offers endless opportunities for businesses to
                    connect with their target audience, engage them authentically, and drive meaningful results. Our
                    team of skilled professionals brings together a wealth of expertise and a deep understanding of the
                    ever-evolving digital landscape. We constantly stay ahead of the latest trends and emerging
                    technologies to ensure that our clients receive the most effective and innovative solutions.</p>
            </div>
        </div>
    </div>


    {{-- Exicutive note --}}
    <div class="py-12 sm:py-24 bg-nblue text-white">
        {{-- grid grid-cols-1 sm:grid-cols-4 sm:gap-5 --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-4 sm:gap-5 align-middle">
            {{-- heading --}}
            <div class="">
                <img src="{{ asset('images/ceo(1).jpg') }}" alt="" srcset="" loading="lazy"
                    class="w-full mb-5 sm:mb-0">
            </div>

            {{-- serviece item --}}
            {{-- col-span-3 --}}
            <div class="col-span-3  flex flex-col justify-end">
                <span class="iconify text-7xl text-seagreen" data-icon="fontisto:quote-left"></span>
                <h2 class="font-mont font-bold text-3xl sm:text-6xl mt-3">Amazing Digital Services</h2>

                <p class="mt-3">Our agency is driven by a deep passion for innovation and creativity. We understand
                    that the digital landscape is constantly evolving, and we thrive on pushing boundaries and exploring
                    new possibilities. Our team consists of highly skilled professionals who are not only experts in
                    their respective fields but also possess an insatiable curiosity to stay ahead of the curve. This
                    drive for innovation ensures th at we consistently deliver cutting-edge solutions to our clients.
                </p>
                <div class="mt-8">
                    <p class="font-mont text-lg font-bold text-white">MD Sabbir Hussain</p>
                    <p class="font-dm text-lg font-normal text-white">Chief Executive Officer</p>
                </div>
            </div>
        </div>
    </div>


    {{-- Team --}}
    <div class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- heading --}}
            <div class="mb-10 sm:mb-[85px] ">
                <h2 class="font-mont font-bold text-2xl sm:text-4xl">Team</h2>
            </div>

            {{-- team members --}}
            <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-5 sm:[&>*:nth-child(even)]:-mt-[120px]">
                @foreach ($exicutives as $member)

                {{-- member --}}
                <div class="mb-5">
                    <img src="{{ asset($member->photo) }}" alt="{{$member->name}}" srcset=""
                        class="mb-8">
                    <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">{{$member->designation}}</p>
                    <a href="{{route('memberProtfolio', $member->id)}}">
                        <h3 class="font-mont font-bold text-base sm:text-lg hover:text-seagreen cursor-pointer">{{$member->name}}</h3>
                    </a>

                    <div class="flex justify-start space-x-2 text-nblue text-lg sm:text-2xl mt-2">
                        @foreach ($member->soocial_medias as $sm)
                            @if ($sm['name'] != null)

                            <a class="hover:text-seagreen" href="{{$sm['link']}}"
                                target="_blank"><span class="iconify" data-icon="iconoir:{{$sm['icon']}}"></span></a>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- clients --}}
    <section>
        <div class="max-w-7xl mx-auto py-12 sm:py-24">

            <div class="grid grid-cols-3 gap-10">
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
                <div class="">
                    <img src="{{ asset('images/clients/bcnf.png') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div>
                {{-- client --}}
                <div class="">
                    <img src="{{ asset('images/clients/bm.png') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div>
                {{-- client --}}
                <div class="">
                    <img src="{{ asset('images/clients/abn.png') }}" alt="" srcset=""
                        class="h-14 w-auto">
                </div>
            </div>
        </div>

    </section>




</x-guest-layout>
