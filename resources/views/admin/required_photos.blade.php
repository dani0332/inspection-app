@extends('admin.master')
@section('content')
<section class="container-fluid main-sec">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="user-type-sec">
                <div>
                    <h2>Required Photos</h2>
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
        <div class="col-12 mt-3">
            <div class="table-responsive">
                <table
                        id="example"
                        class="table data-table"
                        style="width: 100%"
                >
                    <thead>
                    <tr>
                        <th>Photo View</th>
                        <th>Type</th>
                        <th >User Type</th>
                        <th class="text-start">Min. Quantity</th>
                        <th >Thumbnail</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    <tr>
                        <td>Front Elevation Overview</td>
                        <td>Required</td>
                        <td >Production Manager, Inspector</td>
                        <td class="text-start">5</td>
                        <td>Yes</td>
                        <td>
                            <div class="dropdown">
                                <button
                                        class="btn btn-secondary dropdown-toggle"
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
                        </td>
                    </tr>
                    
                   
                    <!-- Add more rows as needed -->
                    </tbody>
                </table>
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
    </script>
@endpush