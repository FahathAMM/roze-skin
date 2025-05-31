@extends('layout.app-site')
@section('title', 'Product')
@section('content')
    <x-site.component.page-title title="Products" :breadcrumbs="[['label' => 'Product', 'url' => route('product.index')], ['label' => 'Products']]" />

    <div id="wrapper">

        <!-- Section product -->
        <section class="flat-spacing">
            <div class="container-full2">
                <div class="tf-shop-control">
                    <div class="tf-control-filter" style="display: none">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="filterShop" class="tf-btn-filter"><span
                                class="icon icon-filter"></span><span class="text">Filters</span></a>
                        <div class="d-none d-lg-flex shop-sale-text">
                            <i class="icon icon-checkCircle"></i>
                            <p class="text-caption-1">Shop sale items only</p>
                        </div>
                    </div>

                    <div class="tf-control-filter">
                    </div>

                    <ul class="tf-control-layout">
                        {{-- <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <rect x="7.5" y="3.5" width="12" height="5" rx="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <rect x="7.5" y="11.5" width="12" height="5" rx="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li> --}}
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

                    <x-site.product.product :products="$products" />

                </div>
            </div>
        </section>
        <!-- /Section product -->

    </div>

    <!-- Filter -->
    <div class="offcanvas offcanvas-start canvas-filter" id="filterShop">
        <div class="canvas-wrapper">
            <div class="canvas-header">
                <h5>Filters</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </div>
            <div class="canvas-body">

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


@endsection
