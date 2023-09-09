<x-error-layout>
    {{-- hero section --}}
    <div class="h-screen max-h-[930px] bg-cover bg-center"
        style="background-image: url('{{ asset('images/error403.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-start items-center  text-white h-full">
            <div class="">
                <p class="font-dm font-normal text-sm tracking-[.3em] uppercase mb-4">Error!</p>
                <h1 class="font-mont font-bold text-4xl sm:text-7xl"><span class="text-seagreen">403</span> <br>
                    @auth
                    Access Denied
                    @endauth @guest
                    Please Login First
                    @endguest</h1>
                <a href="{{route('home')}}">
                    <x-primary-buttonw>Back to home</x-primary-buttonw>
                </a>
            </div>
        </div>
    </div>


</x-error-layout>
