@extends('admin.auth.master')
@section('content')
    <div class="col-12 col-sm-12 col-md-6 col-lg-5">
        <div class="auth-logo">
            <img src="{{asset("assets/img/auth-logo.png")}}" alt="" />
        </div>
        <div class="auth-box">
            <form action="{{route("customPasswordReset",['token' => $token])}}" method="POST" id="reset-form">
                {{csrf_field()}}

                <div class="col-12">
                    <h1>Welcome back</h1>
                    <p>Welcome back! Please enter your details</p>
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
                        <input type="password" name="new_password" placeholder="&nbsp;" required/>
                        <span class="placeholder">New Password</span>
                    </label>
                </div>
                <div class="col-12">
                    <label class="custom-field two">
                        <input type="password" name="new_password_confirmation" placeholder="&nbsp;" required/>
                        <span class="placeholder">Confirm New Password</span>
                    </label>
                </div>
                <button class="signin-btn" type="submit">Submit</button>
                <p class="sigup-text">
                    Already have an account?
                    <a href="{{route("login")}}" class="color-blue">Sign in</a>
                </p>
            </form>
        </div>
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
            $("#reset-form").validate({
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