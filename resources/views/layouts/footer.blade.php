<footer class="bg-nblue text-white py-24">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="shrink-0 flex items-start">
            <a href="{{ route('home') }}">
                <x-application-logo class="block h-9 w-auto fill-current" />
            </a>
        </div>
        <div class="flex justify-start space-x-2 text-white text-2xl mt-16">
            <a href="https://www.facebook.com/IamIshtiuq/" target="_blank"><span class="iconify" data-icon="circum:facebook"></span></a>
            <a href="https://www.linkedin.com/in/ishtiuqahmed/" target="_blank"><span class="iconify" data-icon="circum:linkedin"></span></a>
            <a href="https://www.instagram.com/ishtiuqahmed/" target="_blank"><span class="iconify" data-icon="circum:instagram"></span></a>
            <a href="https://www.behance.net/ishtiuqahmed" target="_blank"><span class="iconify" data-icon="ph:behance-logo-bold"></span></a>
            <a href="https://dribbble.com/iamishtiuq" target="_blank"><span class="iconify" data-icon="icon-park-outline:dribble"></span></a>
        </div>
        <div class="mt-5">
            <p>© 2023. See Terms of Use for more information. Shada Pixel refers to one or more of Shada Pixel Limited, a Digital Agency in Bangladesh, its network of member firms, and their related entities. Each of its member firms are legally separate and independent entities.</p>
        </div>

        <div class="">
            @include('layouts.footer-navigation')
        </div>

    </div>
</footer>
