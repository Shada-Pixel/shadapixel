{{-- <button {{ $attributes->merge(['class' => 'mt-10 px-4 py-3 text-white hover:text-nblue uppercase underline hover:no-underline tracking-[.15em] font-mont font-semibold text-base relative z-20 before:content-[""] before:w-12 before:h-full before:border-[2px]  hover:before:bg-white before:border-white before:absolute before:z-[-10]  before:left-0 before:top-0 hover:before:w-full before:transition-all']) }}>
    {{ $slot }}
</button> --}}



<button {{ $attributes->merge(['class' => 'mt-10  px-[11px] py-2 text-white flex items-center hover:text-nblue uppercase tracking-[.15em] font-mont font-semibold text-base relative z-20 before:content-[""] before:flex before:justify-center before:items-center before:text-nblue before:w-9 before:h-full before:border-[2px]  before:bg-white hover:before:bg-white before:border-white before:absolute before:z-[-10]  before:left-0 before:top-0 hover:before:w-full before:transition-all before:duration-500 pbton']) }}>
    <span class="iconify mr-4 text-nblue duration-500 pbcon" data-icon="uil:angle-right"></span>
    {{ $slot }}
</button>
