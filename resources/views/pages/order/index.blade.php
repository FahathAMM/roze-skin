@extends('layout.app')
@section('title', $title)
@section('content')
    @push('styles')
        <!--datatable css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <!--datatable responsive css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    @endpush
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            {{-- <x-breadcrumb title="Users" parent="Administration" /> --}}
            <!-- end page title -->

            <div class="card" id="contactList">
                <div class="card-header py-2  border-bottom-0">
                    <div class="row align-items-center g-3">
                        <div class="col-md-3">
                            <h5 class="card-title mb-0">{{ $title ?? '' }}</h5>
                        </div>

                        <div class="col-md-auto ms-auto">
                            <div class="d-flex gap-2">
                                {{-- <div class="d-flex align-items-center gap-2">
                                    <select class="form-control mb-0" data-choices data-choices-search-false name="mailType"
                                        id="choices-mailType" onchange="renderTable(this.value)">
                                        <option value="-1" selected>All</option>
                                        <option value="1">Confirmed Status</option>
                                        <option value="2">Shipment Status</option>
                                        <option value="3">Out for Delivery</option>
                                        <option value="4">Delivered</option>
                                        <option value="5">Return Created</option>
                                        <option value="10">Low Stock</option>
                                    </select>
                                </div> --}}

                                <div class="input-group w-75">
                                    <input type="text"
                                        class="form-control border-1 dash-filter-picker shadows flatpickr-input active"
                                        name="filter_date" data-provider="flatpickr" data-range-date="true"
                                        data-date-format="d M, Y" data-default-date="{{ setDefultDate() }}"
                                        readonly="readonly" id="date_range_filter">
                                    <div class="input-group-text bg-primary border-primary text-white">
                                        <i class="ri-calendar-2-line"></i>
                                    </div>
                                </div>

                                <div class="search-box">
                                    <input type="text" class="form-control search"
                                        placeholder="Search for transactions..." id="custom-search-input">
                                    <i class="ri-search-line search-icon"> </i>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs nav-tabs-custom nav-success mb-0" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link All py-3" data-bs-toggle="tab" id="All" href="#home1"
                                    role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-store-2-fill me-1 align-bottom"></i> All Orders
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-3 Delivered active" data-bs-toggle="tab" id="Delivered"
                                    href="#delivered" role="tab" aria-selected="true">
                                    <i class="ri-checkbox-circle-line me-1 align-bottom"></i> Delivered
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-3 Pickups" data-bs-toggle="tab" id="Pickups" href="#pickups"
                                    role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-truck-line me-1 align-bottom"></i> Pickups <span
                                        class="badge bg-danger align-middle ms-1">2</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-3 Returns" data-bs-toggle="tab" id="Returns" href="#returns"
                                    role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-arrow-left-right-fill me-1 align-bottom"></i> Returns
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-3 Cancelled" data-bs-toggle="tab" id="Cancelled" href="#cancelled"
                                    role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-close-circle-line me-1 align-bottom"></i> Cancelled
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="card-body">

                    <input type="hidden" id="minDate" placeholder="Start Date">
                    <input type="hidden" id="maxDate" placeholder="End Date">

                    <table id="datatable-crud" class="display table-sm table stripe dt-responsive table-bordered"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>OrderID</th>
                                <th>Order Number</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>ImportedDate</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    @php
        function setDefultDate()
        {
            $today = now();
            $endOfMonth = now()->endOfMonth();

            return request()->get('filter_date', $today->format('d M, Y') . ' to ' . $endOfMonth->format('d M, Y'));
        }
    @endphp

    @push('scripts')
        <!--datatable js-->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

        <script>
            $(function() {
                loadTable();
                const element = document.querySelector('.dataTables_length label select');
                const choices = new Choices(element, {
                    searchEnabled: false
                });
            });

            function loadTable(filter = null) {
                var table = $('#datatable-crud').DataTable({
                    processing: true,
                    language: {
                        processing: '<i class="fas fa-spinner fa-spin"></i>',
                    },
                    serverSide: true,
                    "searching": true,
                    stateSave: false,
                    pageLength: 25,
                    "scrollY": "50vh",
                    ajax: {
                        url: '{{ url('admin/order') }}',
                        data: function(d) {
                            d.minDate = $('#minDate').val();
                            d.maxDate = $('#maxDate').val();
                        },
                    },

                    columns: [{
                            data: 'id',
                            name: 'id'
                        },

                        {
                            data: 'order_number',
                            name: 'order_number',
                        },
                        {
                            data: 'total_price',
                            name: 'total_price',
                        },
                        {
                            data: 'status',
                            name: 'status',
                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            render: function(data, type, row) {
                                return data;
                                // return getDateFromDateAndTime(data);
                            }
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ],
                    // order: [
                    //     [6, 'desc']
                    // ]
                }); //end datatable

                // Your custom search logic
                $('#custom-search-input').keyup(function(e) {
                    var searchTerm = $(this).val();
                    table.search(searchTerm).draw(); // Use global search instead of column-specific search
                    // table.columns(1).search(searchTerm).draw(); // Assuming 'name' column index is 1
                });

                let searchValue = $('#datatable_filter label input').val();
                $('#custom-search-input').val(searchValue);

                flatpickr("#date_range_filter", {
                    mode: "range",
                    dateFormat: "d M, Y",
                    onChange: function(selectedDates, dateStr, instance) {

                        if (selectedDates.length === 2) {
                            let startDate = selectedDates[0];
                            let endDate = selectedDates[1];
                            $('#minDate').val(startDate.toLocaleDateString());
                            $('#maxDate').val(endDate.toLocaleDateString());

                            table.ajax.reload();

                        }
                    }
                });

            }
        </script>
    @endpush

    <style>
        #datatable-crud_processing {
            font-size: 40px !important;
            padding: 15px 0 !important;
            color: #244067 !important;
        }

        .fresh-loader {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 120px;
            height: 120px;
            margin: -60px 0 0 -60px;
            -webkit-animation: spin 4s linear infinite;
            -moz-animation: spin 4s linear infinite;
            animation: spin 4s linear infinite;
        }

        @-moz-keyframes spin {
            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
@endsection
