@props([
    'order' => $order,
])

@php
    $orderLog = $order->OrderLog->toArray();
    $items = $order->items;

    // Default timeline steps
    $defaultTimelineSteps = [
        'pending' => [
            'title' => 'Pending',
            'datetime' => '',
            'details' => [],
            'status' => 'default',
        ],
        'paid' => [
            'title' => 'Amount Paid',
            'datetime' => '',
            'details' => [],
            'status' => 'default',
        ],
        'process' => [
            'title' => 'Product Packaging',
            'datetime' => '',
            'details' => [],
            'status' => 'default',
        ],
        'shipped' => [
            'title' => 'Product Shipped',
            'datetime' => '',
            'details' => [],
            'status' => 'default',
        ],
        'completed' => [
            'title' => 'Product Delivered',
            'datetime' => '',
            'details' => [],
            'status' => 'default',
        ],
    ];

    // Fill in actual timeline data from logs
    foreach ($orderLog as $log) {
        $status = $log['status'];
        if (isset($defaultTimelineSteps[$status])) {
            $defaultTimelineSteps[$status] = [
                'title' => $defaultTimelineSteps[$status]['title'],
                'datetime' => date('d/m/Y h:ia', strtotime($log['status_date'] ?? now())),
                'details' => [
                    'Courier Service' => 'FedEx World Service Center',
                    'Estimated Delivery Date' => '12/07/2024',
                ],
                'status' => 'success',
            ];
        }
    }

    // Re-index to keep order
    $timelineItems = array_values($defaultTimelineSteps);

@endphp

<div class="my-account-content">
    <div class="account-order-details">
        <div class="wd-form-order">
            <div class="order-head">
                <figure class="img-product">
                    <img src="https://img.freepik.com/free-vector/messenger-concept-illustration_114360-1394.jpg?t=st=1721822981~exp=1721826581~hmac=e63fb6f1ff38c21740ca325d5625c71764a82d2bde33a4088f9f2ce78f771845&w=740"
                        alt="product">
                </figure>
                <div class="content">
                    <div class="badge">{{ $order->status }}</div>
                    <h6 class="mt-8 fw-5">Order #{{ $order->order_number }}</h6>
                </div>
            </div>
            <div class="tf-grid-layout md-col-2 gap-15">
                <div class="item">
                    <div class="text-2 text_black-2">Item</div>
                    <div class="text-2 mt_4 fw-6">Fashion</div>
                </div>
                <div class="item">
                    <div class="text-2 text_black-2">Payment Methods</div>
                    <div class="text-2 mt_4 fw-6">
                        {{ $order->payment_method == 'cod' ? 'Cash on Delivery' : 'Cash on Delivery' }}</div>
                </div>
                <div class="item">
                    <div class="text-2 text_black-2">Start Time</div>
                    <div class="text-2 mt_4 fw-6">{{ date('d M Y H:i', strtotime($order->created_at)) }}</div>
                    {{-- <div class="text-2 mt_4 fw-6">04 September 2024, 13:30:23</div> --}}
                </div>
                <div class="item">
                    <div class="text-2 text_black-2">Address</div>
                    {{-- <div class="text-2 mt_4 fw-6">1234 Fashion Street, Suite 567, New York</div> --}}
                    <div class="text-2 mt_4 fw-6">{{ $order->customer?->address . ',' . $order->customer?->country }}
                    </div>
                </div>
            </div>
            <div class="widget-tabs style-3 widget-order-tab">
                <ul class="widget-menu-tab">
                    <li class="item-title active">
                        <span class="inner">Order History</span>
                    </li>
                    <li class="item-title">
                        <span class="inner">Item Details</span>
                    </li>
                    <li class="item-title">
                        <span class="inner">Courier</span>
                    </li>
                    <li class="item-title">
                        <span class="inner">Receiver</span>
                    </li>
                </ul>
                <div class="widget-content-tab">
                    <div class="widget-content-inner active">
                        <div class="widget-timeline">
                            {{-- <ul class="timeline">
                                @foreach ($timelineItems as $item)
                                    <li>
                                        <div class="timeline-badge {{ $item['status'] }}"></div>
                                        <div class="timeline-box">
                                            <a class="timeline-panel" href="javascript:void(0);">
                                                <div class="text-2 fw-6">{{ $item['title'] }}</div>
                                                <span>{{ $item['datetime'] }}</span>
                                            </a>

                                            @foreach ($item['details'] as $label => $value)
                                                <p><strong>{{ $label }} : </strong>{{ $value }}</p>
                                            @endforeach
                                        </div>
                                    </li>
                                @endforeach
                            </ul> --}}


                            <ul class="timeline">
                                @foreach ($timelineItems as $item)
                                    <li>
                                        <div class="timeline-badge {{ $item['status'] }}"></div>
                                        <div class="timeline-box">
                                            <a class="timeline-panel" href="javascript:void(0);">
                                                <div class="text-2 fw-6">{{ $item['title'] }}</div>
                                                <span>{{ $item['datetime'] }}</span>
                                            </a>
                                            @foreach ($item['details'] as $label => $value)
                                                <p><strong>{{ $label }} : </strong>{{ $value }}</p>
                                            @endforeach
                                        </div>
                                    </li>
                                @endforeach
                            </ul>


                        </div>
                    </div>
                    <div class="widget-content-inner">
                        @php
                            $totalQty = 0;
                        @endphp

                        @foreach ($items as $item)
                            <div class="order-head">
                                <figure class="img-product">
                                    <img src="{{ $item?->product?->mainImage?->image }}" alt="product">
                                </figure>
                                <div class="content">
                                    <div class="text-2 fw-6 fs-14">
                                        {{ $item?->product?->name }}
                                    </div>
                                    <div class="mt_4">
                                        <span class="fw-6">Price :</span>
                                        {{ currency() . ' ' . $item->price }}
                                    </div>
                                    <div class="mt_4"><span class="fw-6">Quantity :</span> {{ $item?->quantity }}
                                    </div>
                                </div>
                            </div>
                            @php
                                $totalQty += $item?->quantity;
                            @endphp
                        @endforeach

                        <ul>
                            <li class="d-flex justify-content-between text-2">
                                <span>Total Quantity</span>
                                <span class="fw-6">{{ $totalQty }}</span>
                            </li>
                            <li class="d-flex justify-content-between text-2">
                                <span>Total Price</span>
                                <span class="fw-6">{{ currency() . ' ' . $order->total_price }}</span>
                            </li>
                            <li class="d-flex justify-content-between text-2 mt_8">
                                <span>Order Total</span>
                                <span class="fw-6">{{ currency() . ' ' . $order->total_price }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-content-inner">
                        <p>Our courier service is dedicated to providing fast, reliable, and secure delivery solutions
                            tailored to meet your needs. Whether you're sending documents, parcels, or larger shipments,
                            our team ensures that your items are handled with the utmost care and delivered on time.
                            With a commitment to customer satisfaction, real-time tracking, and a wide network of
                            routes, we make it easy for you to send and receive packages both locally and
                            internationally. Choose our service for a seamless and efficient delivery experience.</p>
                    </div>
                    <div class="widget-content-inner">
                        <p class="text-2 text-success">Thank you Your order has been received</p>
                        <ul class="mt_20">
                            <li>Order Number : <span class="fw-7">#17493</span></li>
                            <li>Date : <span class="fw-7"> 17/07/2024, 02:34pm</span></li>
                            <li>Total : <span class="fw-7">$18.95</span></li>
                            <li>Payment Methods : <span class="fw-7">Cash on Delivery</span></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
