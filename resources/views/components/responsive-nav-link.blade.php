@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-seagreen text-left text-base font-medium text-nblue bg-white/80 hover:text-nblue hover:bg-white/80  hover:border-seagreen focus:outline-none  transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-nblue/80 hover:text-nblue hover:bg-white/80  hover:border-seagreen focus:outline-none focus:text-nblue focus:bg-white/80 focus:border-seagreen transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
