@php
$classes = 'font-mont font-bold inline-flex items-center mt-5 sm:mt-0  py-1 mr-5 sm:mr-0 text-sm leading-5 text-white relative z-20  after:w-full after:h-[2px] after:bg-seagreen after:border-black after:absolute hover:after:z-[-10] after:left-0 after:bottom-0 hover:after:h-full after:transition-all';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
