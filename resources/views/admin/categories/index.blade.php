<x-admin-layout>
    {{-- Title --}}
    <x-slot name="title">Categories</x-slot>

    {{-- Page Content --}}
    <div class="flex flex-col gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-6">Basic</h4>

                <div>
                    <div id="table-gridjs"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-6">Pagination</h4>

                <div>
                    <div id="table-pagination"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-6">Search</h4>

                <div>
                    <div id="table-search"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-6">Sorting</h4>

                <div>
                    <div id="table-sorting"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-6">Loading State</h4>

                <div>
                    <div id="table-loading-state"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-6">Fixed Header</h4>

                <div>
                    <div id="table-fixed-header"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-6">Hidden Columns</h4>

                <div>
                    <div id="table-hidden-column"></div>
                </div>
            </div>
        </div>

    </div>


    <x-slot name="script">
        <!-- Dashboard App js -->
        <script src="{{asset('admindash/asset/js/pages/dashboard.init.js')}}"></script>
    </x-slot>
</x-admin-layout>
