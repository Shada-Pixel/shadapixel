<x-guest-layout>


    {{-- Header coverup --}}
    <div class="h-[140px] bg-nblue"></div>


    <div class="max-w-7xl mx-auto p-6 sm:px-6 lg:px-8 flex justify-between items-start  text-nblue h-full">
        <div class="">
            <img src="{{ asset($member->photo) }}" alt="{{ $member->name }}" srcset="" class="mb-8 max-w-lg">
            <div class="flex justify-start space-x-2 text-nblue text-lg sm:text-2xl mt-2">
                @foreach ($member->soocial_medias as $sm)
                    @if ($sm['name'] != null)

                    <a class="hover:text-seagreen" href="{{$sm['link']}}"
                        target="_blank"><span class="iconify" data-icon="iconoir:{{$sm['icon']}}"></span></a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="">
            <div class="text-center w-full">
                <h1 class="font-mont font-bold text-4xl sm:text-5xl uppercase">{!! $member->name !!}</h1>
            </div>
            <p class="font-dm font-normal text-xs sm:text-sm tracking-[.3em] uppercase mb-2">{{ $member->designation }}</p>

            {{-- Skills --}}
            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-4">Skills</h2>
                @forelse ($member->skills as $skill)
                    @if ($skill['name'] != NULL)

                    <div class="flex flex-flow py-2 px-4 border mb-2 items-center gap-5">
                        <p class="uppercase basis-1/6">{{$skill['name']}}</p>
                        <div class="flex w-full h-3 bg-gray-200  overflow-hidden dark:bg-gray-700">
                            <div class="flex flex-col justify-center overflow-hidden bg-seagreen" role="progressbar" style="width: {{$skill['exp']}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    @endif

                @empty
                    <p>OPS!</p>
                @endforelse
            </div>
        </div>
    </div>


    {{-- Projects --}}
    <section class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-4 gap-5">

            @forelse ($member->projects as $project)
                {{-- individual Project --}}
                <div class=" ">

                    <div class="w-full aspect-square bg-no-repeat bg-center bg-cover group"
                        style="background-image: url({{ asset($project->cover_work) }})"
                        onclick="imagepop('{{ asset('images/poptest.jpg') }}')">

                        {{-- Buttons --}}
                        <div
                            class="p-1 opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 flex bg-white/40 backdrop-blur-sm h-full  flex-col justify-center items-center gap-5 transition-all duration-300 ease-in-out">
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
                    <h2 class="text-center font-bold font-mont text-4xl">We are working right now <span
                            class="text-seagreen">....</span></h2>
                </div>
            @endforelse



        </div>
    </section>


    <x-slot name="script">
        <script></script>
    </x-slot>
</x-guest-layout>
