<button {{ $attributes->merge(['class' => 'mt-10 px-4 py-3 text-black underline hover:no-underline hover:text-white  font-semibold text-base relative z-20 after:content-[""] after:w-12 after:h-full after:border-[2px]  hover:after:bg-black after:border-black after:absolute after:z-[10] after:left-0 after:top-0 hover:after:w-full after:transition-all ']) }}>
    {{ $slot }}
</button>
