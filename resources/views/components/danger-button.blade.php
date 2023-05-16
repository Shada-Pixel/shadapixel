<button {{ $attributes->merge(['type' => 'submit', 'class' => 'mt-10 px-4 py-3 text-red-600 hover:text-white uppercase underline hover:no-underline tracking-[.15em] font-mont font-semibold text-base relative z-20 before:content-[""] before:w-12 before:h-full before:border-[2px]  hover:before:bg-red-600 before:border-red-600 before:absolute before:z-[-10]  before:left-0 before:top-0 hover:before:w-full before:transition-all']) }}>
    {{ $slot }}
</button>
{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}
