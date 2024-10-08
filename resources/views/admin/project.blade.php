@extends('admin.master')
@section('content')
<section class="container-fluid main-sec">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="user-type-sec">
                <div>
                    <h2>Projects</h2>
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
                    <div >
                        <button class="btn-theme" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add New</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-card-header">
                            <div class="card-img">
                                <img src="../assets/img/card-img.png" alt="">
                                <div class="card-img-title">
                                    <p>Project Title here</p>
                                    <p class="detail">755 Lindenwold Garden Apartments Ro</p>
                                    <ul class="d-flex align-items-center">
                                        <li>4 days ago</li>
                                        <li class="list-show">08:26 pm</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="project-card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="project-detail">
                                        <p class="detail-title">Assigned to:</p>
                                        <p>Alex Hales</p>
                                    </div>
                                    <div  class="project-detail mt-3">
                                        <p class="detail-title">Email:</p>
                                        <p>alexhales@email.com</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <div  class="project-detail">
                                        <p class="detail-title">Claim No.:</p>
                                        <p>579</p>
                                    </div>
                                    <div class="project-detail mt-3">
                                        <p class="detail-title">Inspection Date:</p>
                                        <p>01/29/2024</p>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered project-modal">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <!-- <img src="../assets/img/close-icon.png" alt=""> -->
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="">
                <input type="text" placeholder="Project Name" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="">
                <input type="text" placeholder="Address" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="">
                <input type="text" placeholder="Claim #" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="">
                <input type="text" placeholder="Sales Tax" class="form-control place-color" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="">
                <input id="datepicker"  placeholder="Sales Tax" class="form-control place-color"  />
            </div>
            <div class="">
                <input  type="text" placeholder="Customer Email" class="form-control place-color"  />
            </div>
            <select class="form-select add-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-save">Save </button>
      </div>
    </div>
  </div>
</div>

    <script>
        
    </script>
@endsection

@push("page_css")
    <style>

    </style>
@endpush
@push("page_js")
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
        $(document).ready(function () {
            $('#example').DataTable({
                paging: true,
                searching: false,
                ordering: true,
                info: true,
                responsive: true
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
    </script>
@endpush