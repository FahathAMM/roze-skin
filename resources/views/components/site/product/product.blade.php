@props([
    'products' => [],
])



{{-- <div class="tf-list-layout wrapper-shop" id="listLayout">
    @foreach ($products as $product)
        @php
            $viewSingleProduct = url('product/' . $product->sku);
        @endphp

        <div class="card-product style-list" data-availability="Out of stock" data-brand="LV">
            <div class="card-product-wrapper">
                <a href="{{ $viewSingleProduct }}" class="product-img">
                    <img class="lazyload img-product" data-src="{{ $product?->mainImage?->image }}"
                        src="{{ $product?->mainImage?->image }}" alt="image-product">
                    <img class="lazyload img-hover" data-src="{{ $product?->mainImage?->image }}"
                        src="{{ $product?->mainImage?->image }}" alt="image-product">
                </a>
                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
            </div>
            <div class="card-product-info">
                <a href="{{ $viewSingleProduct }}" class="title link">{{ $product?->name ?? '' }}</a>
                <div class="price">
                    <span class="old-price">
                        {{ setting('currency') . ' ' . $product?->simple_sale_price }}
                    </span>
                    <span class="current-price">
                        {{ setting('currency') . ' ' . $product?->simple_original_price }}
                    </span>
                </div>

                <p class="description text-secondary text-line-clamp-2">
                    {{ $product?->short_desc ?? '' }}
                </p>
                <div class="variant-wrap-list">
                    <div class="size-box list-product-btn">
                        <span class="size-item box-icon">Hot</span>
                    </div>
                    <div class="list-product-btn">
                        <a onclick="addCart({{ $product?->id }}, {{ loggedCustomerId() }})" class="btn-main-product">
                            Add To cart
                        </a>
                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                            <span class="icon icon-heart"></span>
                            <span class="tooltip">Wishlist</span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                            class="box-icon compare btn-icon-action">
                            <span class="icon icon-gitDiff"></span>
                            <span class="tooltip">Compare</span>
                        </a>
                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                            <span class="icon icon-eye"></span>
                            <span class="tooltip">Quick View</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div> --}}

<div class="tf-grid-layout wrapper-shop tf-col-6" id="gridLayout">
    @foreach ($products as $product)
        @php
            $viewSingleProduct = url('product/' . $product->sku);
        @endphp
        <div class="card-product grid" data-availability="In stock" data-brand="nike">
            <div class="card-product-wrapper">
                <a href="{{ $viewSingleProduct }}" class="product-img">
                    <img class="lazyload img-product" data-src="{{ $product?->mainImage?->image }}"
                        src="{{ $product?->mainImage?->image }}" alt="image-product">
                    <img class="lazyload img-hover" data-src="{{ $product?->mainImage?->image }}"
                        src="{{ $product?->mainImage?->image }}" alt="image-product">
                </a>
                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                <div class="marquee-product bg-main">
                    <div class="marquee-wrapper">
                        <div class="initial-child-container">
                            @for ($i = 1; $i < 6; $i++)
                                <div class="marquee-child-item">
                                    <p class="font-2 text-btn-uppercase fw-6 text-white">
                                        Hot Sale 25% OFF
                                    </p>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="list-product-btn">
                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                        <span class="icon icon-heart"></span>
                        <span class="tooltip">Wishlist</span>
                    </a>
                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                        class="box-icon compare btn-icon-action">
                        <span class="icon icon-gitDiff"></span>
                        <span class="tooltip">Compare</span>
                    </a>
                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                        <span class="icon icon-eye"></span>
                        <span class="tooltip">Quick View</span>
                    </a>
                </div>
                <div class="list-btn-main">
                    <a href="#shoppingCart" onclick="addCart({{ $product?->id }})" data-bs-toggle="modal"
                        class="btn-main-product">
                        Add To cart
                    </a>

                    {{-- <a onclick="addCart({{ $product?->id }})" href="#shoppingCart" data-bs-toggle="modal" id="sbtBtn"
                        class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 btn-add-to-cart"><span>
                            Add to cart
                        </span>
                    </a> --}}

                </div>
            </div>
            <div class="card-product-info">
                <a href="{{ $viewSingleProduct }}" class="title link">Polarized sunglasses</a>
                <div class="price">
                    <span class="old-price">
                        {{ setting('currency') . ' ' . $product?->simple_sale_price }}
                    </span>
                    <span class="current-price">
                        {{ setting('currency') . ' ' . $product?->simple_original_price }}
                    </span>
                </div>
            </div>
        </div>
    @endforeach
    <ul class="wg-pagination justify-content-center">
        <li><a href="#" class="pagination-item text-button">1</a></li>
        <li class="active">
            <div class="pagination-item text-button">2</div>
        </li>
        <li><a href="#" class="pagination-item text-button">3</a></li>
        <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a>
        </li>
    </ul>
</div>

@push('scripts')
    <script>
        async function addCart(productId) {

            sLoading('sbtBtn')

            if (productId == '') {
                // alertNotify('Please enter order number', 'error')
                return;
            }

            let endpoint = "{{ url('shopping/cart/add') }}/" + productId;

            let payload = {
                productId: productId,
                productPrice: getValueByClass('product-price'),
                productQty: getValueByClass('quantity-product'),
            }

            const response = await fetchJsonRequest(endpoint, payload, 'POST');

            if (response.status) {

                alertNotifySite(response.message, 'success')
                // alertNotifySite('Updated product', 'success')


            } else {
                if (response.record.status == 2) {
                    window.location.href = "{{ url('customer/login') }}";
                }
            }

            eLoading('sbtBtn', 'ADD TO CART')
        }
    </script>
@endpush
