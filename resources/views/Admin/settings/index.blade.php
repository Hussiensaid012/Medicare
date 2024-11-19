{{-- @extends('Admin.index')
@section('title')
    Settings
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-fluid">


                <div class="row">
                    <div class="col-12">


                        <div class="card card-docs mb-2">
                            <div class="card-header card-header-stretch">
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">Medicare</h3>
                                </div>
                            </div>
                            <div class="card-body">

                                <form>

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="slider" role="tabpanel">

                                            <div class="d-flex justify-content-between align-items-center mb-3">



                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target=".addSliderImg"
                                                    class="btn btn-primary">
                                                    Add
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M12 19q-.425 0-.712-.288Q11 18.425 11 18v-5H6q-.425 0-.713-.288Q5 12.425 5 12t.287-.713Q5.575 11 6 11h5V6q0-.425.288-.713Q11.575 5 12 5t.713.287Q13 5.575 13 6v5h5q.425 0 .712.287q.288.288.288.713t-.288.712Q18.425 13 18 13h-5v5q0 .425-.287.712Q12.425 19 12 19Z" />
                                                    </svg>

                                                </a>


                                            </div>

                                            <table id="kt_datatable_example_1"
                                                class="table align-middle table-row-dashed fs-6 gy-5 custom-table d-table">
                                                <thead>
                                                    <tr class="text-center fw-bolder fs-7 text-uppercase gs-0">
                                                        <th>#</th>
                                                        <th>phone</th>
                                                        <th> email </th>
                                                        <th>location </th>
                                                        <th>facebook </th>
                                                        <th>X </th>
                                                        <th>Linkedin </th>
                                                        <th>instagram </th>
                                                        <th>youtube </th>
                                                        <th>pinterest </th>
                                                        <th>About Us </th>
                                                        <th>modify </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-gray-800 text-center fw-bold">
                                                    @foreach ($settings as $setting)
                                                        <tr>
                                                            <td>{{ $setting->id }}</td>
                                                            <td>{{ $setting->phone }}</td>
                                                            <td>{{ $setting->email }}</td>
                                                            <td>{{ $setting->location }}</td>
                                                            <td>{{ $setting->facebook }}</td>
                                                            <td>{{ $setting->X }}</td>
                                                            <td>{{ $setting->linkedin }}</td>
                                                            <td>{{ $setting->instagram }}</td>
                                                            <td>{{ $setting->youtube }}</td>
                                                            <td>{{ $setting->pinterest }}</td>
                                                            <td>{{ $setting->about_Us }}</td>
                                                            <td>
                                                                <a href="javascript:;" data-bs-toggle="modal"
                                                                    data-bs-target="#editSliderImg{{ $setting->id }}"
                                                                    class="btn btn-primary btn-sm p-2 mx-2">
                                                                    <svg width="20" height="20" viewBox="0 0 24 24">
                                                                        <path fill="currentColor"
                                                                            d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575q.837 0 1.412.575l1.4 1.4q.575.575.6 1.388q.025.812-.55 1.387ZM4 21q-.425 0-.712-.288Q3 20.425 3 20v-2.825q0-.2.075-.387q.075-.188.225-.338l10.3-10.3l4.25 4.25l-10.3 10.3q-.15.15-.337.225q-.188.075-.388.075ZM14.325 9.675l-.7-.7l1.4 1.4Z" />
                                                                    </svg>
                                                                </a><br><br>
                                                                <a href="javascript:;"
                                                                    class="btn btn-primary btn-sm p-2 mx-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteSliderModal{{ $setting->id }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                                        viewBox="0 -960 960 960" width="24px"
                                                                        fill="white">
                                                                        <path
                                                                            d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0
                                                                                                                                                                                                                                                            33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160
                                                                                                                                                                                                                                                            0h80v-360h-80v360ZM280-720v520-520Z" />
                                                                    </svg>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>


                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>




    @include('Admin.settings.edit')
    @include('Admin.settings.create')
    @include('Admin.settings.delete')
@endsection --}}
{{-- ////// --}}
@extends('Admin.index')
@section('title')
    Settings
@endsection
@section('content')
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">success</h5>
                    <!-- قم بإزالة زر الإغلاق هنا -->
                </div>
                <div class="modal-body">
                    @if (session('success'))
                        {{ session('success') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper div -->
    <div class="patients-container p-3">

        <!-- Add button and search input in the same row with styles -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('setting.create') }}" class="btn btn-primary ms-3"> <!-- Left margin for Add button -->
                Add
                <svg width="18" height="18" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 19q-.425 0-.712-.288Q11 18.425 11 18v-5H6q-.425 0-.713-.288Q5 12.425 5 12t.287-.713Q5.575 11 6 11h5V6q0-.425.288-.713Q11.575 5 12 5t.713.287Q13 5.575 13 6v5h5q.425 0 .712.287q.288.288.288.713t-.288.712Q18.425 13 18 13h-5v5q0 .425-.287.712Q12.425 19 12 19Z" />
                </svg>
            </a>
            <!-- DataTable search input will appear here -->
            <div id="myTable_filter" class="dataTables_filter"></div>
        </div>
        <div class="table-responsive">

            <!-- Table Structure with margin and centered text -->
            <table id="myTable" class="table table-striped table-bordered text-center mx-3"> <!-- Margin added -->
                <thead>
                    <tr>
                        <th><strong>#</strong></th>
                        <th><strong>Phone</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Location</strong></th>
                        <th><strong>Facebook</strong></th>
                        <th><strong>X</strong></th>
                        <th><strong>Linkedin</strong></th>
                        <th><strong>Instagram</strong></th>
                        <th><strong>Youtube</strong></th>
                        <th><strong>Pinterest</strong></th>
                        <th><strong>About Us</strong></th>
                        <th><strong>Modify</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($settings as $setting)
                        <tr>
                            <td><strong>{{ $setting->id }}</strong></td>
                            <td><strong>{{ $setting->phone }}</strong></td>
                            <td><strong>{{ $setting->email }}</strong></td>
                            <td><strong>{{ $setting->location }}</strong></td>
                            <td><strong>{{ $setting->facebook }}</strong></td>
                            <td><strong>{{ $setting->X }}</strong></td>
                            <td><strong>{{ $setting->linkedin }}</strong></td>
                            <td><strong>{{ $setting->instagram }}</strong></td>
                            <td><strong>{{ $setting->youtube }}</strong></td>
                            <td><strong>{{ $setting->pinterest }}</strong></td>
                            <td><strong>{{ $setting->about_Us }}</strong></td>
                            <td>
                                <a href="{{ route('setting.edit', $setting->id) }}"
                                    class="btn btn-primary btn-sm p-2 mx-2">
                                    <svg width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575q.837 0 1.412.575l1.4 1.4q.575.575.6 1.388q.025.812-.55 1.387ZM4 21q-.425 0-.712-.288Q3 20.425 3 20v-2.825q0-.2.075-.387q.075-.188.225-.338l10.3-10.3l4.25 4.25l-10.3 10.3q-.15.15-.337.225q-.188.075-.388.075ZM14.325 9.675l-.7-.7l1.4 1.4Z" />
                                    </svg>
                                </a>
                                <a href="javascript:;" class="btn btn-primary btn-sm p-2 mx-2" data-bs-toggle="modal"
                                    data-bs-target="#deleteSliderModal{{ $setting->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="white">
                                        <path
                                            d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        0h80v-360h-80v360ZM280-720v520-520Z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Custom CSS -->
        <!-- Custom CSS -->
        <style>
            .table-responsive {
                overflow-x: auto;
                /* تمكين التمرير الأفقي */
                width: 100%;
                /* تأكد من أن الحاوية تأخذ كامل العرض المتاح */
            }

            /* منع التفاف النصوص داخل الأعمدة */
            table {
                white-space: nowrap;
                /* منع التفاف النصوص لضمان التمرير عند الحاجة */
            }

            #myTable_filter input {
                width: 600px;
                /* Wider search input */
                font-weight: bold;
                /* Bold search text */
                font-size: 13px;
                border: solid 1px black;
                background-color: white;
                color: black;
            }

            #myTable_filter label {
                font-weight: bold;
            }

            /* Add margin to the table */
            .patients-container table {
                margin: 20px;
            }

            /* Margin for Add button */
            .btn.ms-3 {
                margin-left: 15px;
                /* Adjust left margin */
            }
        </style>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- DataTables JS and Buttons Extension -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

        <!-- Initialize DataTables with Buttons -->
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true, // Ensure search is enabled
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    // "responsive": true,
                    "scrollX": true,
                    "dom": "<'row'<'col-sm-5'l><'col-sm-7'f>>" +
                        // Places search input in the same row as Add button
                        "<'row'<'col-sm-12'B>>" + // Buttons in this row under the table
                        "<'row'<'col-sm-12'tr>>" + // Table
                        "<'row'<'col-sm-5'i><'col-sm-7'p>>", // Info and Pagination
                    "buttons": [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @if (session('success'))
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();

                    // إخفاء الـ Modal بعد 3 ثوانٍ
                    setTimeout(function() {
                        successModal.hide();
                    }, 3000); // 3000 مللي ثانية = 3 ثوانٍ
                @endif
            });
        </script>
        @include('Admin.settings.delete')
    </div> <!-- End of wrapper div -->
@endsection
