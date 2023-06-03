{{-- <button {{ $attributes->merge(['class' => 'mt-10 px-4 py-3 text-nblue hover:text-white uppercase underline hover:no-underline tracking-[.15em] font-mont font-semibold text-base relative z-20 before:content-[""] before:w-12 before:h-full before:border-[2px]  hover:before:bg-nblue before:border-nblue before:absolute before:z-[-10]  before:left-0 before:top-0 hover:before:w-full before:transition-all']) }}>
    {{ $slot }}
</button> --}}

{{--
<button {{ $attributes->merge(['class' => 'mt-10 px-9 py-1 text-nblue hover:text-white uppercase underline hover:no-underline tracking-[.15em] font-mont font-semibold text-base relative z-20 before:content-[">"] hover:before:content-[""]  before:flex before:justify-center before:items-center before:text-white before:w-8 before:h-full before:border-[2px]   before:bg-nblue hover:before:bg-nblue before:border-nblue before:absolute before:z-[-10]  before:left-0 before:top-0 hover:before:w-full before:transition-all']) }}>
    {{ $slot }}
</button> --}}


<button {{ $attributes->merge(['class' => 'mt-10  px-[11px] py-2 text-nblue flex items-center hover:text-white uppercase hover:no-underline tracking-[.15em] font-mont font-semibold text-base relative z-20 before:content-[""] before:flex before:justify-center before:items-center before:text-white before:w-9 before:h-full before:border-[2px] before:bg-nblue hover:before:bg-nblue before:border-nblue before:absolute before:z-[-10]  before:left-0 before:top-0 hover:before:w-full before:transition-all before:duration-500 pbton']) }}>
    <span class="iconify mr-4 text-white duration-500 pbcon" data-icon="uil:angle-right"></span>
    {{-- <span class="iconify" data-icon="uil:arrow-right"></span> --}}
    {{ $slot }}
</button>
