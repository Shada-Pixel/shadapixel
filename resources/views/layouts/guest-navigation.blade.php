<div class="bg-transparent absolute top-0 left-0 w-full">

    {{-- Top nav --}}
    <div class="py-2 hidden justify-center items-center bg-white">
        <div class="flex justify-center items-center gap-5">
            <p>We support Palestine </p>
            <img src="{{asset('palestine.svg')}}" alt="Palestine" srcset="" class="h-3">
        </div>
    </div>



    
    <nav x-data="{ open: false }" class="bg-transparent  w-full py-4">

        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="flex justify-between h-16">
                <div class="flex justify-between w-full">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="">
                            <x-application-logo class="block w-auto fill-current" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('story')" :active="request()->routeIs('story')">
                            {{ __('Story') }}
                        </x-nav-link>
                        <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                            {{ __('Service') }}
                        </x-nav-link>
                        <!-- Work Dropdown -->
                        <div class="flex items-center cursor-pointer">
                            <x-dropdown align="right" width="60">
                                <x-slot name="trigger">
                                    <x-nav-link  :active="request()->routeIs('industries.*')">
                                        {{ __('Work') }}<span class="iconify ml-2" data-icon="mingcute:down-line"></span>
                                    </x-nav-link>
                                </x-slot>

                                <x-slot name="content">
                                    @foreach ($workcat as $item)

                                    <x-dropdown-link :href="route('industries.show', $item->slug)">
                                        {{ __($item->name) }}
                                    </x-dropdown-link>

                                    @endforeach
                                </x-slot>
                            </x-dropdown>
                        </div>
                        <x-nav-link :href="route('career')" :active="request()->routeIs('career')">
                            {{ __('Career') }}
                        </x-nav-link>

                        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                            {{ __('Contact') }}
                        </x-nav-link>

                    </div>
                </div>


                <!-- Hamburger -->
                <div class="-mr-2 flex items-center lg:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-1 text-white  hover:text-white  hover:bg-seagreen/40  focus:outline-none focus:bg-seagreen/40 focus:text-white dark:focus:text-white transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden bg-seagreen/40 backdrop-blur-sm absolute z-50 right-0">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('story')" :active="request()->routeIs('story')">
                    {{ __('Story') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')">
                    {{ __('Service') }}
                </x-responsive-nav-link>
                <!-- Work Dropdown -->
                <div class="flex items-center cursor-pointer">
                    <x-rdropdown align="right" width="200">
                        <x-slot name="trigger">
                            <x-responsive-nav-link  :active="request()->routeIs('industries.*')" class="flex w-full justify-between items-center">
                                {{ __('Work') }}<span class="iconify ml-2" data-icon="mingcute:down-line"></span>
                            </x-responsive-nav-link>
                        </x-slot>

                        <x-slot name="content">
                            @foreach ($workcat as $item)

                            <x-dropdown-link :href="route('industries.show', $item->slug)">
                                {{ __($item->name) }}
                            </x-dropdown-link>

                            @endforeach
                        </x-slot>
                    </x-rdropdown>
                </div>
                <x-responsive-nav-link :href="route('career')" :active="request()->routeIs('career')">
                    {{ __('Career') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-responsive-nav-link>
            </div>

            @auth
            <!-- Responsive Settings Options -->
            <div class=" pb-1 border-t border-seagreen/40 ">
                {{-- <div class="px-4">
                    <div class="font-medium text-base text-nblue">{{Auth::user()->name}}</div>
                    <div class="font-medium text-sm text-gray-500">{{Auth::user()->email}}</div>
                </div> --}}

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </nav>
</div>
