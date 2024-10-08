<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="{{asset("assets/css/auth.css")}}" /> -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}" />
    <link rel="icon" type="image/x-icon" href="{{asset("image/logo-icon.png")}}">
    @hasSection('title')
        <title>{{config("app.name")." - "}}@yield("title")</title>
    @else
        <title>{{config("app.name")}}</title>
    @endif

    @stack("page_css")
</head>
<body class="auth">
<div class="container">
    <div class="row gx-0">
        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
            <div class="auth-sidebar">
                <img src="{{asset("assets/img/auth-img.png")}}" alt="" class="img-fluid" />
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-5">
            <div class="auth-logo">
                <img src="{{asset("assets/img/auth-logo.png")}}" alt="" />
            </div>
            @yield("content")
        </div>

    </div>
</div>

<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"
></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset("assets/plugins/jquery-validation-1.19.5/jquery.validate.min.js")}}" type="text/javascript"></script>
@stack("page_lib")
@stack("page_js")
<!--<script>
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
</script>-->
</body>
</html>
