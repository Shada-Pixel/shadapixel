<x-guest-layout>

    <x-navbg />

    {{-- Projects --}}
    <section class="py-12 sm:py-24 bg-cream">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="mb-1">{{ date('M d, Y', strtotime($project->delivery_date)) }}</p>
            <h1 class="font-mont font-bold text-3xl sm:text-5xl mb-4 capitalize">{{ $project->name }}</h1>
        </div>


        <div class="max-w-7xl mx-auto px-4 mt-10 sm:mt-18 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-4 gap-5">

            <div class="sm:col-span-3">
                <img src="{{ asset($project->cover_details) }}" alt="" srcset="" class="w-full">
            </div>
            <div class="">
                <p class="mb-4"><span class="text-seagreen">Project Title:</span> <a href="tel:+8801928292567">
                        {{ $project->name }}</a></p>
                @if ($project->client)
                    <p class="mb-4"><span class="text-seagreen">Client:</span> {{ $project->client }}</p>
                @endif
                <p class="mb-4"><span class="text-seagreen">Star Date:</span>
                    {{ date('M d, Y', strtotime($project->start_date)) }}</p>
                <p class="mb-4"><span class="text-seagreen">End Date:</span>
                    {{ date('M d, Y', strtotime($project->delivery_date)) }}</p>
                <p class="mb-4"><span class="text-seagreen">Category:</span> {{ $project->category->name }}</p>
                <p class="mb-10"><span class="text-seagreen">Overview:</span> {!! $project->description !!}</p>

                @if ($project->members)
                <div class="mb-10">
                    <p class="mb-4 text-seagreen">Team: </p>
                    <div class="flex gap-2">
                        @forelse ($project->members as $member)
                        {{-- Each Member --}}
                        <div class="eachColaborator p-1 w-12 h-12 rounded-full group bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset($member->photo) }})" data-member="{{$member->name}}"> </div>
                        @empty
                        <div class=""></div>
                        @endforelse
                    </div>
                </div>
                @endif

                <div class="mb-10">

                    <p class="mb-4 text-seagreen">Technology: </p>
                    <div class="flex gap-5">
                        @foreach (explode(',', $project->tools) as $tool)
                            <span class="iconify text-2xl" data-icon="devicon:{{ $tool }}"></span>
                        @endforeach
                    </div>
                </div>
                @if ($project->link)
                    <a href="{{ $project->link }}" target="_blank">
                        <button
                            class="font-mont px-4 py-2 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['LIVE_PREVIEW'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">LIVE
                            PREVIEW</button>
                    </a>
                @endif
            </div>
        </div>


    </section>


    <x-slot name="script">
        <script>
            $(document).ready(function() {

                // Cache the elements for better performance
                var $colaborators = $('.eachColaborator');
                var $tooltips = $('#mousetooltips');

                $colaborators.on('mousemove', function(e) {
                    var data = $(this).data('member');
                    var x = e.pageX + 10;
                    var y = e.pageY + 10;

                    // Update tooltip text and position
                    $tooltips.text(data).css({ top: y + 'px', left: x + 'px' }).show();
                });

                $colaborators.mouseleave(function () {
                    // Clear tooltip text and hide it
                    $tooltips.text('').hide();
                });


            });
        </script>
    </x-slot>
</x-guest-layout>
