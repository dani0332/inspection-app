@extends('admin.master')
@section('content')
<section class="container-fluid main-sec">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="user-type-sec">
                <div>
                    <h2>Reports</h2>
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="project-card report-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/report.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="color-black  pb-3 font-22">October Fest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="project-card report-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/report.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="color-black  pb-3 font-22">October Fest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="project-card report-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/report.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="color-black  pb-3 font-22">October Fest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="project-card report-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/report.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="color-black  pb-3 font-22">October Fest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="project-card report-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/report.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="color-black  pb-3 font-22">October Fest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="project-card report-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/report.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="color-black  pb-3 font-22">October Fest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="project-card report-card photo-feed">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/report.png" alt="">
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="color-black  pb-3 font-22">October Fest</p>
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