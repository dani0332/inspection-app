@extends('admin.master')
@section("editForm")
    <div class="">
        <input type="text" placeholder="Name" name="name" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp" />
    </div>
    <div class="">
        <input type="email" placeholder="Email" name="email" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp" />
    </div>
    <div class="">
        <input type="text" placeholder="Mobile No." name="mobile_no" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp" />
    </div>
    <div class="">
        <input type="text" placeholder="Password" name="password" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp" />
    </div>
    <div class="">
        <input type="text" placeholder="Confirm Password" name="password_confirmation" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp" />
    </div>
    <div class="">
        <select name="" class="form-select add-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach($companyGroup AS $item)
                <option value="{{$item['id']}}">{{$item['title']}}</option>
            @endforeach
        </select>
    </div>
@endsection

@section('content')
<section class="container-fluid main-sec">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="user-type-sec">
                <div>
                    <h2>User Management</h2>
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
        <div class="col-12 mt-3">
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

        let editUrl     = `{{route('admin.getUserDetails',[''])}}`;
        let updateUrl   = `{{ route('admin.updateUser',['']) }}`;
        let deleteUrl   = `{{ route('admin.deleteUser',['']) }}`;

        $(document).ready(function () {
            $addModal = $('#{{$identifier}}AddModal');
            $addForm = $('#{{$identifier}}AddForm');
            $addForm.attr('action',`{{route('admin.addUser')}}`);

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
        });

        function editRow(button) {
            var row = $(button).closest('tr')
            var data = row
                .children('td')
                .map(function () {
                    return $(this).text()
                })
                .get()
            alert('Edit row: ' + data.join(', '))
            // Implement edit functionality here
        }

        function deleteRow(button) {
            var row = $(button).closest('tr')
            row.remove()
            alert('Row deleted.')
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
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
        // Create a Stripe client.
        var stripe = Stripe('{{config('app.stripe_pub_key')}}');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function (event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('add_form');
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            stripe.createToken(card).then(function (result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('add_form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endpush