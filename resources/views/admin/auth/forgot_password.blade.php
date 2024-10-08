@extends('admin.auth.master')
@section('content')
    <div class="auth-box">
        <form action="{{route("password.email")}}" method="POST" id="forget-form">
            {{csrf_field()}}
            <div class="col-12">
                <h1>Forgot Your Password ?</h1>
                <p>We can recover it for you.</p>
            </div>
            <div class="col-12 pt-3 pb-3">
                @component("admin.components.alert")
                    @slot('type',session('type'))
                    @slot('title',session('message'))
                    @slot('errors',$errors->all())
                @endcomponent
            </div>
            <div class="col-12">
                <label class="custom-field two">
                    <input type="email" name="email" placeholder="&nbsp;" required/>
                    <span class="placeholder">Email Address</span>
                </label>
            </div>
            <button class="signin-btn" type="submit">Submit</button>
            <p class="sigup-text">
                Already have an account?
                <a href="{{route("login")}}" class="color-blue">Sign in</a>
            </p>
        </form>
    </div>
@endsection
@push("page_css")
    <style>

    </style>
@endpush
@push("page_js")
    <script>
        const inputs = document.querySelectorAll('input')

        inputs.forEach((el) => {
            el.addEventListener('blur', (e) => {
                if (e.target.value) {
                    e.target.classList.add('dirty')
                } else {
                    e.target.classList.remove('dirty')
                }
            })
        })

        $(document).ready(function(){
            console.log("TEST");
            $("#forget-form").validate({
                errorPlacement: function ( error, element ) {

                    element.addClass("is-invalid");
                    error.addClass("invalid-feedback").insertAfter(element);

                    console.log("error", error);
                    console.log("element", element);
                    // error.addClass("invalid-feedback");
                    // element.addClass("is-invalid");
                    // element.parents("label.custom-field").removeClass("is-invalid").insertAfter();
                },
                submitHandler: function(form) {
                    form.submit();  // This will submit the form
                }
            });
        });
    </script>
    </script>
@endpush