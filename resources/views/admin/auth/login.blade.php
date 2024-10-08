@extends('admin.auth.master')
@section('title', "Login")
@section('content')
    <div class="auth-box">
        <form action="{{route("login")}}" method="POST" class="needs-validation" id="login-form">
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
                    <input type="email" name="email" placeholder="&nbsp;"
                           value="{{old('email')}}" required/>
                    <span class="placeholder">Email Address</span>
                </label>
            </div>
            <div class="col-12">
                <label class="custom-field two">
                    <input type="password" name="password" placeholder="&nbsp;" required/>
                    <span class="placeholder">Password</span>
                </label>
            </div>
            <div class="col-12 text-end">
                <a href="{{route("password.request")}}" class="color-blue"
                >Forget Password</a
                >
            </div>
            <button class="signin-btn mt-5" type="submit">Sign in</button>
            <p class="sigup-text">
                Don’t have an account?
                <a href="{{route("register")}}" class="color-blue">Sign up</a>
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

        $(document).ready(function () {
            console.log("TEST");
            $("#login-form").validate({
                errorPlacement: function (error, element) {

                    element.addClass("is-invalid");
                    error.addClass("invalid-feedback").insertAfter(element);

                    console.log("error", error);
                    console.log("element", element);
                    // error.addClass("invalid-feedback");
                    // element.addClass("is-invalid");
                    // element.parents("label.custom-field").removeClass("is-invalid").insertAfter();
                },
                submitHandler: function (form) {
                    form.submit();  // This will submit the form
                }
            });
        });
    </script>

@endpush