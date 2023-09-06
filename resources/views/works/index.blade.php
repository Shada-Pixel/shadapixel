<x-guest-layout>

    {{-- hero section --}}
    <div class="h-screen max-h-[170px] sm:max-h-[445px] bg-cover bg-center pt-20"
        style="background-image: url('{{ asset('images/abouthero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center  text-white h-full">
            <div class="text-center w-full">
                <h1 class="font-mont font-regular text-4xl sm:text-7xl uppercase"><span
                        class="font-bold ml-4">{!! $industry->name !!}</span> </h1>
                {{-- No Vacancy Available --}}
            </div>
        </div>
    </div>



    {{-- Projects --}}
    <section class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-4 gap-5">

            @forelse ($industry->projects as $project)

                {{-- individual Project --}}
                <div class=" ">

                    <div class="w-full aspect-square bg-no-repeat bg-center bg-cover group"
                        style="background-image: url({{ asset($project->cover_work) }})"
                        onclick="imagepop('{{ asset('images/poptest.jpg') }}')">

                        {{-- Buttons --}}
                        <div class="p-1 opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 flex bg-white/40 backdrop-blur-sm h-full  flex-col justify-center items-center gap-5 transition-all duration-300 ease-in-out">
                            {{-- {{$project->link}} --}}
                            <a href="{{ route('projects.details', $project->slug) }}" target="_blank">
                                <button
                                    class="font-mont px-4 py-2 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['DETAILS'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">details</button>
                            </a>

                            @if ($project->link)
                                <a href="{{ $project->link }}" target="_blank">
                                    <button
                                        class="font-mont px-4 py-2 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['LIVE_PREVIEW'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">LIVE
                                        PREVIEW</button>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="mb-1">{{ date('M d, Y', strtotime($project->delivery_date)) }}</p>

                        <h2 class="font-mont font-bold text-xl sm:text-2xl mb-4 capitalize">{{ $project->name }}</h2>
                    </div>
                </div>
            @empty
                <div class="py-20 flex justify-center items-center sm:col-span-4">
                    <h2 class="text-center font-bold font-mont text-4xl">We are working right now <span class="text-seagreen">....</span></h2>
                </div>
            @endforelse



        </div>
    </section>


    <x-slot name="script">
        <script></script>
    </x-slot>
</x-guest-layout>
