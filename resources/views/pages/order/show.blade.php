@extends('layout.app')
@section('title', $title)
@section('content')

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
                <div class="col-xl-9">

                    {{-- <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order #VL2667</h5>
                                <div class="flex-shrink-0">
                                    <a href="apps-invoices-details.html" class="btn btn-success btn-sm"><i
                                            class="ri-download-2-fill align-middle me-1"></i> Invoice</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-nowrap align-middle table-borderless mb-0">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Item Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Rating</th>
                                            <th scope="col" class="text-end">Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                        <img src="assets/images/products/img-8.png" alt=""
                                                            class="img-fluid d-block">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-15"><a href="apps-ecommerce-product-details.html"
                                                                class="link-primary">Sweatshirt for Men (Pink)</a></h5>
                                                        <p class="text-muted mb-0">Color: <span
                                                                class="fw-medium">Pink</span></p>
                                                        <p class="text-muted mb-0">Size: <span class="fw-medium">M</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$119.99</td>
                                            <td>02</td>
                                            <td>
                                                <div class="text-warning fs-15">
                                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-half-fill"></i>
                                                </div>
                                            </td>
                                            <td class="fw-medium text-end">
                                                $239.98
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                        <img src="assets/images/products/img-7.png" alt=""
                                                            class="img-fluid d-block">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-15"><a href="apps-ecommerce-product-details.html"
                                                                class="link-primary">Noise NoiseFit Endure Smart Watch</a>
                                                        </h5>
                                                        <p class="text-muted mb-0">Color: <span
                                                                class="fw-medium">Black</span></p>
                                                        <p class="text-muted mb-0">Size: <span
                                                                class="fw-medium">32.5mm</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$94.99</td>
                                            <td>01</td>
                                            <td>
                                                <div class="text-warning fs-15">
                                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-half-fill"></i>
                                                </div>
                                            </td>
                                            <td class="fw-medium text-end">
                                                $94.99
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                        <img src="assets/images/products/img-3.png" alt=""
                                                            class="img-fluid d-block">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-15"><a href="apps-ecommerce-product-details.html"
                                                                class="link-primary">350 ml Glass Grocery Container</a></h5>
                                                        <p class="text-muted mb-0">Color: <span
                                                                class="fw-medium">White</span></p>
                                                        <p class="text-muted mb-0">Size: <span class="fw-medium">350
                                                                ml</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$24.99</td>
                                            <td>01</td>
                                            <td>
                                                <div class="text-warning fs-15">
                                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-half-fill"></i><i class="ri-star-line"></i><i
                                                        class="ri-star-line"></i>
                                                </div>
                                            </td>
                                            <td class="fw-medium text-end">
                                                $24.99
                                            </td>
                                        </tr>
                                        <tr class="border-top border-top-dashed">
                                            <td colspan="3"></td>
                                            <td colspan="2" class="fw-medium p-0">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Sub Total :</td>
                                                            <td class="text-end">$359.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Discount <span class="text-muted">(VELZON15)</span> : :</td>
                                                            <td class="text-end">-$53.99</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Charge :</td>
                                                            <td class="text-end">$65.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated Tax :</td>
                                                            <td class="text-end">$44.99</td>
                                                        </tr>
                                                        <tr class="border-top border-top-dashed">
                                                            <th scope="row">Total (USD) :</th>
                                                            <th class="text-end">$415.96</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}


                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order #{{ $order->order_number }}</h5>
                                <div class="flex-shrink-0">
                                    <a href="#" class="btn btn-success btn-sm"><i
                                            class="ri-download-2-fill align-middle me-1"></i> Invoice</a>
                                </div>
                            </div>
                        </div>
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

                    <div class="card">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order Status</h5>
                                <div class="flex-shrink-0 mt-2 mt-sm-0">
                                    <a href="javascript:void(0);" class="btn btn-soft-info btn-sm mt-2 mt-sm-0"><i
                                            class="ri-map-pin-line align-middle me-1"></i> Change Address</a>
                                    <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i
                                            class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Order</a>
                                </div>
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
                                                <div class="accordion-body ms-2 ps-5 pt-0">
                                                    <h6 class="mb-1">An order has been placed.</h6>
                                                    <p class="text-muted">Wed, 15 Dec 2021 - 05:34PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingOne">
                                            <a class="accordion-button p-2 shadow-none collapsed" data-bs-toggle="collapse"
                                                href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-success rounded-circle">
                                                            <i class="ri-shopping-bag-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="fs-15 mb-0 fw-semibold">Order Placed - <span
                                                                class="fw-normal">Wed, 15 Dec 2021</span></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample"
                                            style="">
                                            <div class="accordion-body ms-2 ps-5 pt-0">
                                                <h6 class="mb-1">An order has been placed.</h6>
                                                <p class="text-muted">Wed, 15 Dec 2021 - 05:34PM</p>

                                                <h6 class="mb-1">Seller has processed your order.</h6>
                                                <p class="text-muted mb-0">Thu, 16 Dec 2021 - 5:48AM</p>
                                            </div>
                                        </div>
                                    </div>



                                    {{-- <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingTwo">
                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse"
                                                href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-success rounded-circle">
                                                            <i class="mdi mdi-gift-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="fs-15 mb-1 fw-semibold">Packed - <span
                                                                class="fw-normal">Thu, 16 Dec 2021</span></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
                                            style="">
                                            <div class="accordion-body ms-2 ps-5 pt-0">
                                                <h6 class="mb-1">Your Item has been picked up by courier partner</h6>
                                                <p class="text-muted mb-0">Fri, 17 Dec 2021 - 9:45AM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingThree">
                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse"
                                                href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-success rounded-circle">
                                                            <i class="ri-truck-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="fs-15 mb-1 fw-semibold">Shipping - <span
                                                                class="fw-normal">Thu, 16 Dec 2021</span></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample"
                                            style="">
                                            <div class="accordion-body ms-2 ps-5 pt-0">
                                                <h6 class="fs-14">RQK Logistics - MFDS1400457854</h6>
                                                <h6 class="mb-1">Your item has been shipped.</h6>
                                                <p class="text-muted mb-0">Sat, 18 Dec 2021 - 4.54PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingFour">
                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse"
                                                href="#collapseFour" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-light text-success rounded-circle">
                                                            <i class="ri-takeaway-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="fs-14 mb-0 fw-semibold">Out For Delivery</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingFive">
                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse"
                                                href="#collapseFile" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-light text-success rounded-circle">
                                                            <i class="mdi mdi-package-variant"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="fs-14 mb-0 fw-semibold">Delivered</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> --}}


                                </div>
                                <!--end accordion-->
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <h5 class="card-title flex-grow-1 mb-0">Customer Details</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0 vstack gap-3">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="fs-14 mb-1">{{ $order->customer->first_name }}
                                                {{ $order->customer->last_name }}</h6>
                                            <p class="text-muted mb-0">Customer</p>
                                        </div>
                                    </div>
                                </li>
                                <li><i
                                        class="ri-mail-line me-2 align-middle text-muted fs-16"></i>{{ $order->customer->email }}
                                </li>
                                <li><i
                                        class="ri-phone-line me-2 align-middle text-muted fs-16"></i>{{ $order->customer->mobile }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Billing Address</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                                <li class="fw-medium fs-14">{{ $order->customer->name }}</li>
                                <li>{{ $order->customer->mobile }}</li>
                                <li>{{ $order->customer->address }}</li>
                                <li>{{ $order->customer->city }}</li>
                                <li>{{ $order->customer->country }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Payment Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0">#{{ $order->id }}</h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0">{{ strtoupper($order->payment_method) }}</h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0">{{ $order->customer->first_name }}
                                        {{ $order->customer->last_name }}</h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0">${{ number_format($order->total_price, 2) }}</h6>
                                </div>
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
