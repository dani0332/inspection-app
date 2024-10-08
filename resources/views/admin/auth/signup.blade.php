@extends('admin.auth.master')
@section('title', "Register")
@section('content')
    <div class="auth-box sign-up-box">
        <form action="{{route("register")}}" method="POST" class="needs-validation" id="register-form">
            {{csrf_field()}}
            <div class="col-12">
                <h1>Create an account</h1>
                <p>Let’s get started with your basic information</p>
            </div>
            <div class="col-12 pt-3 pb-3">
                @component("admin.components.alert")
                    @slot('type',session('type'))
                    @slot('title',session('message'))
                    @slot('errors',$errors->all())
                @endcomponent
            </div>
            <div class="col-12">
                <label class="custom-field two is-invalid">
                    <input type="text" name="full_name" placeholder="&nbsp;"
                           value="{{old("full_name")}}"
                           required/>
                    <span class="placeholder">Full Name</span>
                </label>
            </div>
            <div class="col-12">
                <label class="custom-field two">
                    <input type="email" name="email" placeholder="&nbsp;"
                           value="{{old("email")}}"
                           required/>
                    <span class="placeholder">Email Address</span>
                </label>

            </div>
            <div class="col-12">
                <label class="custom-field two">
                    <input type="text" name="mobile_no" placeholder="&nbsp;"
                           value="{{old("mobile_no")}}"
                           required/>
                    <span class="placeholder">Phone</span>
                </label>
            </div>
            <div class="col-12">
                <label class="custom-field two">
                    <input type="password" name="password" placeholder="&nbsp;" required/>
                    <span class="placeholder">Password</span>
                </label>
            </div>
            <div class="col-12">
                <label class="custom-field two">
                    <input
                            type="password"
                            name="password_confirmation"
                            placeholder="&nbsp;"
                            required
                    />
                    <span class="placeholder">Confrim Password</span>
                </label>
            </div>
            <button class="signin-btn">Sign up</button>
            <p class="sigup-text">
                Already have an account?
                <a href="{{route('login')}}" class="color-blue">Sign in</a>
            </p>
        </form>
    </div>
@endsection
@push("page_css")
    <style>

    </style>
@endpush
@push("page_lib")
    <script src="{{asset("assets/plugins/jquery-validation-1.19.5/jquery.validate.min.js")}}" type="text/javascript"></script>
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
            $("#register-form").validate({
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
@endpush