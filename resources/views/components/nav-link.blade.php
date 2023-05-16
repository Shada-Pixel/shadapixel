@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-mont  inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-white hover:italic hover:font-light focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'font-mont  inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-white hover:italic hover:font-light hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
