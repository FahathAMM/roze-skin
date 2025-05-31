@extends('layout.app-site')
@section('title', 'Product')

@section('content')
    <style>
        .content-display ol li {
            list-style-type: decimal !important;
            margin-left: 20px !important;
        }

        .content-display ul li {
            list-style-type: disc !important;
            margin-left: 20px !important;
        }

        ol,
        ul {
            list-style: initial;
            /* Ensures default bullet/number styling */
            padding-left: 20px;
            /* Adds proper spacing for lists */
        }

        ol {
            list-style-type: decimal;
            /* Forces numbers */
        }

        ul {
            list-style-type: disc;
            /* Forces bullets */
        }

        ul,
        .content-display li {
            list-style: auto;
        }

        @media (min-width: 992px) {
            .tf-table-page-cart td {
                padding: 5px 20px;
            }
        }

        figure .ck-widget__type-around {
            /* figure .ck .ck-reset_all .ck-widget__type-around { */
            display: none !important;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons5.min.css') }}">

    @php
        $breadcrumbs = [
            ['label' => 'Product', 'url' => url('product')],
            [
                'label' => $product?->category?->name ?? '',
                'url' => url('product-by-category/' . $product?->category?->slug ?? ''),
            ],
            ['label' => $product->name, 'url' => '#', 'is_current' => true], // Mark the current page
        ];

        $productInfo = [
            'sku' => '53453412',
            'vendor' => 'Modave',
            'availability' => 'Instock',
            'estimated_delivery' => [
                'international' => '12-26 days',
                'us' => '3-6 days',
            ],
            'return_days' => 45,
            'store' => [
                'name' => 'Fashion Modave',
                'pickup' => 'Pickup available. Usually ready in 24 hours',
                'address1' => '766 Rosalinda Forges Suite 044,',
                'address2' => 'Gracielahaven, Oregon',
            ],
            'categories' => ['Clothes', 'Women', 'T-shirt'],
            'extra_links' => [
                ['icon' => 'icon-shipping', 'label' => 'Delivery & Return', 'target' => '#delivery_return'],
                ['icon' => 'icon-question', 'label' => 'Ask A Question', 'target' => '#ask_question'],
                ['icon' => 'icon-share', 'label' => 'Share', 'target' => '#share_social'],
            ],
            'payment_images' => ['img-1.png', 'img-2.png', 'img-3.png', 'img-4.png', 'img-5.png', 'img-6.png'],
        ];
    @endphp

    <!-- breadcrumb -->
    <div class="tf-breadcrumb">
        <div class="container">
            <div class="tf-breadcrumb-wrap">
                <div class="tf-breadcrumb-list">
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if (isset($breadcrumb['is_current']) && $breadcrumb['is_current'])
                            <span class="text text-caption-1">{{ $breadcrumb['label'] }}</span>
                        @else
                            <a href="{{ $breadcrumb['url'] }}" class="text text-caption-1">{{ $breadcrumb['label'] }}</a>
                            <i class="icon icon-arrRight"></i>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <x-site.component.inquiry />


    <!-- /breadcrumb -->

    <!-- tf-add-cart-success -->
    <div class="tf-add-cart-success">
        <div class="tf-add-cart-heading">
            <h5>Shopping Cart</h5>
            <i class="icon icon-close tf-add-cart-close"></i>
        </div>
        <div class="tf-add-cart-product">
            <div class="image">
                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('site/images/products/womens/women-3.jpg') }}"
                    alt="" src="{{ asset('site/images/products/womens/women-3.jpg') }}">
            </div>
            <div class="content">
                <div class="text-title">
                    <a class="link" href="product-detail.html">Biker-style leggings</a>
                </div>
                <div class="text-caption-1 text-secondary-2">Green, XS, Cotton</div>
                <div class="text-title">$68.00</div>
            </div>
        </div>
        <a href="shopping-cart.html" class="tf-btn w-100 btn-fill radius-4">
            <span class="text text-btn-uppercase">
                View cart
            </span>
        </a>
    </div>
    <!-- /tf-add-cart-success -->

    <!-- Product_Main -->
    <section class="flat-spacing">
        <div class="tf-main-product section-image-zoom">
            <div class="container">

                <div class="row">
                    <!-- Product default -->
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap sticky-top">
                            <div class="thumbs-slider">
                                <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
                                    data-direction="vertical">
                                    <div class="swiper-wrapper stagger-wrap">

                                        @foreach ($product->gallery as $img)
                                            <div class="swiper-slide stagger-item" data-color="gray">
                                                <div class="item">
                                                    <img class="lazyload" data-src="{{ $img->image }}"
                                                        src="{{ $img->image }}" alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started"
                                    style="background:#FAFAFA;border-radius: 10px;border: 1px solid #ddd;">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->gallery as $img)
                                            <div class="swiper-slide" data-color="gray">
                                                <a href="{{ $img->image }}" target="_blank" class="item"
                                                    data-pswp-width="600px" data-pswp-height="800px">
                                                    <img class="tf-image-zoom lazyload" data-zoom="{{ $img->image }}"
                                                        data-src="{{ $img->image }}" src="{{ $img->image }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-list other-image-zoom">
                                <div class="tf-product-info-heading">
                                    <div class="tf-product-info-name">
                                        <div class="text text-btn-uppercase">{{ $product->category->name ?? '' }}</div>
                                        <h3 class="name">{{ $product->name ?? '' }}</h3>
                                        <div class="sub">
                                            <div class="tf-product-info-rate">
                                                <div class="list-star">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="text text-caption-1">(134 reviews)</div>
                                            </div>
                                            <div class="tf-product-info-sold">
                                                <i class="icon icon-lightning"></i>
                                                <div class="text text-caption-1">18&nbsp;sold in last&nbsp;32&nbsp;hours
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- simple_original_price  simple_sale_price --}}
                                    <div class="tf-product-info-desc">
                                        <div class="tf-product-info-price">
                                            <h5 class="price-on-sale font-2">
                                                {{ currency() . ' ' . $product->simple_original_price }}
                                            </h5>
                                            <div class="compare-at-price font-2">
                                                {{ currency() . ' ' . $product->simple_sale_price }}
                                            </div>
                                            <div class="badges-on-sale text-btn-uppercase">
                                                -25%
                                            </div>
                                        </div>
                                        <p>{!! $product->description ?? '' !!}</p>
                                        <div class="tf-product-info-liveview">
                                            <i class="icon icon-eye"></i>
                                            <p class="text-caption-1"><span class="liveview-count">28</span> people are
                                                viewing this right now</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-product-info-choose-option">
                                    <div class="tf-product-info-quantity">
                                        <div class="title mb_12">Quantity:</div>
                                        <div class="wg-quantity">
                                            <span class="btn-quantity btn-decrease">-</span>
                                            <input class="quantity-product" type="text" name="qty"
                                                value="1">
                                            <input class="product-price" type="hidden" name="price"
                                                value="{{ $product->simple_sale_price }}">

                                            <span class="btn-quantity btn-increase">+</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="tf-product-info-by-btn mb_10">
                                            <a onclick="addCart({{ $product?->id }})" href="#shoppingCart"
                                                data-bs-toggle="modal" id="sbtBtn"
                                                class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 btn-add-to-cart"><span>
                                                    Add to cart
                                                </span>
                                                {{-- <span class="tf-qty-price total-price">$79.99</span> --}}
                                            </a>
                                            {{-- <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon hover-tooltip compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip text-caption-2">Compare</span>
                                            </a> --}}
                                            <a href="javascript:void(0);"
                                                class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip text-caption-2">Wishlist</span>
                                            </a>
                                        </div>
                                        <a href="{{ url('shopping/card') }}" class="btn-style-3 text-btn-uppercase">View
                                            Cart</a>
                                    </div>

                                    <div class="tf-product-info-help">
                                        <div class="tf-product-info-extra-link">
                                            @foreach ($productInfo['extra_links'] as $link)
                                                <a href="{{ $link['target'] }}" data-bs-toggle="modal"
                                                    class="tf-product-extra-icon">
                                                    <div class="icon">
                                                        <i class="{{ $link['icon'] }}"></i>
                                                    </div>
                                                    <p class="text-caption-1">{{ $link['label'] }}</p>
                                                </a>
                                            @endforeach
                                        </div>

                                        {{-- <div class="dropdown">
                                            <div class="dropdown-title ">
                                                <div class="tf-product-info-view link">
                                                    <div class="icon"><i class="icon-map-pin"></i></div>
                                                    <span>View Store Information</span>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div class="dropdown-content">
                                                    <div class="dropdown-content-heading">
                                                        <h5>Store Location</h5>
                                                        <i class="icon icon-close"></i>
                                                    </div>
                                                    <div class="line-bt"></div>
                                                    <div>
                                                        <h6>{{ $productInfo['store']['name'] }}</h6>
                                                        <p>{{ $productInfo['store']['pickup'] }}</p>
                                                    </div>
                                                    <div>
                                                        <p>{{ $productInfo['store']['address1'] }}</p>
                                                        <p>{{ $productInfo['store']['address2'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <ul class="tf-product-info-sku">
                                        <li>
                                            <p class="text-caption-1">SKU:</p>
                                            <p class="text-caption-1 text-1">{{ $productInfo['sku'] }}</p>
                                        </li>
                                        <li>
                                            <p class="text-caption-1">Vendor:</p>
                                            <p class="text-caption-1 text-1">{{ $productInfo['vendor'] }}</p>
                                        </li>
                                        <li>
                                            <p class="text-caption-1">Available:</p>
                                            <p class="text-caption-1 text-1">{{ $productInfo['availability'] }}</p>
                                        </li>
                                        <li>
                                            <p class="text-caption-1">Categories:</p>
                                            <p class="text-caption-1">
                                                @foreach ($productInfo['categories'] as $category)
                                                    <a href="#"
                                                        class="text-1 link">{{ $category }}</a>{{ !$loop->last ? ',' : '' }}
                                                @endforeach
                                            </p>
                                        </li>
                                    </ul>

                                    <div class="tf-product-info-guranteed">
                                        <div class="text-title">Guaranteed safe checkout:</div>
                                        <div class="tf-payment">
                                            @foreach ($productInfo['payment_images'] as $img)
                                                <a href="#"><img src="{{ asset('site/images/payment/' . $img) }}"
                                                        alt=""></a>
                                            @endforeach
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
    <!-- /Product_Main -->

    <!-- Product_Description_Tabs -->
    <section class="mb-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget-tabs style-1">
                        <ul class="widget-menu-tab">
                            <li class="item-title active">
                                <span class="inner">Description</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Specifications</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Download</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Videos</span>
                            </li>
                        </ul>
                        <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                                <div class="tab-description">
                                    {!! $product->short_desc ?? '' !!}
                                </div>
                            </div>
                            <div class="widget-content-inner">
                                <div class="tab-reviews write-cancel-review-wrap">
                                    <div class="widwget-content-inner">
                                        <table class="tab-sizeguide-table table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Attribute</th>
                                                    <th>Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($product->attributes as $item)
                                                    <tr>
                                                        <td width="250">{{ $item->key }}</td>
                                                        <td width="750">{{ $item->value }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content-inner d-flex justify-content-center">
                                <div class="w-100 w-sm-100 w-md-75 w-lg-100 w-xl-50 w-xxl-50">
                                    <x-site.show.download :files="$product->files" />
                                </div>
                            </div>

                            <div class="widget-content-inner">
                                {{-- <x-site.show.videos :videos="$product->videos" /> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @push('scripts')
        <script>
            $('document').ready(function() {
                totalPriceVariant();
            });

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

                    alertNotify(response.message, 'success')

                } else {
                    if (response.record.status == 2) {
                        window.location.href = "{{ url('customer/login') }}";
                    }
                }

                eLoading('sbtBtn', 'ADD TO CART')
            }

            var totalPriceVariant = function() {
                $(".tf-product-info-list,.tf-cart-item").each(function() {
                    var productItem = $(this);
                    var basePrice =
                        parseFloat(
                            productItem.find(".price-on-sale").data("base-price")
                        ) ||
                        parseFloat(
                            productItem.find(".price-on-sale").text().replace("$", "")
                        );
                    var quantityInput = productItem.find(".quantity-product");

                    productItem.find(".btn-increase").on("click", function() {
                        var currentQuantity = parseInt(quantityInput.val());
                        quantityInput.val(currentQuantity + 1);
                        updateTotalPrice(null, productItem);
                    });

                    productItem.find(".btn-decrease").on("click", function() {
                        var currentQuantity = parseInt(quantityInput.val());
                        if (currentQuantity > 1) {
                            quantityInput.val(currentQuantity - 1);
                            updateTotalPrice(null, productItem);
                        }
                    });

                    function updateTotalPrice(price, scope) {
                        var currentPrice =
                            price ||
                            parseFloat(
                                scope.find(".price-on-sale").text().replace("$", "")
                            );
                        var quantity = parseInt(scope.find(".quantity-product").val());
                        var totalPrice = currentPrice * quantity;
                        scope.find(".total-price").text("$" + totalPrice.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,
                            ","));
                    }
                });
            };
        </script>
    @endpush

@endsection
