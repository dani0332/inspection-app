@extends('admin.master')
@section("editForm")
    <div class="">
        <input type="text" placeholder="Title" name="title" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp" />
    </div>
@endsection

@section('content')
<section class="container-fluid main-sec">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="user-type-sec">
                <div>
                    <h2>User Types</h2>
                </div>
                <div class="d-flex align-items-center">
                    <div class="me-3 user-type-input">
                        @component('admin.components.search-keyword')
                        @endcomponent
                    </div>
                    <div class="me-3">
                        <button class="btn-theme2">Filters</button>
                    </div>
                    <div>
                        <button class="btn-theme add" type="button" data-bs-toggle="modal" data-bs-target="#{{$identifier.'AddModal'}}">+ Add New</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                @component('admin.components.datatable')
                    @slot('identifier',$identifier)
                    @slot('title',$title)
                    @slot("datatable", $datatable)
                    @slot("editModalBody")
                        @yield('editForm')
                    @endslot
                    @slot("deleteModalBody")
                        <p>Are you sure, you want to delete the record?</p>
                    @endslot
                    @slot("editUrl", route('admin.getUserTypeDetails',['']))
                    @slot("deleteUrl", route('admin.getUserTypeDetails',['']))
                @endcomponent
            </div>
        </div>
    </div>
    @component('admin.components.toast')
        @slot("name","recordStatusToast")
    @endcomponent

    @component('admin.components.modal')
        @slot('identifier',$identifier.'AddModal')
        @slot('modalTitle','Add '.$title)
        @slot('formId',$identifier.'AddForm')
        @slot('modalBody')
            @yield('editForm')
        @endslot
    @endcomponent

    @component('admin.components.modal')
        @slot('identifier',$identifier.'EditModal')
        @slot('modalTitle','Edit '.$title)
        @slot('formId',$identifier.'EditForm')
        @slot('modalBody')
            @yield('editForm')
        @endslot
    @endcomponent
</section>
@endsection




@push("page_css")
    <style>

    </style>
@endpush
@push("page_js")
    <script>
        let $editModal, $editForm, $deleteModal, $deleteForm, $addModal, $addForm;

        let editUrl     = `{{route('admin.getUserTypeDetails',[''])}}`;
        let updateUrl   = `{{ route('admin.updateUserType',['']) }}`;
        let deleteUrl   = `{{ route('admin.deleteUserType',['']) }}`;
        $(document).ready(function () {
            $addModal = $('#{{$identifier}}AddModal');
            $addForm = $('#{{$identifier}}AddForm');
            $addForm.attr('action',`{{route('admin.addUserType')}}`);

            console.log("$addForm",$addForm);

            $editModal = $('#{{$identifier}}EditModal');
            $editForm = $('#{{$identifier}}EditForm');

            $deleteModal = $('#{{$identifier}}DeleteModal');
            $deleteForm = $('#{{$identifier}}DeleteForm');

            $addForm.on("submit",function(e){
                e.preventDefault();


                console.log("Add Submit",$(this).attr('action'));
                console.log('serialize',$(this).find("select,textarea, input").serialize());
                let url = $(this).attr('action');
                $.ajax({
                    url: url,
                    method: "POST",
                    data: $(this).find("select,textarea, input").serialize(),
                    success: function (response) {
                        var data = response.data;

                        $addModal.modal('hide');

                        showToast($('#recordStatusToast'),{
                            type: response.code === 200 ? 'success' : 'danger',
                            message: response.message,
                        });

                        table.ajax.reload();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        //alert(xhr.status,);
                        console.error('responseJSON.message',xhr.responseJSON.message);
                    }
                });


            });

            $editForm.on("submit",function(e){
                e.preventDefault();


                console.log("Update Submit",$(this).attr('action'));
                console.log('serialize',$(this).find("select,textarea, input").serialize());
                let url = $(this).attr('action');
                $.ajax({
                    url: url,
                    method: "POST",
                    data: $(this).find("select,textarea, input").serialize(),
                    success: function (response) {
                        var data = response.data;

                        $editModal.modal('hide');

                        showToast($('#recordStatusToast'),{
                            type: response.code === 200 ? 'success' : 'danger',
                            message: response.message,
                        });

                        table.ajax.reload();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status,thrownError);
                    }
                });


            });

            $deleteForm.on("submit",function(e){
                e.preventDefault();


                console.log("Update Submit",$(this).attr('action'));
                console.log('serialize',$(this).find("select,textarea, input").serialize());
                let url = $(this).attr('action');
                $.ajax({
                    url: url,
                    method: "POST",
                    data: $(this).find("select,textarea, input").serialize(),
                    success: function (response) {
                        var data = response.data;

                        $editModal.modal('hide');

                        showToast($('#recordStatusToast'),{
                            type: response.code === 200 ? 'success' : 'danger',
                            message: response.message,
                        });

                        table.ajax.reload();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status,thrownError);
                    }
                });


            });

        });

        {{--(function($) {--}}
        {{--    $.fn.fillEditForm =  function (response) {--}}
        {{--        let $editForm = this;--}}
        {{--        let updateUrl = `{{ route('admin.updateUserType',['']) }}`;--}}

        {{--        console.log(response.data.title);--}}
        {{--        console.log('editForm.find',$editForm);--}}

        {{--        $editForm.attr('action',`${updateUrl}/response.data.id`);--}}
        {{--        $editForm.find('input[name="user_type"]').val(response.data.title);--}}
        {{--    };--}}
        {{--})(jQuery);--}}

        {{--function fillEditForm(response){--}}
        {{--    console.log(response);--}}
        {{--    $editForm.attr('action','{{$updateUrl}}'+'/'+response.data.id);--}}
        {{--    $editForm.closest = $('#update_form input[name="user_type"]').val(response.data.title);--}}
        {{--}--}}

        function editRow(button) {
            var row = $(button).closest('tr')
            let id  = row.attr("id");
            console.log("editRow",button,row);
            console.log("row.id",);


           // let $editModal = $('#{{$identifier}}EditModal');
           // let $editForm = $('#{{$identifier}}EditForm');
            $.ajax({
                url: `${editUrl}/` + id,
                method: "GET",
                data: '',
                success: function (response) {
                    var data = response.data;
                    console.log("$editModal",$editModal);

                    console.log(response.data.title);
                    console.log('editForm.find',$editForm);

                    $editForm.attr('action',`${updateUrl}/${data.id}`);
                    $editForm.find('input[name="title"]').val(response.data.title);

                    $editModal.modal('show');
                },
                error: function () {
                    alert("No Network");
                }
            });
            //alert('Edit row: ' + data.join(', '))
            // Implement edit functionality here
        }



        function deleteRow(button) {
            var row = $(button).closest('tr');
            let id = $(button).data('id');
            //row.remove()
            console.log('User Type');

            $deleteForm.attr('action',`${deleteUrl}/${id}`);

            $deleteModal.modal('show');

            // Implement additional delete functionality here if needed
        }

        $(document).ready(function () {
            var width = $(window).width()
            $(window).resize(function (e) {
                e.preventDefault()
                width = $(window).width()
                if (width <= 767) {
                    // Compare with a number
                    $('#wrapper').removeClass('toggled')
                }
            })
            $('#menu-toggle').click(function (e) {
                e.preventDefault()
                $('#wrapper').toggleClass('toggled')
            })
        })
    </script>
@endpush