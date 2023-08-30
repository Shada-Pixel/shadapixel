<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Default Theme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- iconify --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js"
        integrity="sha512-lYMiwcB608+RcqJmP93CMe7b4i9G9QK1RbixsNu4PzMRJMsqr/bUrkXUuFzCNsRUo3IXNUr5hz98lINURv5CNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script>
        let BASE_URL = {!! json_encode(url('/')) !!} + "/";
    </script>

</head>

<body class="font-space text-nblue antialiased relative ">

    {{-- Image pop --}}
    @if (isset($imagepop))
    {{ $imagepop }}
    @endif

    {{-- Preeloder --}}
    <div class="w-screen h-screen bg-white fixed z-[11112] flex justify-center items-center" id="preeloader">

        <div class="w-80">
            <svg id="ecONfIwDeMG1" class="relative" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 638.51 170.58"
                shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                <path id="ecONfIwDeMG2" d="M372.89,0h170.58v170.58h-170.58Z" fill="#12b7a4" id="square"
                    class="absolute left-0" />
                <path
                    d="M46.47,102.11c0,10.33-9.07,17.88-22.54,17.88-12.59,0-20.9-5.92-23.93-13.98l5.42-3.15c2.27,6.8,9.07,11.08,18.51,11.08c8.81,0,16.25-3.9,16.25-11.84c0-17.13-38.16-7.31-38.16-29.97c0-9.95,8.56-17.88,21.41-17.88c10.2,0,18.01,4.91,21.41,12.59l-5.29,3.02c-2.64-6.55-9.19-9.57-16.12-9.57-8.19,0-15.11,4.28-15.11,11.84c0,16.87,38.16,6.92,38.16,29.97Zm67.88-22.67v39.17h-6.42v-39.17c0-11.59-6.67-19.14-18.51-19.14s-22.04,8.06-22.04,25.06v33.25h-6.3v-88.16h6.3v37.15c4.79-9.32,12.85-13.35,22.54-13.35c14.98,0,24.43,9.95,24.43,25.18Zm79.6-23.8v62.97h-6.42v-14.23c-5.29,9.45-14.99,15.62-27.08,15.62-17.88,0-32.62-14.23-32.62-32.87s14.73-32.87,32.62-32.87c12.09,0,21.79,6.17,27.08,15.62v-14.23h6.42Zm-6.42,31.48c0-14.98-11.59-26.82-26.57-26.82s-26.7,11.84-26.7,26.82s11.71,26.82,26.7,26.82s26.57-11.84,26.57-26.82Zm87.65-56.67v88.16h-6.3v-14.61c-5.16,9.7-14.86,15.99-27.07,15.99-18.01,0-32.62-14.23-32.62-32.87s14.61-32.87,32.62-32.87c12.22,0,21.91,6.3,27.07,15.99v-39.79h6.3Zm-6.3,56.67c0-14.98-11.71-26.82-26.7-26.82s-26.7,11.84-26.7,26.82s11.71,26.82,26.7,26.82s26.7-11.84,26.7-26.82Zm87.53-31.48v62.97h-6.42v-14.23C344.7,113.83,335,120,322.91,120c-17.88,0-32.62-14.23-32.62-32.87s14.73-32.87,32.62-32.87c12.09,0,21.79,6.17,27.08,15.62v-14.23h6.42Zm-6.42,31.48c0-14.98-11.59-26.82-26.57-26.82s-26.7,11.84-26.7,26.82s11.71,26.82,26.7,26.82s26.57-11.84,26.57-26.82Zm228.58,16.37c5.17,0,9.57-2.02,12.09-4.79l15.11,8.69c-6.17,8.56-15.49,12.97-27.45,12.97-21.54,0-34.88-14.48-34.88-33.25s13.6-33.24,33.5-33.24c18.39,0,31.99,14.23,31.99,33.24c0,2.64-.25,5.17-.75,7.56h-44.71c2.39,6.55,8.19,8.82,15.11,8.82Zm11.59-22.92c-2.01-7.31-7.68-9.95-13.35-9.95-7.18,0-11.96,3.53-13.73,9.95h27.07Zm29.47-53.9h18.89v91.94h-18.89v-91.94Z"
                    fill="#0f1827" />
                <path
                    d="M440.64,87.18c0,18.76-13.6,33.25-30.1,33.25-8.44,0-14.61-2.89-18.76-7.68v31.11h-18.89v-88.16h18.89v5.92c4.16-4.78,10.33-7.68,18.76-7.68c16.5,0,30.1,14.48,30.1,33.24Zm-18.89,0c0-9.45-6.3-15.36-14.98-15.36s-14.99,5.92-14.99,15.36s6.3,15.37,14.99,15.37s14.98-5.92,14.98-15.37Zm100.09,31.48l-11.71-16.62-11.71,16.62h-21.66L499.3,86.67L477.51,55.69h21.66l10.95,15.62l10.96-15.62h21.66L520.95,86.67l22.54,31.99h-21.66ZM449.01,54.51h18.89v62.97h-18.89Z"
                    fill="#0f1827" />
                <path d="M449,28.28h18.86v18.86h-18.86Z" fill="#0f1827" />

            </svg>

        </div>
    </div>
    {{-- scroll Progress --}}
    <progress class="w-full h-1 fixed bottom-0 z-[1111] p-0 bg-transparent text-seagreen transition-all duration-75 ease-in-out"
        aria-hidden="true" max="100" value="0" id="scrollprogress"></progress>
    {{-- Mouse Follower --}}
    {{-- <div id="box"
        class="hidden sm:block absolute w-10 h-10 top-1/2 left-1/2 rounded-full bg-seagreen/20 transition duration-1000 ease-in-out">
    </div> --}}

    {{-- back to top --}}
    <button id="backtotop" class="fixed right-5 bottom-5 z-[11111] w-10 bg-seagreen h-10 hidden justify-center items-center text-white text-2xl hover:scale-110 hover:shadow-lg hover:shadow-seagreen/50 transition duration-200 ease-in-out ">
        <span class="iconify" data-icon="icon-park-outline:double-up"> </span>
    </button>



    <div class="min-h-screen">
        @include('layouts.guest-navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

    </div>
    @include('layouts.footer')



    <!-- You can use latest version of jQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Include js plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // Preeloader
        $(window).on('load', function() {
            $('#preeloader').addClass('hidden');
        });
        // Scroll Progress
        $(window).on('scroll', function() {
            let percent = Math.round(($(this).scrollTop() / ($(document).height() - $(window).height())) * 100);
            $('#scrollprogress').val(percent);
        });
        // Mouse Follower
        $(window).on('mousemove', function(e) {
            $('#box').css({
                left: e.pageX - 20,
                top: e.pageY - 20
            });
        });


        var btn = $('#backtotop');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 1000) {
                btn.removeClass('hidden').addClass('flex');
            } else {
                btn.removeClass('flex').addClass('hidden');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>

    @if (isset($script))
        {{ $script }}
    @endif

</body>

</html>
