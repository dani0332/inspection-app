<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link
            href="https://cdn.datatables.net/v/bs5/dt-2.0.7/datatables.min.css"
            rel="stylesheet"
    />
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="{{asset("image/logo-icon.png")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}" />
    @stack("page_css")
</head>
<body>
<div class="d-flex toggled" id="wrapper">
    <!-- Sidebar -->
    <aside class="flex-shrink-0 p-3" id="sidebar">
        <header class="sidebar-heading">
            <div class="side-logo">
                <img src="{{asset("assets/img/logo.png")}}" alt="" />
            </div>
        </header>
        <nav>
            <ul class="nav flex-column mt-5">
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img
                                    src="{{asset("assets/img/project-icon.png")}}"
                                    class="img-fluid"
                                    alt=""
                            />
                        </div>
                        <div class="mt-2">
                            <a class="font-16" href="#">Projects</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"
                                        aria-expanded="false"
                                        aria-controls="collapseOne"
                                >
                                    <div class="me-3">
                                        <img
                                                src="{{asset("assets/img/user-icon.png")}}"
                                                class="img-fluid"
                                                alt=""
                                        />
                                    </div>
                                    <div class="mt-2">
                                        <a class="font-16" href="#">Users</a>
                                    </div>
                                </button>
                            </div>
                            <div
                                    id="collapseOne"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="{{route("admin.userTypeListing")}}" class="sub-item">User Types</a>
                                        </li>
                                        <li>
                                            <a href="{{route("admin.userListing")}}" class="sub-item">User Management</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img
                                    src="{{asset("assets/img/gallery-icon.png")}}"
                                    class="img-fluid"
                                    alt=""
                            />
                        </div>
                        <div class="mt-2">
                            <a class="font-16" href="#">Photo Feeds</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="accordionExampleTwo">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo"
                                        aria-expanded="false"
                                        aria-controls="collapseTwo"
                                >
                                    <div class="me-3">
                                        <img
                                                src="{{asset("assets/img/inspection-icon.png")}}"
                                                class="img-fluid"
                                                alt=""
                                        />
                                    </div>
                                    <div class="mt-2">
                                        <a class="font-16" href="#">Inspection</a>
                                    </div>
                                </button>
                            </div>
                            <div
                                    id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExampleThree"
                            >
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="#" class="sub-item">Sub Item 01</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sub-item">Sub Item 02</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sub-item">Sub Item 03</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- End Chats Dropdown -->
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img
                                    src="{{asset("assets/img/gallery-icon.png")}}"
                                    class="img-fluid"
                                    alt=""
                            />
                        </div>
                        <div class="mt-2">
                            <a class="font-16" href="#">Required Photos</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="accordionExampleThree">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseThree"
                                >
                                    <div class="me-3">
                                        <img
                                                src="{{asset("assets/img/tag-icon.png")}}"
                                                class="img-fluid"
                                                alt=""
                                        />
                                    </div>
                                    <div class="mt-2">
                                        <a class="font-16" href="#">Tags</a>
                                    </div>
                                </button>
                            </div>
                            <div
                                    id="collapseThree"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExampleThree"
                            >
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="#" class="sub-item">Sub Item 01</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sub-item">Sub Item 02</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sub-item">Sub Item 03</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img
                                    src="{{asset("assets/img/report-icon.png")}}"
                                    class="img-fluid"
                                    alt=""
                            />
                        </div>
                        <div class="mt-2">
                            <a class="font-16" href="#">Reports </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img
                                    src="{{asset("assets/img/survey-icon.png")}}"
                                    class="img-fluid"
                                    alt=""
                            />
                        </div>
                        <div class="mt-2">
                            <a class="font-16" href="#">Inspection Survey</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img
                                    src="{{asset("assets/img/subscription-icon.png")}}"
                                    class="img-fluid"
                                    alt=""
                            />
                        </div>
                        <div class="mt-2">
                            <a class="font-16" href="#">Subscription</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="user-list d-flex align-items-center">
                <li>
                    <div class="user-profile">
                        <img src="{{asset("assets/img/user-img.png")}}" alt="" />
                    </div>
                </li>
                <li>
                    <p class="font-16">Paul Harrison</p>
                    <p class="color-light">Super Admin</p>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- /#sidebar -->
    <!-- Page Content -->
    <main class="dashboard flex-grow-1">
        <header class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div
                        class="d-flex align-items-center justify-content-between w-100"
                >
                    <div>
                        <button class="btn ham-btn" id="menu-toggle">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                    <div>
                        <ul class="header-menu d-flex align-items-center">
                            <li>
                                <img src="{{asset("assets/img/setting.png")}}" alt="" />
                            </li>
                            <li class="icon-button">
                               
                                <div class="dropdown noti-drop">
                                    <button
                                            class="user-profile profile-drop dropdown-toggle"
                                            type="button"
                                            id="actionMenu1"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                    >
                                    <img src="{{asset("assets/img/notification.png")}}" alt="" />
                                     <span class="icon-button__badge">2</span>
                                    </button>
                                        <ul
                                                class="dropdown-menu"
                                                aria-labelledby="actionMenu1"
                                        >
                                            <li>
                                                <a class="dropdown-item" href="#">A New Territory has been assigned to you</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">A New Territory has been assigned to you</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">A New Territory has been assigned to you</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">A New Territory has been assigned to you</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">A New Territory has been assigned to you</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item color-light text-center" href="#">View all</a>
                                            </li>
                                        </ul>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown ">
                                    <button
                                            class=" profile-drop dropdown-toggle"
                                            type="button"
                                            id="actionMenu1"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                    >
                                        <img src="{{asset("assets/img/user-img.png")}}" alt="" />
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
                                                        href="{{route("logout")}}"
                                                        
                                                >Logout</a
                                                >
                                            </li>
                                        </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
    </main>
    <!-- /#page-content -->
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
{{--<script--}}
{{--        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"--}}
{{--        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"--}}
{{--        crossorigin="anonymous"--}}
{{--></script>--}}
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.7/datatables.min.js"></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"  
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
></script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
@stack("page_lib")
@stack("page_js")
</body>
</html>
