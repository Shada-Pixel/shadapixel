<button {{ $attributes->merge(['class' => 'px-4 py-3 text-black underline hover:no-underline hover:text-white relative font-semibold text-base after:content-[""] after:w-12 after:h-full after:border-[2px] after:bg-transparent after:border-black after:absolute hover:after:z-[-10] after:left-0 after:top-0 hover:after:w-full after:transition-all hover:after:bg-black transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
