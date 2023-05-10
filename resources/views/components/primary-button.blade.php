<button {{ $attributes->merge(['class' => 'mt-10 px-4 py-3 text-nblue hover:text-white uppercase underline hover:no-underline tracking-[.15em] font-mont font-semibold text-base relative z-20 before:content-[""] before:w-12 before:h-full before:border-[2px]  hover:before:bg-nblue before:border-nblue before:absolute before:z-[-10]  before:left-0 before:top-0 hover:before:w-full before:transition-all']) }}>
    {{ $slot }}
</button>
