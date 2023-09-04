<x-admin-layout>
    {{-- Title --}}
    <x-slot name="title">Add Project Member</x-slot>


    {{-- Header Style --}}
    <x-slot name="headerstyle">
        <link href="{{ asset('admindash/asset/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    </x-slot>

    {{-- Page Content --}}
    <div class="flex flex-col gap-6">

        <div class="card">
            <div class="p-6">

                <form action="{{ route('projectmembers.store') }}" method="post">
                    <div class="grid lg:grid-cols-2 gap-5">
                        @csrf
                        @method('post')

                        <div>
                            <label for="project_id" class="block mb-2">Project</label>
                            <select class="form-select" id="project_id" name="project_id" required>
                                <option selected="" disabled value="">Choose...</option>
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}" class="iconify" data-icon='facebook'>
                                        {{ $project->name }}</option>
                                @endforeach
                            </select>
                        </div> <!-- end -->

                        <div>
                            <label for="member_id" class="block mb-2">Member</label>
                            <select class="form-select" id="member_id" required data-toggle="select2"
                                name="member_id[]" multiple="multiple">
                                @foreach ($members as $member)
                                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                                @endforeach
                            </select>
                        </div> <!-- end -->






                        <div class="lg:col-span-2 mt-3">
                            <button type="submit"
                                class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['SAVE'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">Save</button>
                        </div> <!-- end button -->


                    </div>
                </form>

            </div>
        </div> <!-- end card -->



    </div>


    <x-slot name="script">
        <script src="{{ asset('admindash/asset/libs/select2/js/select2.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $("form #name").on('blur', () => {
                    const slug = slugify($("form #name").val());
                    $("form #slug").val(slug);
                });

                $("#project_id").select2({
                    placeholder: "Select members on this project",
                    allowClear: true
                });
            });
        </script>
    </x-slot>
</x-admin-layout>
