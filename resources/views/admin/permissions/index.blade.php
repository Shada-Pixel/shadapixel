<x-admin-layout>
    {{-- Title --}}
    <x-slot name="title">Permissions</x-slot>


    {{-- Header Style --}}
    <x-slot name="headerstyle">
        {{-- Datatable css --}}
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    </x-slot>

    {{-- Page Content --}}
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="p-6">
                <h2 class="mb-4 text-xl">New Permission</h2>
                <form  id="permissionCreateForm">
                    <div class="grid lg:grid-cols-2 gap-5">

                        <div>
                            <label for="name" class="block mb-2">Permission Name</label>
                            <input type="text" class="form-input" id="name" name="name"  placeholder="model-permission">
                        </div> <!-- end -->

                        <div>
                            <label for="guard" class="block mb-2">Guard Name</label>
                            <select class="form-select" id="guard" name="guard">
                                <option value="web" selected>web</option>
                                <option value="api" disabled>api</option>
                            </select>
                        </div> <!-- end -->

                        <div class="lg:col-span-2 ">
                            <button class="font-mont mt-2 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['SURE!'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300" id="permissionSaveBtn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <table id="permissionsTable" class="display stripe text-xs sm:text-base" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Gurd</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>


    </div>


    <x-slot name="script">
        <!-- Datatable script-->
        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>
            var datatablelist = $('#permissionsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('permissions.index') !!}",
                columns: [{
                        "render": function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'guard_name',
                        name: 'guard_name'
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `<div class="flex flex-col sm:flex-row gap-5 justify-end items-center">
                                <a href="${BASE_URL}permissions/${data.id}" class="text-seagreen/70 hover:text-seagreen  hover:scale-105 transition duration-150 ease-in-out text-xl" >
                                    <span class="menu-icon"><i class="mdi mdi-eye"></i></span>
                                </a>
                                <a href="${BASE_URL}permissions/${data.id}/edit" class="text-seagreen/70 hover:text-seagreen  hover:scale-105 transition duration-150 ease-in-out text-xl" >
                                    <span class="menu-icon"><i class="mdi mdi-table-edit"></i></span>
                                </a>
                                <button type="button"  class="text-red-500/70 hover:text-red  hover:scale-105 transition duration-150 ease-in-out text-xl" onclick="projectDelete(${data.id});">
                                    <span class="menu-icon"><i class="mdi mdi-delete"></i></span>
                                    </button>
                                </div>`;
                        }
                    }
                ]
            });


            function projectDelete(slug) {


                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to delete this Project ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                    background: 'rgba(255, 255, 255, 0.6)',
                    padding: '20px',
                    confirmButtonColor: '#0db8a6',
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'projects/' + slug,
                            success: function(response) {
                                if (response.status == "success") {
                                    Swal.fire('Success!', response.message, 'success');
                                    datatablelist.draw();
                                } else if (response.status == "error") {
                                    Swal.fire('Not deletable!', response.message, 'error');
                                    datatablelist.draw();
                                }
                            }
                        });
                    }
                });
            }



            // Add New Permission

            $("#permissionSaveBtn").click(function (e) {
                e.preventDefault();

                var empty = true;
                $("#permissionCreateForm input[id="name"]").each(function() {
                    if ($(this).val() == "") {
                        $("#ajaxflash div p").text('Name fild is required.');
                        $("#ajaxflash").fadeIn().fadeOut(5000);
                        $(this).focus();
                    }
                });

                // let name = $("#permissionCreateForm #name").val();
                // let gurd = $("#permissionCreateForm #guard").val();

                // if (name == '') {
                //     $("#ajaxflash div p").text('Name fild is required.');
                //     $("#ajaxflash").fadeIn().fadeOut(5000);
                // } else {

                // }
                // alert(name);
            });
            function addtoproject(memberid) {
                $.ajax({
                    url: BASE_URL + 'projectmembers/store',
                    dataType: 'json',
                    data: {
                        project_id: pid,
                        member_id: memberid,
                    },
                    type: 'POST',
                    success: function(response) {
                        let memshow = $("#pmembershow");
                        let srd = $("#searchresult");
                        if (response.error) {
                            $("#ajaxflash div p").text(response.error);
                            $("#ajaxflash").fadeIn().fadeOut(5000);
                            srd.html('').fadeOut(150);
                        } else {
                            $("#ajaxflash div p").text(response.success);
                            $("#ajaxflash").fadeIn().fadeOut(5000);
                            var appendble = `<div class="eachProjectMember " id="epm${response.data.id}">
                                    <div class="flex items-center justify-between gap-2">
                                        <div class="flex gap-2 px-4 py-2 hover:bg-seagreen/10 flex-grow">
                                            <div class="p-1 w-12 aspect-square rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url('${ BASE_URL+response.data.photo }')"></div>
                                            <div class="">
                                                <h3 class="text-lg font-semibold">${response.data.name}</h3>
                                                <p>${response.data.designation}</p>
                                            </div>
                                        </div>
                                        <div class="flex h-8 w-8 justify-center items-center text-xl bg-seagreen/40 text-white hover:bg-seagreen ml-auto" onclick="deletethis(${response.data.id})">
                                            <span class="mdi mdi-close"></span>
                                        </div>
                                    </div>
                                </div>`;
                            memshow.append(appendble);
                            srd.html('').fadeOut(150);
                            $("form#membersearchform").trigger("reset");
                        }

                    },
                });
            }
        </script>
    </x-slot>
</x-admin-layout>
