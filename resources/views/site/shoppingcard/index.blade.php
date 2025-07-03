@extends('layout.app-site')
@section('title', 'Product')
@section('content')
    <x-site.component.page-title title="Cart" :breadcrumbs="[['label' => 'Shop', 'url' => route('product.index')], ['label' => 'Cart']]" />

    @php
        $currency = currency();
    @endphp

    <section class="flat-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    {{-- <div class="tf-cart-sold">
                        <div class="notification-sold bg-surface">
                            <img class="icon" src="https://themesflat.co/html/modave/images/logo/icon-fire.png"
                                alt="img">
                            <div class="count-text">Your cart will expire in <div class="js-countdown time-count"
                                    data-timer="600" data-labels=":,:,:,">
                                    <div aria-hidden="true" class="countdown__timer"><span class="countdown__item"
                                            style="display: none;"><span
                                                class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span
                                                class="countdown__label">:</span></span><span class="countdown__item"
                                            style="display: none;"><span
                                                class="countdown__value countdown__value--1 js-countdown__value--1">00</span><span
                                                class="countdown__label">:</span></span><span class="countdown__item"><span
                                                class="countdown__value countdown__value--2 js-countdown__value--2">06</span><span
                                                class="countdown__label">:</span></span><span class="countdown__item"><span
                                                class="countdown__value countdown__value--3 js-countdown__value--3">41</span><span
                                                class="countdown__label"></span></span></div>
                                </div> minutes! Please checkout now before your items sell out!</div>
                        </div>
                        <div class="notification-progress">
                            <div class="text">Buy <span class="fw-semibold text-primary">$70.00</span> more to get <span
                                    class="fw-semibold">Freeship</span></div>
                            <div class="progress-cart">
                                <div class="value" style="width: 50%;" data-progress="50">
                                    <span class="round"></span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <form>
                        <table class="tf-table-page-cart">
                            <thead>
                                <tr>
                                    <th>Img</th>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cartItems as $item)
                                    <tr class="tf-cart-item file-delete">
                                        <td style=" max-width: 100px; ">
                                            <a href="{{ url('product/' . $item->product->sku) }}" class="img-box">
                                                <img src="{{ $item?->product?->mainImage?->image }}" alt="product"
                                                    style=" width: 100%; height: 100%; object-fit: cover;">
                                            </a>
                                        </td>
                                        <td>
                                            <div class="cart-info">
                                                <a href="{{ url('product/' . $item->product->sku) }}"
                                                    class="cart-title link">
                                                    {{ $item?->product?->name ?? '' }}
                                                </a>
                                            </div>
                                        </td>
                                        <td data-cart-title="Price" class="tf-cart-item_price text-center">
                                            <div class="cart-price text-button price-on-sale">
                                                {{-- $60.00 --}}
                                                {{ $currency . ' ' . $item->price }}
                                            </div>
                                        </td>
                                        <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                            <div class="wg-quantity mx-md-auto">
                                                <span class="btn-quantity btn-decrease">-</span>
                                                <input type="text" class="quantity-product" name="number"
                                                    value="{{ $item->quantity }}">

                                                <input type="hidden" class="cart-id" name="number"
                                                    value="{{ $item->id }}">

                                                <input type="hidden" class="product-id" name="number"
                                                    value="{{ $item->product->id }}">
                                                <span class="btn-quantity btn-increase">+</span>
                                            </div>
                                        </td>
                                        <td data-cart-title="Total" class="tf-cart-item_total text-center">
                                            <div class="cart-total text-button total-price">
                                                {{ $currency . ' ' . number_format($item->quantity * $item->price, 2) }}
                                            </div>
                                        </td>
                                        <td data-cart-title="Remove" class="remove-cart">
                                            <span class="remove icon icon-close"></span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="fl-sidebar-cart" id="cart-summary-area">


                        <div id="summary-loader"
                            style="display: none; position: absolute; top: 0; left: 0;
         right: 0; bottom: 0; background: rgba(255,255,255,0.8);
          align-items: center; justify-content: center; z-index: 10;">
                            {{-- <div>Loading...</div> <!-- or use a spinner GIF here --> --}}
                            <!-- <img src="/images/spinner.gif" width="40" alt="Loading..."> -->
                        </div>

                        <div class="box-order bg-surface">
                            <h5 class="title">Order Summary</h5>
                            <div class="subtotal text-button d-flex justify-content-between align-items-center">
                                <span>Subtotal</span>
                                <span class="total">
                                    {{ $currency . ' ' . number_format($total, 2) }}
                                </span>
                            </div>
                            <div class="ship">
                                <span class="text-button">Shipping</span>
                                <div class="flex-grow-1">
                                    <fieldset class="ship-item">
                                        <input type="radio" name="ship-check" class="tf-check-rounded" id="free"
                                            checked="">
                                        <label for="free">
                                            <span>Free Shipping</span>
                                            <span class="price">
                                                {{ $currency . ' ' . number_format(0, 2) }}
                                            </span>
                                        </label>
                                    </fieldset>
                                </div>
                            </div>
                            <h5 class="total-order d-flex justify-content-between align-items-center">
                                <span>Total</span>
                                <span class="total">
                                    {{ $currency . ' ' . number_format($total, 2) }}
                                </span>
                            </h5>
                            <div class="box-progress-checkout">
                                <fieldset class="check-agree">
                                    <input type="checkbox" id="check-agree" class="tf-check-rounded">
                                    <label for="check-agree">
                                        I agree with the <a href="term-of-use.html">terms and conditions</a>
                                    </label>
                                </fieldset>
                                <a href="{{ url('shopping/checkout') }}" class="tf-btn btn-reset">Process To Checkout</a>
                                <p class="text-button text-center">Or continue shopping</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @push('scripts')
        <script>
            var totalPriceVariant = function() {
                $(".tf-product-info-list,.tf-cart-item").each(function() {
                    var productItem = $(this);

                    var basePrice = parseFloat(productItem.find(".price-on-sale").data("base-price")) || parseFloat(
                        productItem.find(".price-on-sale").text().replace("AED", ""));

                    var quantityInput = productItem.find(".quantity-product");
                    var cartId = productItem.find(".cart-id").val();
                    var productId = productItem.find(".product-id").val();


                    productItem.find(".btn-increase").on("click", function() {
                        $('#summary-loader').show();

                        var currentQuantity = parseInt(quantityInput.val());
                        quantityInput.val(currentQuantity + 1);
                        updateTotalPrice(null, productItem, productId);
                    });

                    productItem.find(".btn-decrease").on("click", function() {
                        var currentQuantity = parseInt(quantityInput.val());
                        if (currentQuantity > 1) {
                            $('#summary-loader').show();
                            quantityInput.val(currentQuantity - 1);
                            updateTotalPrice(null, productItem, productId);
                        }
                    });

                    function updateTotalPrice(price, scope, productId = null) {
                        var currentPrice =
                            price ||
                            parseFloat(
                                scope.find(".price-on-sale").text().replace("AED", "")
                            );
                        var quantity = parseInt(scope.find(".quantity-product").val());
                        var totalPrice = currentPrice * quantity;
                        scope.find(".total-price").text("AED " + totalPrice.toFixed(2).replace(
                            /\B(?=(\d{3})+(?!\d))/g, ","));

                        addCart(productId, quantity)
                    }
                });
            };

            var deleteFile = function() {
                $(".remove").on("click", async function(e) {
                    e.preventDefault();
                    var confirmed = confirm("Are you sure you want to delete this file?");
                    if (confirmed) {

                        let productId = $(this).closest(".file-delete").find(".product-id").val();
                        let isDeleted = await removeCart(productId);

                        if (isDeleted) {
                            $(this).closest(".file-delete").remove();
                        }
                    }
                });
            };


            async function addCart(productId, quantity) {

                if (productId == '') {
                    return;
                }

                let endpoint = "{{ url('shopping/cart/add') }}/" + productId;

                let payload = {
                    productId: productId,
                    productQty: quantity,
                }

                const response = await fetchJsonRequest(endpoint, payload, 'POST');

                if (response.status) {
                    alertNotifySite('Updated product', 'success')
                    refreshContent("{{ url('shopping/card') }}", 'cart-summary-area')

                    setTimeout(() => {
                        $('#summary-loader').hide();
                    }, 1000);

                }
            }

            async function removeCart(productId) {
                if (productId == '') {
                    return;
                }

                let endpoint = "{{ url('shopping/cart/remove') }}/" + productId;

                let payload = {
                    productId: productId,
                }

                const response = await fetchJsonRequest(endpoint, payload, 'DELETE');

                if (response.status) {
                    alertNotifySite(response.message, 'success')
                    refreshContent("{{ url('shopping/card') }}", 'cart-summary-area')

                    return true;
                } else {
                    return false
                }
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


            totalPriceVariant();
            deleteFile();
        </script>
    @endpush

    <style>
        .text-button {
            font-size: 14px;
        }
    </style>

@endsection
