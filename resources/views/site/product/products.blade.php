@extends('layout.app-site')
@section('title', 'Product')
@section('content')
    <x-site.component.page-title title="Products" :breadcrumbs="[['label' => 'Product', 'url' => route('product.index')], ['label' => 'Products']]" />

    <div id="wrapper">

        <!-- Section product -->
        <section class="flat-spacing">
            <div class="container-full2">
                <div class="tf-shop-control">
                    <div class="tf-control-filter">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="filterShop" class="tf-btn-filter"><span
                                class="icon icon-filter"></span><span class="text">Filters</span></a>
                        <div class="d-none d-lg-flex shop-sale-text">
                            <i class="icon icon-checkCircle"></i>
                            <p class="text-caption-1">Shop sale items only</p>
                        </div>
                    </div>
                    <ul class="tf-control-layout">
                        <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <rect x="7.5" y="3.5" width="12" height="5" rx="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <rect x="7.5" y="11.5" width="12" height="5" rx="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="14" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="6" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="14" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                            <div class="item">
                                <svg class="icon" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-4" data-value-layout="tf-col-4">
                            <div class="item">
                                <svg class="icon" width="30" height="20" viewBox="0 0 30 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-5" data-value-layout="tf-col-5">
                            <div class="item">
                                <svg class="icon" width="38" height="20" viewBox="0 0 38 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="35" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="35" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-6 active" data-value-layout="tf-col-6">
                            <div class="item">
                                <svg class="icon" width="46" height="20" viewBox="0 0 46 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="35" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="43" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="35" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="43" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-7" data-value-layout="tf-col-7">
                            <div class="item">
                                <svg class="icon" width="46" height="20" viewBox="0 0 46 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="35" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="43" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="35" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="43" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                    </ul>
                    <div class="tf-control-sorting">
                        <p class="d-none d-lg-block text-caption-1">Sort by:</p>
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Best selling</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item" data-sort-value="best-selling">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item" data-sort-value="a-z">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item" data-sort-value="z-a">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item" data-sort-value="price-low-high">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item" data-sort-value="price-high-low">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters text-btn-uppercase"
                            style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
                    </div>
                    <div class="tf-list-layout wrapper-shop" id="listLayout">
                        <!-- card product list 2 -->

                        @foreach ($products as $product)
                            <div class="card-product style-list" data-availability="Out of stock" data-brand="LV">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" data-src="{{ $product?->mainImage?->image }}"
                                            src="{{ $product?->mainImage?->image }}" alt="image-product">
                                        <img class="lazyload img-hover" data-src="{{ $product?->mainImage?->image }}"
                                            src="{{ $product?->mainImage?->image }}" alt="image-product">
                                    </a>
                                    <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="title link">{{ $product?->name ?? '' }}</a>

                                    <div class="price">
                                        <span class="old-price">
                                            {{ setting('currency') . ' ' . $product?->simple_sale_price }}
                                        </span>
                                        <span class="current-price">
                                            {{ setting('currency') . ' ' . $product?->simple_original_price }}
                                        </span>
                                    </div>


                                    <p class="description text-secondary text-line-clamp-2">
                                        {{-- The garments labelled as Committed are products that have been produced using
                                        sustainable fibres or processes, reducing their environmental impact. --}}

                                        {{ $product?->short_desc ?? '' }}
                                    </p>
                                    <div class="variant-wrap-list">
                                        {{-- <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange"></span>
                                                <img class="lazyload" data-src="{{ $product?->mainImage?->image }}"
                                                    src="{{ $product?->mainImage?->image }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Orange</span>
                                                <span class="swatch-value bg-orange"></span>
                                                <img class="lazyload" data-src="{{ $product?->mainImage?->image }}"
                                                    src="{{ $product?->mainImage?->image }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Pink</span>
                                                <span class="swatch-value bg-dark-pink"></span>
                                                <img class="lazyload" data-src="{{ $product?->mainImage?->image }}"
                                                    src="{{ $product?->mainImage?->image }}" alt="image-product">
                                            </li>
                                        </ul> --}}
                                        <div class="size-box list-product-btn">
                                            <span class="size-item box-icon">Hot</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">
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
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="tf-grid-layout wrapper-shop tf-col-6" id="gridLayout">
                        @foreach ($products as $product)
                            <div class="card-product grid" data-availability="In stock" data-brand="nike">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
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
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="list-btn-main">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="product-detail.html" class="title link">Polarized sunglasses</a>
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
                </div>
            </div>
        </section>
        <!-- /Section product -->

    </div>

    {{-- resources\views\components\layout\include\shoppingCard.blade.php --}}


    <!-- Filter -->
    <div class="offcanvas offcanvas-start canvas-filter" id="filterShop">
        <div class="canvas-wrapper">
            <div class="canvas-header">
                <h5>Filters</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </div>
            <div class="canvas-body">
                <div class="widget-facet facet-categories">
                    <h6 class="facet-title">Product Categories</h6>
                    <ul class="facet-content">
                        <li><a href="#" class="categories-item">Bags <span class="count-cate">(112)</span></a>
                        </li>
                        <li><a href="#" class="categories-item">Booking <span class="count-cate">(32)</span>
                            </a></li>
                        <li><a href="#" class="categories-item">Clothing <span class="count-cate">(42)</span></a>
                        </li>
                        <li><a href="#" class="categories-item active">Women <span
                                    class="count-cate">(65)</span></a>
                        </li>
                        <li><a href="#" class="categories-item">Men <span class="count-cate">(13)</span></a>
                        </li>
                        <li><a href="#" class="categories-item">Shoes <span class="count-cate">(52)</span></a>
                        </li>
                        <li><a href="#" class="categories-item">Uncategorized <span
                                    class="count-cate">(14)</span></a>
                        </li>
                    </ul>
                </div>
                <div class="widget-facet facet-price">
                    <h6 class="facet-title">Price</h6>
                    <div class="price-val-range" id="price-value-range" data-min="0" data-max="500"></div>
                    <div class="box-price-product">
                        <div class="box-price-item">
                            <span class="title-price">Min price</span>
                            <div class="price-val" id="price-min-value" data-currency="$"></div>
                        </div>
                        <div class="box-price-item">
                            <span class="title-price">Max price</span>
                            <div class="price-val" id="price-max-value" data-currency="$"></div>
                        </div>
                    </div>
                </div>
                <div class="widget-facet facet-size">
                    <h6 class="facet-title">Size</h6>
                    <div class="facet-size-box size-box">
                        <span class="size-item size-check">XS</span>
                        <span class="size-item size-check">S</span>
                        <span class="size-item size-check">M</span>
                        <span class="size-item size-check">L</span>
                        <span class="size-item size-check">XL</span>
                        <span class="size-item size-check">2XL</span>
                        <span class="size-item size-check">3XL</span>
                        <span class="size-item size-check free-size">Free Size</span>
                    </div>
                </div>
                <div class="widget-facet facet-color">
                    <h6 class="facet-title">Colors</h6>
                    <div class="facet-color-box">
                        <div class="color-item color-check"><span class="color bg-light-pink-2"></span>Pink</div>
                        <div class="color-item color-check"><span class="color bg-red"></span> Red</div>
                        <div class="color-item color-check"><span class="color bg-beige-2"></span>Beige</div>
                        <div class="color-item color-check"><span class="color bg-orange-2"></span>Orange</div>
                        <div class="color-item color-check"><span class="color bg-light-green"></span>Green</div>
                        <div class="color-item color-check"><span class="color bg-main"></span>Black</div>
                        <div class="color-item color-check"><span class="color bg-white line-black"></span>White</div>
                        <div class="color-item color-check"><span class="color bg-purple-3"></span>Purple</div>
                        <div class="color-item color-check"><span class="color bg-grey"></span>Grey</div>
                        <div class="color-item color-check"><span class="color bg-light-blue-5"></span>Light Blue</div>
                        <div class="color-item color-check"><span class="color bg-dark-blue"></span>Dark Blue</div>
                    </div>
                </div>
                <div class="widget-facet facet-fieldset">
                    <h6 class="facet-title">Availability</h6>
                    <div class="box-fieldset-item">
                        <fieldset class="fieldset-item">
                            <input type="radio" name="availability" class="tf-check" id="inStock">
                            <label for="inStock">In stock <span class="count-stock">(32)</span></label>
                        </fieldset>
                        <fieldset class="fieldset-item">
                            <input type="radio" name="availability" class="tf-check" id="outStock">
                            <label for="outStock">Out of stock <span class="count-stock">(2)</span></label>
                        </fieldset>
                    </div>
                </div>
                <div class="widget-facet facet-fieldset">
                    <h6 class="facet-title">Brands</h6>
                    <div class="box-fieldset-item">
                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="nike">
                            <label for="nike">Nike <span class="count-brand">(112)</span></label>
                        </fieldset>
                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="LV">
                            <label for="LV">Louis Vuitton <span class="count-brand">(2)</span></label>
                        </fieldset>
                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="hermes">
                            <label for="hermes">Hermes <span class="count-brand">(42)</span></label>
                        </fieldset>
                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="gucci">
                            <label for="gucci">Gucci <span class="count-brand">(13)</span></label>
                        </fieldset>
                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="zalando">
                            <label for="zalando">Zalando <span class="count-brand">(54)</span></label>
                        </fieldset>
                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="adidas">
                            <label for="adidas">Adidas <span class="count-brand">(93)</span></label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="canvas-bottom">
                <button id="reset-filter" class="tf-btn btn-reset">Reset Filters</button>
            </div>
        </div>
    </div>
    <!-- /Filter -->


    <!-- modalDemo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-fashion-womenswear.jpg"
                                        src="images/demo/home-fashion-womenswear.jpg" alt="home-fashion-womenswear">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span>Trend</span>
                                    </div>
                                </div>
                                <span class="demo-name">Fashion Womenswear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-eleganceNest.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-fashion-eleganceNest.jpg"
                                        src="images/demo/home-fashion-eleganceNest.jpg" alt="home-fashion-eleganceNest">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Fashion EleganceNest</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-main.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-fashion-main.jpg"
                                        src="images/demo/home-fashion-main.jpg" alt="home-fashion-main">
                                    <div class="demo-label">
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Fashion Main</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-trendset.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-trendset.jpg"
                                        src="images/demo/home-fashion-trendset.jpg" alt="home-fashion-trendset">
                                </div>
                                <span class="demo-name">Fashion TrendsetHome</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-vogueLing.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-vogueLiving.jpg"
                                        src="images/demo/home-fashion-vogueLiving.jpg" alt="home-fashion-vogueLiving">
                                </div>
                                <span class="demo-name">Fashion VogueLiving</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-elegantAbode.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-elegantAbode.jpg"
                                        src="images/demo/home-fashion-elegantAbode.jpg" alt="home-fashion-elegantAbode">
                                </div>
                                <span class="demo-name">Fashion ElegantAbode</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-glamDwell.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-fashion-glamDwell.jpg"
                                        src="images/demo/home-fashion-glamDwell.jpg" alt="home-fashion-glamDwell">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Fashion GlamDwell</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-classyCove.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-classycove.jpg"
                                        src="images/demo/home-fashion-classycove.jpg" alt="home-fashion-classyCove">
                                </div>
                                <span class="demo-name">Fashion ClassyCove</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-chicHaven.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-chicHaven.jpg"
                                        src="images/demo/home-fashion-chicHaven.jpg" alt="home-fashion-chicHaven1">
                                </div>
                                <span class="demo-name">Fashion ChicHaven 1</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-chicHaven-02.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-chicHaven2.jpg"
                                        src="images/demo/home-fashion-chicHaven2.jpg" alt="home-fashion-chicHaven2">
                                </div>
                                <span class="demo-name">Fashion ChicHaven 2</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-tiktok.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-tiktok.jpg"
                                        src="images/demo/home-fashion-tiktok.jpg" alt="home-fashion-tiktok">
                                </div>
                                <span class="demo-name">Fashion TikTok</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-luxeLiving.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-luxeLiving.jpg"
                                        src="images/demo/home-fashion-luxeLiving.jpg" alt="home-fashion-luxeLiving">
                                </div>
                                <span class="demo-name">Fashion LuxeLiving</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-modernRetreat.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-fashion-modernRetreat.jpg"
                                        src="images/demo/home-fashion-modernRetreat.jpg" alt="home-fashion-modernRetreat">
                                </div>
                                <span class="demo-name">Fashion ModernRetreat</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-beauty.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-beauty.jpg"
                                        src="images/demo/home-beauty.jpg" alt="home-beauty">
                                </div>
                                <span class="demo-name">Beauty</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-skinCare.jpg"
                                        src="images/demo/home-skinCare.jpg" alt="home-skincare">
                                </div>
                                <span class="demo-name">Skin Care</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-cosmetic.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-cosmetic.jpg"
                                        src="images/demo/home-cosmetic.jpg" alt="home-cosmetic">
                                </div>
                                <span class="demo-name">Cosmetic</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-decor.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-decor.jpg"
                                        src="images/demo/home-decor.jpg" alt="home-decor">
                                </div>
                                <span class="demo-name">Decor</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-furniture.jpg"
                                        src="images/demo/home-furniture.jpg" alt="home-furniture">
                                </div>
                                <span class="demo-name">Furniture</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry-01.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-jewelry.jpg"
                                        src="images/demo/home-jewelry.jpg" alt="home-jewelry-elegantGems">
                                </div>
                                <span class="demo-name">Jewelry ElegantGems</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry-02.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-jewelry2.jpg"
                                        src="images/demo/home-jewelry2.jpg" alt="home-jewelry-glitterGlam">
                                </div>
                                <span class="demo-name">Jewelry GlitterGlam</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-activewear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-activewear.jpg"
                                        src="images/demo/home-activewear.jpg" alt="home-activewear">
                                </div>
                                <span class="demo-name">Activewear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-organic.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-organic.jpg"
                                        src="images/demo/home-organic.jpg" alt="home-organic">
                                </div>
                                <span class="demo-name">Organic</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sock.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-sock.jpg"
                                        src="images/demo/home-sock.jpg" alt="home-sock">
                                </div>
                                <span class="demo-name">Socks</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-camping.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-camping.jpg"
                                        src="images/demo/home-camping.jpg" alt="home-camping">
                                </div>
                                <span class="demo-name">Camping</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-electronic.jpg"
                                        src="images/demo/home-electronic.jpg" alt="home-electronic">
                                </div>
                                <span class="demo-name">Electronic Market</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-store.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-pet-store.jpg"
                                        src="images/demo/home-pet-store.jpg" alt="home-pet-store">
                                </div>
                                <span class="demo-name">Pet Store</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pickleball.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-pickleball.jpg"
                                        src="images/demo/home-pickleball.jpg" alt="home-pickleball">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">PickleBall</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sock-2.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-sock2.jpg"
                                        src="images/demo/home-sock2.jpg" alt="home-sock2">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Socks 2</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-bookstore.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-bookstore.jpg"
                                        src="images/demo/home-bookstore.jpg" alt="home-bookstore">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Bookstore</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-baby.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-baby.jpg"
                                        src="images/demo/home-baby.jpg" alt="home-baby">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Baby</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronics-store.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-electronic-store.jpg"
                                        src="images/demo/home-electronic-store.jpg" alt="home-electronic-store">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Electronics Store</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sneaker.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-sneaker.jpg"
                                        src="images/demo/home-sneaker.jpg" alt="home-sneaker">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Sneaker</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-gaming.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-gaming-accessory.jpg"
                                        src="images/demo/home-gaming-accessory.jpg" alt="home-gaming-accessory">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Gaming Accessory</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /modalDemo -->


    <!-- quickView -->
    <div class="modal fullRight fade modal-quick-view" id="quickView">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="tf-quick-view-image">
                    <div class="wrap-quick-view wrapper-scroll-quickview">
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                            <img class="lazyload" data-src="images/products/womens/women-1.jpg"
                                src="images/products/womens/women-1.jpg" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                            <img class="lazyload" data-src="images/products/womens/women-2.jpg"
                                src="images/products/womens/women-2.jpg" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">
                            <img class="lazyload" data-src="images/products/womens/women-3.jpg"
                                src="images/products/womens/women-3.jpg" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">
                            <img class="lazyload" data-src="images/products/womens/women-4.jpg"
                                src="images/products/womens/women-4.jpg" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">
                            <img class="lazyload" data-src="images/products/womens/women-19.jpg"
                                src="images/products/womens/women-19.jpg" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">
                            <img class="lazyload" data-src="images/products/womens/women-20.jpg"
                                src="images/products/womens/women-20.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="header">
                        <h5 class="title">Quick View</h5>
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <div class="tf-product-info-name">
                                <div class="text text-btn-uppercase">Clothing</div>
                                <h3 class="name">Stretch Strap Top</h3>
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
                                        <div class="text text-caption-1">18 sold in last 32 hours</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-desc">
                                <div class="tf-product-info-price">
                                    <h5 class="price-on-sale font-2">$79.99</h5>
                                    <div class="compare-at-price font-2">$98.99</div>
                                    <div class="badges-on-sale text-btn-uppercase">
                                        -25%
                                    </div>
                                </div>
                                <p>The garments labelled as Committed are products that have been produced using
                                    sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="tf-product-info-liveview">
                                    <i class="icon icon-eye"></i>
                                    <p class="text-caption-1"><span class="liveview-count">28</span> people are viewing
                                        this right now</p>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-info-choose-option">
                            <div class="variant-picker-item">
                                <div class="variant-picker-label mb_12">
                                    Colors:<span class="text-title variant-picker-label-value">Beige</span>
                                </div>
                                <div class="variant-picker-values">
                                    <input id="values-beige1" type="radio" name="color2" checked>
                                    <label
                                        class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview active"
                                        data-slide="0" data-price="79.99" for="values-beige1" data-value="Beige"
                                        data-scroll-quickview="beige">
                                        <span class="btn-checkbox bg-color-beige1"></span>
                                        <span class="tooltip">Beige</span>
                                    </label>
                                    <input id="values-gray1" type="radio" name="color2">
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview"
                                        data-slide="1" data-price="79.99" for="values-gray1" data-value="Gray"
                                        data-scroll-quickview="gray">
                                        <span class="btn-checkbox bg-color-gray"></span>
                                        <span class="tooltip">Gray</span>
                                    </label>
                                    <input id="values-grey1" type="radio" name="color2">
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview"
                                        data-slide="2" data-price="89.99" for="values-grey1" data-value="Grey"
                                        data-scroll-quickview="grey">
                                        <span class="btn-checkbox bg-color-grey"></span>
                                        <span class="tooltip">Grey</span>
                                    </label>
                                </div>
                            </div>
                            <div class="variant-picker-item">
                                <div class="d-flex justify-content-between mb_12">
                                    <div class="variant-picker-label">
                                        Size:<span class="text-title variant-picker-label-value">L</span>
                                    </div>
                                    <a class="size-guide text-title link show-size-guide">Size Guide</a>
                                </div>
                                <div class="variant-picker-values gap12">
                                    <input type="radio" name="size2" id="values-s1">
                                    <label class="style-text size-btn" for="values-s1" data-value="S">
                                        <span class="text-title">S</span>
                                    </label>
                                    <input type="radio" name="size2" id="values-m1">
                                    <label class="style-text size-btn" for="values-m1" data-value="M">
                                        <span class="text-title">M</span>
                                    </label>
                                    <input type="radio" name="size2" id="values-l1" checked>
                                    <label class="style-text size-btn" for="values-l1" data-value="L"
                                        data-price="89.99">
                                        <span class="text-title">L</span>
                                    </label>
                                    <input type="radio" name="size2" id="values-xl1">
                                    <label class="style-text size-btn" for="values-xl1" data-value="XL"
                                        data-price="89.99">
                                        <span class="text-title">XL</span>
                                    </label>
                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="title mb_12">Quantity:</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity btn-decrease">-</span>
                                    <input class="quantity-product" type="text" name="number" value="1">
                                    <span class="btn-quantity btn-increase">+</span>
                                </div>
                            </div>
                            <div>
                                <div class="tf-product-info-by-btn mb_10">
                                    <a class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 show-shopping-cart"><span>Add
                                            to cart -&nbsp;</span><span class="tf-qty-price total-price">$79.99</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                        class="box-icon hover-tooltip compare btn-icon-action show-compare">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip text-caption-2">Compare</span>
                                    </a>
                                    <a href="javascript:void(0);"
                                        class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip text-caption-2">Wishlist</span>
                                    </a>
                                </div>
                                <a href="#" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /quickView -->

    <!-- size-guide -->
    <div class="modal fade modal-size-guide" id="size-guide">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content widget-tabs style-2">
                <div class="header">
                    <ul class="widget-menu-tab">
                        <li class="item-title active">
                            <span class="inner text-button">Size </span>
                        </li>
                        <li class="item-title">
                            <span class="inner text-button">Size Guide</span>
                        </li>
                    </ul>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="widget-content-tab">
                        <div class="widget-content-inner active">
                            <div class="tab-size">
                                <div>
                                    <div class="widget-size mb_16">
                                        <div class="box-title-size">
                                            <div class="title-size">Height</div>
                                            <div class="number-size">
                                                <span class="max-size">100</span>
                                                <span class="text-caption-1 text-secondary">Cm</span>
                                            </div>
                                        </div>
                                        <div class="range-input">
                                            <div class="tow-bar-block">
                                                <div class="progress-size" style="width: 50%;"></div>
                                            </div>
                                            <input type="range" min="0" max="200" value="100"
                                                class="range-max" />
                                        </div>
                                    </div>
                                    <div class="widget-size">
                                        <div class="box-title-size">
                                            <div class="title-size">Weight</div>
                                            <div class="number-size">
                                                <span class="max-size">50</span>
                                                <span class="text-caption-1 text-secondary">Kg</span>
                                            </div>
                                        </div>
                                        <div class="range-input">
                                            <div class="tow-bar-block">
                                                <div class="progress-size" style="width: 50%;"></div>
                                            </div>
                                            <input type="range" min="0" max="100" value="50"
                                                class="range-max" />
                                        </div>
                                    </div>
                                </div>
                                <div class="size-button-wrap choose-option-list">
                                    <div class="size-button-item choose-option-item">
                                        <h5>thin</h5>
                                    </div>
                                    <div class="size-button-item choose-option-item select-option">
                                        <h5>Normal</h5>
                                    </div>
                                    <div class="size-button-item choose-option-item">
                                        <h5>plump</h5>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="suggests-title">Modave suggests for you:</h6>
                                    <div class="suggests-list">
                                        <a href="#" class="suggests-item link text-button">L - shirt</a>
                                        <a href="#" class="suggests-item link text-button">XL - Pant</a>
                                        <a href="#" class="suggests-item link text-button">31 - Jeans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner">
                            <table class="tab-sizeguide-table">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>US</th>
                                        <th>Bust</th>
                                        <th>Waist</th>
                                        <th>Low Hip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>XS</td>
                                        <td>2</td>
                                        <td>32</td>
                                        <td>24 - 25</td>
                                        <td>33 - 34</td>
                                    </tr>
                                    <tr>
                                        <td>S</td>
                                        <td>4</td>
                                        <td>26 - 27</td>
                                        <td>34 - 35</td>
                                        <td>35 - 26</td>
                                    </tr>
                                    <tr>
                                        <td>M</td>
                                        <td>6</td>
                                        <td>28 - 29</td>
                                        <td>36 - 37</td>
                                        <td>38 - 40</td>
                                    </tr>
                                    <tr>
                                        <td>L</td>
                                        <td>8</td>
                                        <td>30 - 31</td>
                                        <td>38 - 29</td>
                                        <td>42 - 44</td>
                                    </tr>
                                    <tr>
                                        <td>XL</td>
                                        <td>10</td>
                                        <td>32 - 33</td>
                                        <td>40 - 41</td>
                                        <td>45 - 47</td>
                                    </tr>
                                    <tr>
                                        <td>XXL</td>
                                        <td>12</td>
                                        <td>34 - 35</td>
                                        <td>42 - 43</td>
                                        <td>48 - 50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /size-guide -->

    <!-- compare -->
    <div class="offcanvas offcanvas-bottom offcanvas-compare" id="compare">
        <div class="offcanvas-content">
            <div class="header">
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </div>
            <div class="wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tf-compare-list list-file-delete">
                                <div class="tf-compare-head">
                                    <h5 class="title">Compare <br> Products</h5>
                                </div>
                                <div class="tf-compare-wrap">
                                    <div class="tf-compare-item file-delete">
                                        <span class="btns-repeat">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5628_27028)">
                                                    <path d="M11.334 1.33301L14.0007 3.99967L11.334 6.66634"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M2 7.99951V6.66618C2 5.95893 2.28095 5.28066 2.78105 4.78056C3.28115 4.28046 3.95942 3.99951 4.66667 3.99951H14"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M4.66667 15.9996L2 13.3329L4.66667 10.6663" stroke="#181818"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M14 9.33301V10.6663C14 11.3736 13.719 12.0519 13.219 12.552C12.7189 13.0521 12.0406 13.333 11.3333 13.333H2"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5628_27028">
                                                        <rect width="16" height="16" fill="white"
                                                            transform="translate(0 0.66626)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="icon-close remove"></span>
                                        <a href="product-detail.html" class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-19.jpg"
                                                src="images/products/womens/women-19.jpg" alt="">
                                        </a>
                                        <div class="content">
                                            <div class="text-title">
                                                <a class="link text-line-clamp-2" href="product-detail.html">V-neck
                                                    cotton T-shirt</a>
                                            </div>
                                            <div class="text-button">$59.99</div>
                                        </div>
                                    </div>
                                    <div class="tf-compare-item file-delete">
                                        <span class="btns-repeat">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5628_27028)">
                                                    <path d="M11.334 1.33301L14.0007 3.99967L11.334 6.66634"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M2 7.99951V6.66618C2 5.95893 2.28095 5.28066 2.78105 4.78056C3.28115 4.28046 3.95942 3.99951 4.66667 3.99951H14"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M4.66667 15.9996L2 13.3329L4.66667 10.6663" stroke="#181818"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M14 9.33301V10.6663C14 11.3736 13.719 12.0519 13.219 12.552C12.7189 13.0521 12.0406 13.333 11.3333 13.333H2"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5628_27028">
                                                        <rect width="16" height="16" fill="white"
                                                            transform="translate(0 0.66626)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="icon-close remove"></span>
                                        <a href="product-detail.html" class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-29.jpg"
                                                src="images/products/womens/women-29.jpg" alt="">
                                        </a>
                                        <div class="content">
                                            <div class="text-title">
                                                <a class="link text-line-clamp-2" href="product-detail.html">Ramie shirt
                                                    with pockets </a>
                                            </div>
                                            <div class="text-button">$72.00</div>
                                        </div>
                                    </div>
                                    <div class="tf-compare-item file-delete">
                                        <span class="btns-repeat">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5628_27028)">
                                                    <path d="M11.334 1.33301L14.0007 3.99967L11.334 6.66634"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M2 7.99951V6.66618C2 5.95893 2.28095 5.28066 2.78105 4.78056C3.28115 4.28046 3.95942 3.99951 4.66667 3.99951H14"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M4.66667 15.9996L2 13.3329L4.66667 10.6663" stroke="#181818"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M14 9.33301V10.6663C14 11.3736 13.719 12.0519 13.219 12.552C12.7189 13.0521 12.0406 13.333 11.3333 13.333H2"
                                                        stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5628_27028">
                                                        <rect width="16" height="16" fill="white"
                                                            transform="translate(0 0.66626)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="icon-close remove"></span>
                                        <a href="product-detail.html" class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-1.jpg"
                                                src="images/products/womens/women-1.jpg" alt="">
                                        </a>
                                        <div class="content">
                                            <div class="text-title">
                                                <a class="link text-line-clamp-2" href="product-detail.html">Ribbed
                                                    cotton-blend top</a>
                                            </div>
                                            <div class="text-button">$65.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-compare-buttons">
                                    <div class="tf-compare-buttons-wrap">
                                        <a href="compare-products.html" class="tf-btn w-100 btn-fill radius-4"><span
                                                class="text text-btn-uppercase">Compare Products</span></a>
                                        <div
                                            class="tf-compapre-button-clear-all clear-file-delete tf-btn w-100 btn-white radius-4 has-border">
                                            <span class="text text-btn-uppercase">Clear All Products</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /compare -->

    <!-- quickAdd -->
    <div class="modal fade modal-quick-add" id="quickAdd">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div>
                    <div class="tf-product-info-list">
                        <div class="tf-product-info-item">
                            <div class="image">
                                <img src="images/products/womens/women-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="product-detail.html">Ribbed Tank Top</a>
                                <div class="tf-product-info-price">
                                    <h5 class="price-on-sale font-2">$79.99</h5>
                                    <div class="compare-at-price font-2">$98.99</div>
                                    <div class="badges-on-sale text-btn-uppercase">
                                        -25%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-info-choose-option">
                            <div class="variant-picker-item">
                                <div class="variant-picker-label mb_12">
                                    Colors:<span class="text-title variant-picker-label-value">Beige</span>
                                </div>
                                <div class="variant-picker-values type-click">
                                    <input id="values-beige2" type="radio" name="color3" checked>
                                    <label class="hover-tooltip tooltip-bot radius-60" for="values-beige2"
                                        data-value="Beige">
                                        <span class="btn-checkbox bg-color-beige1"></span>
                                        <span class="tooltip">Beige</span>
                                    </label>
                                    <input id="values-gray2" type="radio" name="color3">
                                    <label class="hover-tooltip tooltip-bot radius-60" for="values-gray2"
                                        data-value="Gray">
                                        <span class="btn-checkbox bg-color-gray"></span>
                                        <span class="tooltip">Gray</span>
                                    </label>
                                    <input id="values-grey3" type="radio" name="color3">
                                    <label class="hover-tooltip tooltip-bot radius-60" for="values-grey3"
                                        data-value="Grey">
                                        <span class="btn-checkbox bg-color-grey"></span>
                                        <span class="tooltip">Grey</span>
                                    </label>
                                </div>
                            </div>
                            <div class="variant-picker-item">
                                <div class="variant-picker-label">
                                    Size:<span class="text-title variant-picker-label-value">L</span>
                                </div>
                                <div class="variant-picker-values gap12">
                                    <input type="radio" name="size3" id="values-s2">
                                    <label class="style-text size-btn" for="values-s2" data-value="S">
                                        <span class="text-title">S</span>
                                    </label>
                                    <input type="radio" name="size3" id="values-m2">
                                    <label class="style-text size-btn" for="values-m2" data-value="M">
                                        <span class="text-title">M</span>
                                    </label>
                                    <input type="radio" name="size3" id="values-l2" checked>
                                    <label class="style-text size-btn" for="values-l2" data-value="L">
                                        <span class="text-title">L</span>
                                    </label>
                                    <input type="radio" name="size3" id="values-xl2">
                                    <label class="style-text size-btn" for="values-xl2" data-value="XL">
                                        <span class="text-title">XL</span>
                                    </label>
                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="title mb_12">Quantity:</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity btn-decrease">-</span>
                                    <input class="quantity-product" type="text" name="number" value="1">
                                    <span class="btn-quantity btn-increase">+</span>
                                </div>
                            </div>
                            <div>
                                <div class="tf-product-info-by-btn mb_10">
                                    <a class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 show-shopping-cart"><span>Add
                                            to cart -&nbsp;</span><span class="tf-qty-price total-price">$79.99</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                        class="box-icon hover-tooltip compare btn-icon-action show-compare">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip text-caption-2">Compare</span>
                                    </a>
                                    <a href="javascript:void(0);"
                                        class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip text-caption-2">Wishlist</span>
                                    </a>
                                </div>
                                <a href="#" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /quickAdd -->
@endsection
