@extends('layout.app-site')
@section('title', 'Product')
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons5.min.css') }}">

    <x-site.component.page-title title="Cart" :breadcrumbs="[['label' => 'Shop', 'url' => route('product.index')], ['label' => 'Cart']]" />

    @php
        $currency = currency();
        // $currency = '';
    @endphp

    <form id="checkout-form" action="{{ route('checkout.store') }}" method="post" class="info-box">
        @csrf
        <section>
            <div class="container">

                <div class="row">

                    <div class="col-xl-6">
                        <div class="flat-spacing tf-page-checkout">

                            <div class="wrap">
                                <h5 class="title">Information</h5>
                                <div class="info-box">

                                    <fieldset class="grid-2">
                                        <div>
                                            <input type="text" name="first_name"
                                                value="{{ $customer->first_name ?? '' }}" placeholder="First Name*">
                                            <div class="invalid-feedback d-block invalid-msg"> </div>
                                        </div>
                                        <div>
                                            <input type="text" name="last_name" value="{{ $customer->last_name ?? '' }}"
                                                placeholder="Last Name">
                                        </div>
                                    </fieldset>

                                    <fieldset class="grid-2">
                                        <div>
                                            <input type="text" name="email" value="{{ $customer->email ?? '' }}"
                                                placeholder="Email Address">
                                        </div>
                                        <div>
                                            <input type="text" name="mobile" value="{{ $customer->mobile ?? '' }}"
                                                placeholder="Phone Number*" readonly>
                                            <div class="invalid-feedback d-block invalid-msg"> </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="grid-2">
                                        <input type="text" name="country" value="United Arab Emirates" readonly>
                                        <div class="tf-select">
                                            <select class="text-title" name="city" value="{{ $customer->city ?? '' }}">
                                                <option selected="" value="Choose Emirate">Choose Emirate</option>
                                                <option value="Abu Dhabi">Abu Dhabi</option>
                                                <option value="Dubai">Dubai</option>
                                                <option value="Sharjah">Sharjah</option>
                                                <option value="Ajman">Ajman</option>
                                                <option value="Umm Al Quwain">Umm Al Quwain</option>
                                                <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                <option value="Fujairah">Fujairah</option>
                                            </select>
                                            <div class="invalid-feedback d-block invalid-msg"> </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="grid-2">
                                        <div>
                                            <input type="text" name="address" value="{{ $customer->address ?? '' }}"
                                                placeholder="address,...">
                                            <div class="invalid-feedback d-block invalid-msg"> </div>
                                        </div>
                                        <div>
                                            <input type="text" name="postal_code" placeholder="Postal Code">
                                        </div>
                                    </fieldset>

                                    <textarea name="description" placeholder="Write note..."></textarea>
                                </div>
                            </div>
                            <div class="wrap">
                                <h5 class="title">Choose payment Option:</h5>
                                <div class="form-payment">
                                    <div class="payment-box" id="payment-box">
                                        <div class="payment-item payment-choose-card active">
                                            <label for="credit-card-method" class="payment-header" data-bs-toggle="collapse"
                                                data-bs-target="#credit-card-payment" aria-controls="credit-card-payment">
                                                <input type="radio" name="payment_method" value="card"
                                                    class="tf-check-rounded" id="credit-card-method" checked="">
                                                <span class="text-title">Credit Card</span>
                                            </label>
                                            <div id="credit-card-payment" class="collapse show"
                                                data-bs-parent="#payment-box">
                                                <div class="payment-body">
                                                    <p class="text-secondary">
                                                        Make your payment directly into our bank account. Your order will
                                                        not be shipped until the funds have cleared in our account.
                                                    </p>
                                                    <div class="input-payment-box">
                                                        <input type="text" name="card_name" placeholder="Name On Card*">
                                                        <div class="ip-card">
                                                            <input type="number" name="card_number"
                                                                placeholder="Card Numbers*">
                                                            <div class="list-card">
                                                                <img src="{{ asset('sites/images/payment/img-7.png') }}"
                                                                    width="48" height="16" alt="card">
                                                                <img src="{{ asset('sites/images/payment/img-8.png') }}"
                                                                    width="21" height="16" alt="card">
                                                                <img src="{{ asset('sites/images/payment/img-9.png') }}"
                                                                    width="22" height="16" alt="card">
                                                                <img src="{{ asset('sites/images/payment/img-10.png') }}"
                                                                    width="24" height="16" alt="card">
                                                            </div>
                                                        </div>
                                                        <div class="grid-2">
                                                            <input type="date" name="expiration_date">
                                                            <input type="text" name="cvv" placeholder="CVV*">
                                                        </div>
                                                    </div>
                                                    <div class="check-save">
                                                        <input type="checkbox" class="tf-check" id="check-card"
                                                            checked="">
                                                        <label for="check-card">Save Card Details</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payment-item">
                                            <label for="delivery-method" class="payment-header collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#delivery-payment"
                                                aria-controls="delivery-payment">
                                                <input type="radio" name="payment_method" value="cod"
                                                    class="tf-check-rounded" id="delivery-method">
                                                <span class="text-title">Cash on delivery</span>
                                            </label>
                                            <div id="delivery-payment" class="collapse" data-bs-parent="#payment-box">
                                            </div>
                                        </div>
                                        <div class="payment-item">
                                            <label for="apple-method" class="payment-header collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#apple-payment"
                                                aria-controls="apple-payment">
                                                <input type="radio" name="payment_method" value="tabby"
                                                    class="tf-check-rounded" id="apple-method">
                                                <span class="text-title apple-pay-title">
                                                    <img src="https://rozeskin.com/wp-content/plugins/tabby-checkout/images/logo_green.png"
                                                        style=" width: auto !important;">Tabby</span>
                                            </label>
                                            <div id="apple-payment" class="collapse" data-bs-parent="#payment-box"></div>
                                        </div>
                                    </div>
                                    <button class="tf-btn btn-reset" type="button" id="sbtBtn"
                                        onclick="store()">Payment</button>


                                    {{-- <a onclick="addCart(2)" href="#shoppingCart" data-bs-toggle="modal" id="sbtBtn"
                                        class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 btn-add-to-cart">ADD TO
                                        CART</a> --}}


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1">
                        <div class="line-separation"></div>
                    </div>
                    <div class="col-xl-5">
                        <div class="flat-spacing flat-sidebar-checkout">
                            <div class="sidebar-checkout-content">
                                <h5 class="title">Shopping Cart</h5>
                                <div class="list-product">
                                    @foreach ($cartItems as $item)
                                        <div class="item-product">
                                            <a href="" class="img-product">
                                                <img src="{{ $item?->product?->mainImage?->image ?? '' }}"
                                                    alt="img-product"
                                                    style=" width: 100%; height: 100%; object-fit: cover;">
                                            </a>
                                            <div class="content-box">
                                                <div class="info">
                                                    <a href="" class="name-product link text-title">
                                                        {{ $item?->product?->name ?? '' }}
                                                    </a>
                                                    <div class="variant text-caption-1 text-secondary">
                                                        {{-- <span class="size">{{ $items->size ?? '' }}</span> /
                                                    <span class="color">{{ $items->color ?? '' }}</span> --}}
                                                    </div>
                                                </div>
                                                <div class="total-price text-button">
                                                    <span class="count">{{ $item->quantity ?? '' }}</span>X
                                                    <span class="price">
                                                        {{ number_format($item->price, 2) ?? '' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="sec-total-price">
                                    <div class="top">
                                        <div class="item d-flex align-items-center justify-content-between text-button">
                                            <span>Shipping</span>
                                            <span>Free</span>
                                        </div>
                                        {{-- <div class="item d-flex align-items-center justify-content-between text-button">
                                        <span>Discounts</span>
                                        <span>-$80.00</span>
                                    </div> --}}
                                    </div>
                                    <div class="bottom">
                                        <h5 class="d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="total-price-checkout">
                                                {{ $currency . ' ' . number_format($total, 2) }}
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </form>


    @push('scripts')
        <script>
            const formName = 'checkout-form'

            function store() {
                sLoading('sbtBtn')

                var form = document.getElementById(formName);
                var url = form.getAttribute('action');
                var method = form.getAttribute('method');
                var payload = new FormData(form);

                const options = {
                    // contentType: 'application/json',
                    contentType: 'multipart/form-data',
                    method: 'POST',
                    headers: {
                        dataType: "json",
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    }
                };

                console.log(payload);
                console.log(options);

                sendData(
                    url,
                    payload,
                    options,
                    (response) => {
                        if (response.status) {
                            // $("#contact-form :input").not("#is_active").val("");
                            alertNotifySite(response.message, 'success')
                            associateErrors1([], formName);
                            eLoading('sbtBtn', 'Payment')

                        } else {
                            associateErrors1(response.errors, formName);
                            eLoading('sbtBtn', 'Payment')
                        }
                    },
                    (error) => {
                        console.error('Error:', error);
                        eLoading('sbtBtn', 'Payment')
                    }
                );
            }

            function associateErrors1(errors, formId) {
                let $form = $(`#${formId}`);
                $form.find('fieldset .invalid-msg').text('');
                $form.find('fieldset .frm').removeClass('is-invalid');

                Object.keys(errors).forEach(function(fieldName) {

                    let $group = $form.find('[name="' + fieldName + '"]');
                    $group.addClass('is-invalid');
                    $group.closest('fieldset').find('.invalid-msg').text(errors[fieldName][0]);
                });
            }

            async function addCart(productId) {

                sLoading('sbtBtn')

                if (productId == '') {
                    // alertNotify('Please enter order number', 'error')
                    return;
                }
                return;

                let endpoint = "{{ url('shopping/cart/add') }}/" + productId;

                let payload = {
                    productId: productId,
                    productPrice: getValueByClass('product-price'),
                    productQty: getValueByClass('quantity-product'),
                }

                const response = await fetchJsonRequest(endpoint, payload, 'POST');
                console.log(response);

                if (response.status) {

                    alertNotify(response.message, 'success')

                } else {
                    if (response.record.status == 2) {
                        window.location.href = "{{ url('customer/login') }}";
                    }
                }

                eLoading('sbtBtn', 'ADD TO CART')
            }



            function refreshContent(pageUrl = "", area = "") {

                fetch(pageUrl)
                    .then(response => {
                        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
                        return response.text();
                    })
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');

                        const newContent = doc.getElementById(area)?.innerHTML;

                        if (newContent !== undefined) {
                            document.getElementById(area).innerHTML = newContent;
                        } else {
                            console.error(`Element with ID '${area}' not found in response.`);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching content:', error);
                    });
            }
        </script>
    @endpush

    <style>
        .text-button {
            font-size: 14px;
        }

        .sidebar-checkout-content .item-product .img-product {
            width: 75px;
            height: 55px;
            border-radius: 4px;
            overflow: hidden;
        }
    </style>

@endsection
