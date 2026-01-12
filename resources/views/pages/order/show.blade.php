@extends('layout.app')
@section('title', $title)
@section('content')
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    {{-- "customer_id": 1,
"order_number": "ORD-20250616-00001",
"total_price": "716.00",
"status": "pending",
"address": "",
"item_count": 2,
"payment_status": false,
"created_at": "2025-06-16 10:44:22",
"updated_at": "2025-06-16T06:44:22.000000Z",
"payment_method": "cod", --}}

    @php
        $details = [
            ['icon' => 'ri-user-line', 'label' => 'Firstname', 'value' => $order->customer->first_name],
            ['icon' => 'ri-user-line', 'label' => 'Lastname', 'value' => $order->customer->last_name],
            ['icon' => 'ri-mail-line', 'label' => 'Email', 'value' => $order->customer->email],
            ['icon' => 'ri-phone-line', 'label' => 'Telephone', 'value' => $order->customer->mobile],
            ['icon' => 'ri-earth-line', 'label' => 'Country id', 'value' => $order->customer->country],
            ['icon' => 'ri-building-line', 'label' => 'City', 'value' => $order->customer->city],
            // ['icon' => 'ri-map-pin-line', 'label' => 'Postcode', 'value' => '---'],
            // ['icon' => 'ri-home-smile-line', 'label' => 'Address type', 'value' => 'billing'],
            // ['icon' => 'ri-building-4-line', 'label' => 'Company', 'value' => '---'],
            // ['icon' => 'ri-store-line', 'label' => 'Store name', 'value' => '---'],
            ['icon' => 'ri-road-map-line', 'label' => 'Payment Method', 'value' => $order->payment_method],
            // ['icon' => 'ri-road-map-line', 'label' => 'Street', 'value' => $order->total_price],
            ['icon' => 'ri-road-map-line', 'label' => 'Address', 'value' => $order->customer->address],
            // ['icon' => 'ri-road-map-line', 'label' => 'Street', 'value' => $order->status],
        ];
    @endphp

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Order Details</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Order Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-8">
                    <div class="card mb-1">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order #{{ $order->order_number }}</h5>
                                <div class="flex-shrink-0">
                                    <a href="{{ url('admin/order/invoice/' . $order->id) }}"
                                        class="btn btn-success btn-sm"><i
                                            class="ri-download-2-fill align-middle me-1"></i>Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-1">

                        <div class="card-header align-items-center d-flex border-bottom-dashed">
                            <h4 class="card-title mb-0 flex-grow-1">Customer</h4>
                        </div>

                        <div class="card-body pb-0">
                            <div class="row" style="font-family: system-ui;">
                                @foreach ($details as $index => $item)
                                    <div class="col-12 {{ $loop->last && count($details) % 2 !== 0 ? 'col-md-6 col-sm-12 col-xl-6' : 'col-md-4 col-sm-6 col-xl-3' }} py-0"
                                        style="border-bottom: 1px solid #e5e5e5">
                                        <div class="card-body py-1">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <span class="bg-primary-subtles rounded-1 p-2 my-4"
                                                        style="font-size:25px">
                                                        <i class="{{ $item['icon'] }} text-primary"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2 flex-grow-1">
                                                    <p class="mb-1 fs-12 fw-medium">{{ $item['label'] }}</p>
                                                    <p class="text-muted1 fw-bold mb-0 fs-12 text-responsive"
                                                        style="color:#dc291e">
                                                        {{ $item['value'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-nowrap align-middle table-borderless mb-0">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Item Price</th>
                                            <th scope="col">Quantity</th>
                                            {{-- <th scope="col">Rating</th> --}}
                                            <th scope="col" class="text-end">Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->items as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                            <img src="{{ $item->product->mainImage->image ?? '' }}"
                                                                alt="" class="img-fluid d-block">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h5 class="fs-15">
                                                                {{ Str::limit($item->product->name, 50) ?? '' }}</h5>
                                                            <p class="text-muted mb-0">Qty: <span
                                                                    class="fw-medium">{{ $item->quantity }}</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ number_format($item->price, 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                {{-- <td>
                                                    <div class="text-warning fs-15">
                                                        <i class="ri-star-line"></i><i class="ri-star-line"></i><i
                                                            class="ri-star-line"></i>
                                                    </div>
                                                </td> --}}
                                                <td class="fw-medium text-end">
                                                    {{ number_format($item->price * $item->quantity, 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="border-top border-top-dashed mt-2">
                                    <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto"
                                        style="width:250px">
                                        <tbody>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td class="text-end">
                                                    AED{{ number_format($order->items->sum(fn($i) => $i->price * $i->quantity), 2) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shipping Charge</td>
                                                <td class="text-end">0</td>
                                            </tr>
                                            <tr class="border-top border-top-dashed fs-15">
                                                <th scope="row">Total Amount</th>
                                                <th class="text-end">
                                                    AED {{ number_format($order->total_price, 2) }}
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card mb-1">
                        <div class="card-header">
                            <div class="d-flex">
                                <h5 class="card-title flex-grow-1 mb-0"><i
                                        class="mdi mdi-truck-fast-outline align-middle me-1 text-muted"></i> Logistics
                                    Details</h5>
                                <div class="flex-shrink-0">
                                    <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary fs-11">Track
                                        Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop"
                                    colors="primary:#405189,secondary:#0ab39c" style="width:80px;height:80px"></lord-icon>
                                <h5 class="fs-16 mt-0">
                                    <span class="badge bg-success p-2">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </h5>

                                {{-- <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Change Order Status As
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            @foreach (\App\Enums\OrderStatus::cases() as $status)
                                                <li>
                                                    <a class="dropdown-item" href="334">
                                                        {{ ucwords(str_replace('_', ' ', $status->value)) }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div> --}}

                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Change Order Status As
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            @foreach (\App\Enums\OrderStatus::cases() as $status)
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('order.changeStatus', ['order' => $order->id, 'status' => $status->value]) }}">
                                                        {{ ucwords($status->value) }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>


                                {{-- <p class="text-muted mb-0">ID: MFDS1400457854</p>
                                <p class="text-muted mb-0">Payment Mode : Debit Card</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order Status</h5>
                                {{-- <div class="flex-shrink-0 mt-2 mt-sm-0">
                                    <a href="javascript:void(0);" class="btn btn-soft-info btn-sm mt-2 mt-sm-0"><i
                                            class="ri-map-pin-line align-middle me-1"></i> Change Address</a>
                                    <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i
                                            class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Order</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="profile-timeline">
                                <div class="accordion accordion-flush" id="accordionFlushExample">


                                    @foreach ($order->orderLog as $log)
                                        <div class="accordion-item border-0">
                                            <div class="accordion-header" id="headingOne">
                                                <a class="accordion-button p-2 shadow-none collapsed1"
                                                    data-bs-toggle="collapse" href="#log-{{ $log->id }}"
                                                    aria-expanded="false" aria-controls="log-{{ $log->id }}">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs">
                                                            <div class="avatar-title bg-success rounded-circle">
                                                                <i class="ri-truck-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="fs-15 mb-0 fw-semibold">
                                                                {{ ucfirst($log->status->value) }} -
                                                                <span class="fw-normal">
                                                                    {{ \Carbon\Carbon::parse($log->status_date)->format('D, d M Y') }}
                                                                </span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="log-{{ $log->id }}" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample"
                                                style="">
                                                <div class="accordion-body ms-2 ps-5 pt-0 pb-0">
                                                    <h6 class="mb-1">An order has been placed.</h6>
                                                    <p class="text-muted mb-0">Wed, 15 Dec 2021 - 05:34PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!--end accordion-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    @push('scripts')
    @endpush

    @push('styles')
    @endpush
@endsection
