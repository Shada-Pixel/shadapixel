<x-admin-layout>
    {{-- Title --}}
    <x-slot name="title">Categories</x-slot>


    {{-- Header Style --}}
    <x-slot name="headerstyle">
        <!-- Gridjs Plugin css -->
        <link href="{{asset('admindash/asset/libs/gridjs/theme/mermaid.min.css')}}" rel="stylesheet" type="text/css">
    </x-slot>

    {{-- Page Content --}}
    <div class="flex flex-col gap-6">

        <div class="card">
            <div class="p-6">
                <div>
                    <div id="table-gridjs"></div>
                </div>
            </div>
        </div>


    </div>


    <x-slot name="script">
        <!-- Gridjs Plugin js -->
        <script src="{{asset('admindash/asset/libs/gridjs/gridjs.umd.js')}}"></script>

        <!-- Gridjs Demo js -->
        <script src="{{asset('admindash/asset/js/pages/table-gridjs.init.js')}}"></script>
    </x-slot>
</x-admin-layout>
