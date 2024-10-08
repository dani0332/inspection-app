@extends('admin.master')
@section('content')
<section class="container-fluid main-sec">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="user-type-sec">
                <div>
                    <h2>Photo Feeds</h2>
                </div>
                <div class="d-flex align-items-center">
                    <div class="me-3 user-type-input">
                        <div class="input-group flex-nowrap">
											<span class="input-group-text" id="addon-wrapping">
												<img src="../assets/img/search-icon.png" alt=""
                                                /></span>
                            <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search"
                                    aria-label="Search"
                                    aria-describedby="addon-wrapping"
                            />
                        </div>
                    </div>
                    <div class="me-3">
                        <button class="btn-theme2">Filters</button>
                    </div>
                    <div>
                        <button class="btn-theme">+ Add New</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <ul class="d-flex align-items-center">
                                            <li >08:26 pm</li>
                                            <li class="list-show">08:26 pm</li>
                                        </ul>
                                        <div>
                                        <div class="dropdown">
                                <button
                                        class="action-btn btn-secondary dropdown-toggle"
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
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <ul class="d-flex align-items-center">
                                            <li >08:26 pm</li>
                                            <li class="list-show">08:26 pm</li>
                                        </ul>
                                        <div>
                                        <div class="dropdown">
                                <button
                                        class="action-btn btn-secondary dropdown-toggle"
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
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <ul class="d-flex align-items-center">
                                            <li >08:26 pm</li>
                                            <li class="list-show">08:26 pm</li>
                                        </ul>
                                        <div>
                                        <div class="dropdown">
                                <button
                                        class="action-btn btn-secondary dropdown-toggle"
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
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <ul class="d-flex align-items-center">
                                            <li >08:26 pm</li>
                                            <li class="list-show">08:26 pm</li>
                                        </ul>
                                        <div>
                                        <div class="dropdown">
                                <button
                                        class="action-btn btn-secondary dropdown-toggle"
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
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <ul class="d-flex align-items-center">
                                            <li >08:26 pm</li>
                                            <li class="list-show">08:26 pm</li>
                                        </ul>
                                        <div>
                                        <div class="dropdown">
                                <button
                                        class="action-btn btn-secondary dropdown-toggle"
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
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <ul class="d-flex align-items-center">
                                            <li >08:26 pm</li>
                                            <li class="list-show">08:26 pm</li>
                                        </ul>
                                        <div>
                                        <div class="dropdown">
                                <button
                                        class="action-btn btn-secondary dropdown-toggle"
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
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <ul class="d-flex align-items-center">
                                            <li >08:26 pm</li>
                                            <li class="list-show">08:26 pm</li>
                                        </ul>
                                        <div>
                                        <div class="dropdown">
                                <button
                                        class="action-btn btn-secondary dropdown-toggle"
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
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push("page_css")
    <style>

    </style>
@endpush
@push("page_js")
    <script>
       
        $(document).ready(function () {
            $('#example').DataTable({
                paging: true,
                searching: false,
                ordering: true,
                info: true,
            })
        })

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
        $(document).ready(function() {
            $(".dropdown-toggle").dropdown();
        })
    </script>
@endpush