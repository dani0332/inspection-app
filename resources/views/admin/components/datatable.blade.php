<table
        id="example"
        class="table data-table"
        style="width: 100%;"
>
    <thead>
    <tr>
        @foreach($datatable['columns']->pluck(['displayName']) AS $item)
            <th>{{$item}}</th>
        @endforeach
    </tr>
    </thead>


    @if(FALSE)
        <thead>
        <tr>
            <th>User Type Comp</th>
            <th>Assigned Users</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>Sales Representative</td>
        <td>
            Craig Andrews , Craig Andrews, Craig Andrews, Craig
            Andrews
        </td>

        <td>
            <div class="dropdown">
                <button
                        class="btn btn-secondary dropdown-toggle"
                        type="button"
                        id="actionMenu1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                >
                    Actions
                </button>
                <ul
                        class="dropdown-menu"
                        aria-labelledby="actionMenu1"
                >
                    <li>
                        <a
                                class="dropdown-item"
                                href="#"
                                onclick="editRow(this)"
                        >Edit</a
                        >
                    </li>
                    <li>
                        <a
                                class="dropdown-item"
                                href="#"
                                onclick="deleteRow(this)"
                        >Delete</a
                        >
                    </li>
                </ul>
            </div>
        </td>
    </tr>
    </tbody>
    @endif
</table>




@component('admin.components.modal')
    @slot('identifier',$identifier.'DeleteModal')
    @slot('submitBtnTitle','Yes, Delete')
    @slot('modalTitle','Delete '.$title)
    @slot('formId',$identifier.'DeleteForm')
    @slot('modalBody',$deleteModalBody)
@endcomponent

@push("page_js")
    <script>
        let table ;
        $(document).ready(function () {
            let $editModal = $('#{{$identifier}}EditModal');
            let $editForm = $('#{{$identifier}}EditForm');

            let config = @json($datatable);
            // console.log(config.columns);
            config.columns.map((item,index)=>{
                if(item.name == 'actions'){
                    console.log('item',item);
                    item.render = (data, type, row, meta)=>{
                        // console.log('data',data);
                        // console.log('type',type);
                        // console.log('row',row);
                        // console.log('meta',meta);
                        return `@component('admin.components.actions')
                            @endcomponent
                        `;
                    };
                }
            })


            config.ajax.data = (d) => {
                d.filters = {
                    keyword : $(".main-sec .search-keyword").val()
                };
                //d.reOrder = post_data;
            }


            console.log('config after',config);

            table = $('#example').DataTable(config);

            table.on("click","ul.actions .edit",function (e){
                e.preventDefault();
                let element = $(this);
                //var id = $(this).data('id');
                //let url = `{{$editUrl}}`;
                editRow(element[0]);


                if(false){
                $.ajax({
                    url: `${url}/` + id,
                    method: "GET",
                    data: '',
                    success: function (response) {
                        var data = response.data;
                        console.log($editModal);

                        // $editForm.fillEditForm(response);

                        // console.log("ajac respon",element);

                        {{--$editForm.attr('action','{{$updateUrl}}'+'/'+response.data.id);--}}
                        {{--$editForm.closest $('#update_form input[name="user_type"]').val(response.data.title);--}}
                        //fillEditForm(response);
                        $editModal.modal('show');
                    },
                    error: function () {
                        alert("No Network");
                    }
                });
                }
            });

            table.on("click","ul.actions .delete",function (e){
                e.preventDefault();
                let element = $(this);
                var id = $(this).data('id');
                let url = `{{$editUrl}}`;
                console.log("delete" ,url);
                console.log("id" ,id);
                deleteRow(element[0]);
            });


            $(".search-keyword").on('keyup focusout',function (e){
                if(e.which == 13 || e.type == 'focusout'){
                    console.log("You've pressed the enter key!");
                    table.ajax.reload();
                }
            });
        });
    </script>
@endpush