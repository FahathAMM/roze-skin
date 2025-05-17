@extends('layout.app-site')
@section('title', $title)

@section('content')
    <div id="wrapper">

        <!-- grid collection -->
        <x-site.home.skin />
        <!-- /grid collection -->
        <!-- Categories -->
        <section>
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h3 class="heading">Shop by product type</h3>
                    <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
                </div>
                <div class="flat-collection-circle wow fadeInUp" data-wow-delay="0.1s">
                    <div dir="ltr" class="swiper tf-sw-categories" data-preview="6" data-tablet="4" data-mobile-sm="3"
                        data-mobile="2" data-space-lg="30" data-space-md="20" data-space="15" data-pagination="2"
                        data-pagination-md="4" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <!-- item 1 -->
                            <div class="swiper-slide">
                                <div class="collection-circle hover-img">
                                    <a href="shop-default-grid.html" class="img-style">
                                        <img class="lazyload"
                                            data-src="images/collections/collection-circle/cls-circle6.jpg"
                                            src="images/collections/collection-circle/cls-circle6.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <div>
                                            <a href="shop-collection.html" class="cls-title">
                                                <h6 class="text">Serums</h6>
                                                <i class="icon icon-arrowUpRight"></i>
                                            </a>
                                        </div>
                                        <div class="count text-secondary">12 items</div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 2 -->
                            <div class="swiper-slide">
                                <div class="collection-circle hover-img">
                                    <a href="shop-default-grid.html" class="img-style">
                                        <img class="lazyload"
                                            data-src="images/collections/collection-circle/cls-circle7.jpg"
                                            src="images/collections/collection-circle/cls-circle7.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <div>
                                            <a href="shop-collection.html" class="cls-title">
                                                <h6 class="text">Cleansers</h6>
                                                <i class="icon icon-arrowUpRight"></i>
                                            </a>
                                        </div>
                                        <div class="count text-secondary">16 items</div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 3 -->
                            <div class="swiper-slide">
                                <div class="collection-circle hover-img">
                                    <a href="shop-default-grid.html" class="img-style">
                                        <img class="lazyload"
                                            data-src="images/collections/collection-circle/cls-circle8.jpg"
                                            src="images/collections/collection-circle/cls-circle8.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <div>
                                            <a href="shop-collection.html" class="cls-title">
                                                <h6 class="text">Creams & Salves</h6>
                                                <i class="icon icon-arrowUpRight"></i>
                                            </a>
                                        </div>
                                        <div class="count text-secondary">18 items</div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 4 -->
                            <div class="swiper-slide">
                                <div class="collection-circle hover-img">
                                    <a href="shop-default-grid.html" class="img-style">
                                        <img class="lazyload"
                                            data-src="images/collections/collection-circle/cls-circle9.jpg"
                                            src="images/collections/collection-circle/cls-circle9.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection.html" class="cls-title">
                                            <h6 class="text">Oils & Serums</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                        <div class="count text-secondary">24 items</div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 5 -->
                            <div class="swiper-slide">
                                <div class="collection-circle hover-img">
                                    <a href="shop-default-grid.html" class="img-style">
                                        <img class="lazyload"
                                            data-src="images/collections/collection-circle/cls-circle10.jpg"
                                            src="images/collections/collection-circle/cls-circle10.jpg"
                                            alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection.html" class="cls-title">
                                            <h6 class="text">Moisturizers</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                        <div class="count text-secondary">08 items</div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 6 -->
                            <div class="swiper-slide">
                                <div class="collection-circle hover-img">
                                    <a href="shop-default-grid.html" class="img-style">
                                        <img class="lazyload"
                                            data-src="images/collections/collection-circle/cls-circle11.jpg"
                                            src="images/collections/collection-circle/cls-circle11.jpg"
                                            alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection.html" class="cls-title">
                                            <h6 class="text">Toners</h6>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </a>
                                        <div class="count text-secondary">26 items</div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 7 -->
                            <div class="swiper-slide">
                                <div class="collection-circle hover-img">
                                    <a href="shop-default-grid.html" class="img-style">
                                        <img class="lazyload"
                                            data-src="images/collections/collection-circle/cls-circle7.jpg"
                                            src="images/collections/collection-circle/cls-circle7.jpg"
                                            alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <div>
                                            <a href="shop-collection.html" class="cls-title">
                                                <h6 class="text">Cleansers</h6>
                                                <i class="icon icon-arrowUpRight"></i>
                                            </a>
                                        </div>
                                        <div class="count text-secondary">12 items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex d-lg-none sw-pagination-categories sw-dots type-circle justify-content-center">
                        </div>

                    </div>
                    <div class="nav-prev-categories d-none d-lg-flex nav-sw style-line nav-sw-left"><i
                            class="icon icon-arrLeft"></i></div>
                    <div class="nav-next-categories d-none d-lg-flex nav-sw style-line nav-sw-right"><i
                            class="icon icon-arrRight"></i></div>
                </div>
            </div>
        </section>
        <!-- /Categories -->
        <!-- Top picks -->
        <section class="flat-spacing">
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h3 class="heading">Today's Top Picks</h3>
                    <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
                </div>
                <div dir="ltr" class="swiper tf-sw-latest" data-preview="4" data-tablet="3" data-mobile="2"
                    data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1"
                    data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        @foreach ($products as $prodduct)
                            <x-site.home.top-pickups :products="$prodduct" />
                        @endforeach
                    </div>
                    <div class="sw-pagination-latest sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Top picks -->
        <!-- /Banner parallax -->

        <section class="flat-banner-parallax-v2"
            style="background-image: url('{{ asset('site/images/home/banner-cosmetic.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fl-content">
                            <div class="title-top">
                                <span class="subtitle text-btn-uppercase text-secondary-2 wow fadeInUp"
                                    data-wow-delay="0s">Skin care</span>
                                <h3 class="title wow fadeInUp" data-wow-delay="0.1s">Must-Have Beauty Products for Glowing
                                    Skin</h3>
                                <p class="body-text-1 wow fadeInUp" data-wow-delay="0.2s">How to Choose the Perfect
                                    Skincare Routine for Your Skin Type</p>
                            </div>
                            <div class=" wow fadeInUp" data-wow-delay="0.3s">
                                <a href="shop-default-grid.html" class="tf-btn btn-fill"><span class="text">Buy at a
                                        discount - $69.99</span><i class="icon icon-arrowUpRight"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner parallax -->
        <!-- Banner with text -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row flat-img-with-text-v2">
                    <div class="col-lg-7 col-md-6">
                        <div class="banner-left">
                            <div class="box-title wow fadeInUp">
                                <h3>Ready to Glow?
                                    <br class="d-none d-lg-block">
                                    It Cosmetics
                                </h3>
                                <p>Bestow a flush of blush and a radiance boost in one step with the NEW Glow With
                                    Confidence Sun Blush - a balm infused with hyaluronic acid, vitamin E and peptides </p>
                            </div>
                            <ul class="tab-banner" role="tablist">
                                <li class="nav-tab-item wow fadeInUp" data-wow-delay="0s" role="presentation">
                                    <a href="#tabBannerCls1" class="nav-tab-link hover-cursor-img" data-bs-toggle="tab">
                                        <h5 class="title text-line-clamp-1">Face</h5>
                                        <div class="arr-link">
                                            <span class="text-btn-uppercase text-more">More</span>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </div>
                                        <div class="hover-image">
                                            <img src="images/collections/banner-collection/banner-cls11.jpg"
                                                alt="Hover Image">
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-tab-item wow fadeInUp" data-wow-delay="0.1s" role="presentation">
                                    <a href="#tabBannerCls2" class="active nav-tab-link hover-cursor-img"
                                        data-bs-toggle="tab">
                                        <h5 class="title text-line-clamp-1">Accessories</h5>
                                        <div class="arr-link">
                                            <span class="text-btn-uppercase text-more">More</span>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </div>
                                        <div class="hover-image">
                                            <img src="images/collections/banner-collection/banner-cls10.jpg"
                                                alt="Hover Image">
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-tab-item wow fadeInUp" data-wow-delay="0.2s" role="presentation">
                                    <a href="#tabBannerCls3" class="nav-tab-link hover-cursor-img" data-bs-toggle="tab">
                                        <h5 class="title text-line-clamp-1">Body</h5>
                                        <div class="arr-link">
                                            <span class="text-btn-uppercase text-more">More</span>
                                            <i class="icon icon-arrowUpRight"></i>
                                        </div>
                                        <div class="hover-image">
                                            <img src="images/collections/banner-collection/banner-cls9.jpg"
                                                alt="Hover Image">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="wow fadeInUp">
                                <a href="shop-collection.html" class="btn-line">View All Collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="banner-right flat-animate-tab">
                            <div class="tab-content">
                                <div class="tab-pane" id="tabBannerCls1" role="tabpanel">
                                    <div class="collection-position-2 hover-img">
                                        <a class="img-style">
                                            <img class="lazyload"
                                                data-src="images/collections/banner-collection/banner-cls11.jpg"
                                                src="images/collections/banner-collection/banner-cls11.jpg"
                                                alt="banner-cls">
                                            <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        </a>
                                        <div class="content cls-content">
                                            <div class="cls-info">
                                                <a href="product-detail.html"
                                                    class="text-title link text-line-clamp-1">Rejuvenate Restorative Face
                                                    Oil</a>
                                                <div class="price">
                                                    <span class="old-price">$98.00</span>
                                                    <span class="new-price">$219.99</span>
                                                </div>
                                            </div>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="cls-btn text-btn-uppercase">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active show" id="tabBannerCls2" role="tabpanel">
                                    <div class="collection-position-2 hover-img">
                                        <a class="img-style">
                                            <img class="lazyload"
                                                data-src="images/collections/banner-collection/banner-cls10.jpg"
                                                src="images/collections/banner-collection/banner-cls10.jpg"
                                                alt="banner-cls">
                                            <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        </a>
                                        <div class="content cls-content">
                                            <div class="cls-info">
                                                <a href="product-detail.html" class="text-title link">Rejuvenate
                                                    Restorative Face Oil</a>
                                                <div class="price">
                                                    <span class="old-price">$98.00</span>
                                                    <span class="new-price">$219.99</span>
                                                </div>
                                            </div>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="cls-btn text-btn-uppercase">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabBannerCls3" role="tabpanel">
                                    <div class="collection-position-2 hover-img">
                                        <a class="img-style">
                                            <img class="lazyload"
                                                data-src="images/collections/banner-collection/banner-cls9.jpg"
                                                src="images/collections/banner-collection/banner-cls9.jpg"
                                                alt="banner-cls">
                                            <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        </a>
                                        <div class="content cls-content">
                                            <div class="cls-info">
                                                <a href="product-detail.html" class="text-title link">Rejuvenate
                                                    Restorative Face Oil</a>
                                                <div class="price">
                                                    <span class="old-price">$98.00</span>
                                                    <span class="new-price">$219.99</span>
                                                </div>
                                            </div>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="cls-btn text-btn-uppercase">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner with text -->
        <!-- Testimonial -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="heading-section text-center wow fadeInUp">
                    <h3 class="heading">Customer Say!</h3>
                    <p class="subheading">Our customers adore our products, and we constantly aim to delight them.</p>
                </div>
                <div dir="ltr" class="swiper tf-sw-testimonial wow fadeInUp" data-wow-delay="0.1s" data-preview="2"
                    data-tablet="1.3" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15"
                    data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item hover-img">
                                <div class="img-style">
                                    <img data-src="images/testimonial/tes-3.jpg" src="images/testimonial/tes-3.jpg"
                                        alt="img-testimonial">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <p class="text-secondary">"Fantastic shop! Great selection, fair prices, and
                                            friendly staff. Highly recommended. The quality of the products is exceptional,
                                            and the prices are very reasonable!"</p>
                                        <div class="box-author">
                                            <div class="text-title author">Sybil Sharp</div>
                                            <svg class="icon" width="20" height="21" viewBox="0 0 20 21"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_15758_14563)">
                                                    <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                        stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_15758_14563">
                                                        <rect width="20" height="20" fill="white"
                                                            transform="translate(0 0.684082)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="box-avt">
                                        <div class="avatar avt-60 round">
                                            <img src="images/testimonial/tes-3.jpg" alt="avt">
                                        </div>
                                        <div class="box-price">
                                            <p class="text-title text-line-clamp-1">Contrasting sheepskin sweatshirt</p>
                                            <div class="text-button price">$60.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item hover-img">
                                <div class="img-style">
                                    <img data-src="images/testimonial/tes-4.jpg" src="images/testimonial/tes-4.jpg"
                                        alt="img-testimonial">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <p class="text-secondary">"I absolutely love this shop! The products are
                                            high-quality and the customer service is excellent. I always leave with exactly
                                            what I need and a smile on my face."</p>
                                        <div class="box-author">
                                            <div class="text-title author">Mark G.</div>
                                            <svg class="icon" width="20" height="21" viewBox="0 0 20 21"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_15758_14563)">
                                                    <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                        stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_15758_14563">
                                                        <rect width="20" height="20" fill="white"
                                                            transform="translate(0 0.684082)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="box-avt">
                                        <div class="avatar avt-60 round">
                                            <img src="images/testimonial/tes-4.jpg" alt="avt">
                                        </div>
                                        <div class="box-price">
                                            <p class="text-title text-line-clamp-1">Contrasting sheepskin sweatshirt</p>
                                            <div class="text-button price">$60.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item hover-img">
                                <div class="img-style">
                                    <img data-src="images/testimonial/tes-1.jpg" src="images/testimonial/tes-1.jpg"
                                        alt="img-testimonial">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip center">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <p class="text-secondary">"Fantastic shop! Great selection, fair prices, and
                                            friendly staff. Highly recommended. The quality of the products is exceptional,
                                            and the prices are very reasonable!"</p>
                                        <div class="box-author">
                                            <div class="text-title author">Sybil Sharp</div>
                                            <svg class="icon" width="20" height="21" viewBox="0 0 20 21"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_15758_14563)">
                                                    <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                        stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_15758_14563">
                                                        <rect width="20" height="20" fill="white"
                                                            transform="translate(0 0.684082)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="box-avt">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/user-4.jpg" alt="avt">
                                        </div>
                                        <div class="box-price">
                                            <p class="text-title text-line-clamp-1">Contrasting sheepskin sweatshirt</p>
                                            <div class="text-button price">$60.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-testimonial sw-dots type-circle d-flex justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
        <!-- Iconbox -->
        <section class="flat-spacing line-top-container">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2"
                    data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                    data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-return"></span></div>
                                <div class="content text-center">
                                    <h6>14-Day Returns</h6>
                                    <p class="text-secondary">Risk-free shopping with easy returns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-shipping"></span></div>
                                <div class="content text-center">
                                    <h6>Free Shipping</h6>
                                    <p class="text-secondary">No extra costs, just the price you see.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-headset"></span></div>
                                <div class="content text-center">
                                    <h6>24/7 Support</h6>
                                    <p class="text-secondary">24/7 support, always here just for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box">
                                <div class="icon-box"><span class="icon icon-sealCheck"></span></div>
                                <div class="content text-center">
                                    <h6>Member Discounts</h6>
                                    <p class="text-secondary">Special prices for our loyal customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-iconbox sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Iconbox -->
        <!-- Gallery shop gram -->
        <section>
            <div class="heading-section text-center wow fadeInUp">
                <h3 class="heading">Shop Instagram</h3>
                <p class="subheading text-secondary">Elevate your wardrobe with fresh finds today!</p>
            </div>
            <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="6" data-tablet="4" data-mobile-sm="3"
                data-mobile="2" data-space-lg="0" data-space-md="0" data-space="0" data-pagination="2"
                data-pagination-md="3" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery-item rounded-0 hover-overlay hover-img wow fadeInUp" data-wow-delay=".1s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="images/gallery/gallery-beauty1.jpg"
                                    src="images/gallery/gallery-beauty1.jpg" alt="image-gallery">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                    class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item rounded-0 hover-overlay hover-img wow fadeInUp" data-wow-delay=".2s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="images/gallery/gallery-beauty2.jpg"
                                    src="images/gallery/gallery-beauty2.jpg" alt="image-gallery">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                    class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item rounded-0 hover-overlay hover-img wow fadeInUp" data-wow-delay=".3s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="images/gallery/gallery-beauty3.jpg"
                                    src="images/gallery/gallery-beauty3.jpg" alt="image-gallery">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                    class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item rounded-0 hover-overlay hover-img wow fadeInUp" data-wow-delay=".4s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="images/gallery/gallery-beauty4.jpg"
                                    src="images/gallery/gallery-beauty4.jpg" alt="image-gallery">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                    class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item rounded-0 hover-overlay hover-img wow fadeInUp" data-wow-delay=".5s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="images/gallery/gallery-beauty5.jpg"
                                    src="images/gallery/gallery-beauty5.jpg" alt="image-gallery">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                    class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item rounded-0 hover-overlay hover-img wow fadeInUp" data-wow-delay=".6s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="images/gallery/gallery-beauty6.jpg"
                                    src="images/gallery/gallery-beauty6.jpg" alt="image-gallery">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip"><span
                                    class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Gallery shop gram -->

        <!-- Footer -->
        <footer id="footer" class="footer">
            <div class="footer-wrap">
                <div class="footer-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-infor">
                                    <div class="footer-logo">
                                        <a href="index.html">
                                            <img src="images/logo/logo.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-address">
                                        <p>549 Oak St.Crystal Lake, IL 60014</p>
                                        <a href="contact.html" class="tf-btn-default fw-6">GET DIRECTION<i
                                                class="icon-arrowUpRight"></i></a>
                                    </div>
                                    <ul class="footer-info">
                                        <li>
                                            <i class="icon-mail"></i>
                                            <p>themesflat@gmail.com</p>
                                        </li>
                                        <li>
                                            <i class="icon-phone"></i>
                                            <p>315-666-6688</p>
                                        </li>
                                    </ul>
                                    <ul class="tf-social-icon">
                                        <li><a href="#" class="social-facebook"><i class="icon icon-fb"></i></a>
                                        </li>
                                        <li><a href="#" class="social-twiter"><i class="icon icon-x"></i></a></li>
                                        <li><a href="#" class="social-instagram"><i
                                                    class="icon icon-instagram"></i></a></li>
                                        <li><a href="#" class="social-tiktok"><i class="icon icon-tiktok"></i></a>
                                        </li>
                                        <li><a href="#" class="social-amazon"><i class="icon icon-amazon"></i></a>
                                        </li>
                                        <li><a href="#" class="social-pinterest"><i
                                                    class="icon icon-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="footer-menu">
                                    <div class="footer-col-block">
                                        <div class="footer-heading text-button footer-heading-mobile">
                                            Infomation
                                        </div>
                                        <div class="tf-collapse-content">
                                            <ul class="footer-menu-list">
                                                <li class="text-caption-1">
                                                    <a href="about-us.html" class="footer-menu_item">About Us</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="#" class="footer-menu_item">Our Stories</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="#" class="footer-menu_item">Size Guide</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="contact.html" class="footer-menu_item">Contact us</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="#" class="footer-menu_item">Career</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="my-account.html" class="footer-menu_item">My Account</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="footer-col-block">
                                        <div class="footer-heading text-button footer-heading-mobile">
                                            Customer Services
                                        </div>
                                        <div class="tf-collapse-content">
                                            <ul class="footer-menu-list">
                                                <li class="text-caption-1">
                                                    <a href="#" class="footer-menu_item">Shipping</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="#" class="footer-menu_item">Return & Refund</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="#" class="footer-menu_item">Privacy Policy</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="term-of-use.html" class="footer-menu_item">Terms &
                                                        Conditions</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="FAQs.html" class="footer-menu_item">Orders FAQs</a>
                                                </li>
                                                <li class="text-caption-1">
                                                    <a href="wish-list.html" class="footer-menu_item">My Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="footer-col-block">
                                    <div class="footer-heading text-button footer-heading-mobile">
                                        Newletter
                                    </div>
                                    <div class="tf-collapse-content">
                                        <div class="footer-newsletter">
                                            <p class="text-caption-1">Sign up for our newsletter and get 10% off your first
                                                purchase</p>
                                            <form id="subscribe-form" action="#"
                                                class="form-newsletter subscribe-form" method="post"
                                                accept-charset="utf-8" data-mailchimp="true">
                                                <div id="subscribe-content" class="subscribe-content">
                                                    <fieldset class="email">
                                                        <input id="subscribe-email" type="email" name="email-form"
                                                            class="subscribe-email" placeholder="Enter your e-mail"
                                                            tabindex="0" aria-required="true">
                                                    </fieldset>
                                                    <div class="button-submit">
                                                        <button id="subscribe-button" class="subscribe-button"
                                                            type="button"><i class="icon icon-arrowUpRight"></i></button>
                                                    </div>
                                                </div>
                                                <div id="subscribe-msg" class="subscribe-msg"></div>
                                            </form>
                                            <div class="tf-cart-checkbox">
                                                <div class="tf-checkbox-wrapp">
                                                    <input class="" type="checkbox" id="footer-Form_agree"
                                                        name="agree_checkbox">
                                                    <div>
                                                        <i class="icon-check"></i>
                                                    </div>
                                                </div>
                                                <label class="text-caption-1" for="footer-Form_agree">
                                                    By clicking subcribe, you agree to the <a class="fw-6 link"
                                                        href="term-of-use.html">Terms of Service</a> and <a
                                                        class="fw-6 link" href="#">Privacy Policy</a>.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-bottom-wrap">
                                    <div class="left">
                                        <p class="text-caption-1">©2024 Modave. All Rights Reserved.</p>
                                        <div class="tf-cur justify-content-end">
                                            <div class="tf-currencies">
                                                <select class="image-select center style-default type-currencies">
                                                    <option selected data-thumbnail="images/country/us.svg">USD</option>
                                                    <option data-thumbnail="images/country/vn.svg">VND</option>
                                                </select>
                                            </div>
                                            <div class="tf-languages">
                                                <select class="image-select center style-default type-languages">
                                                    <option>English</option>
                                                    <option>Vietnam</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-payment">
                                        <p class="text-caption-1">Payment:</p>
                                        <ul>
                                            <li>
                                                <img src="images/payment/img-1.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-2.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-3.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-4.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-5.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-6.png" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
        <!-- toolbar-bottom -->
        <div class="tf-toolbar-bottom">
            <div class="toolbar-item">
                <a href="shop-default-grid.html">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.125 3.125H4.375C4.04348 3.125 3.72554 3.2567 3.49112 3.49112C3.2567 3.72554 3.125 4.04348 3.125 4.375V8.125C3.125 8.45652 3.2567 8.77446 3.49112 9.00888C3.72554 9.2433 4.04348 9.375 4.375 9.375H8.125C8.45652 9.375 8.77446 9.2433 9.00888 9.00888C9.2433 8.77446 9.375 8.45652 9.375 8.125V4.375C9.375 4.04348 9.2433 3.72554 9.00888 3.49112C8.77446 3.2567 8.45652 3.125 8.125 3.125ZM8.125 8.125H4.375V4.375H8.125V8.125ZM15.625 3.125H11.875C11.5435 3.125 11.2255 3.2567 10.9911 3.49112C10.7567 3.72554 10.625 4.04348 10.625 4.375V8.125C10.625 8.45652 10.7567 8.77446 10.9911 9.00888C11.2255 9.2433 11.5435 9.375 11.875 9.375H15.625C15.9565 9.375 16.2745 9.2433 16.5089 9.00888C16.7433 8.77446 16.875 8.45652 16.875 8.125V4.375C16.875 4.04348 16.7433 3.72554 16.5089 3.49112C16.2745 3.2567 15.9565 3.125 15.625 3.125ZM15.625 8.125H11.875V4.375H15.625V8.125ZM8.125 10.625H4.375C4.04348 10.625 3.72554 10.7567 3.49112 10.9911C3.2567 11.2255 3.125 11.5435 3.125 11.875V15.625C3.125 15.9565 3.2567 16.2745 3.49112 16.5089C3.72554 16.7433 4.04348 16.875 4.375 16.875H8.125C8.45652 16.875 8.77446 16.7433 9.00888 16.5089C9.2433 16.2745 9.375 15.9565 9.375 15.625V11.875C9.375 11.5435 9.2433 11.2255 9.00888 10.9911C8.77446 10.7567 8.45652 10.625 8.125 10.625ZM8.125 15.625H4.375V11.875H8.125V15.625ZM15.625 10.625H11.875C11.5435 10.625 11.2255 10.7567 10.9911 10.9911C10.7567 11.2255 10.625 11.5435 10.625 11.875V15.625C10.625 15.9565 10.7567 16.2745 10.9911 16.5089C11.2255 16.7433 11.5435 16.875 11.875 16.875H15.625C15.9565 16.875 16.2745 16.7433 16.5089 16.5089C16.7433 16.2745 16.875 15.9565 16.875 15.625V11.875C16.875 11.5435 16.7433 11.2255 16.5089 10.9911C16.2745 10.7567 15.9565 10.625 15.625 10.625ZM15.625 15.625H11.875V11.875H15.625V15.625Z"
                                fill="#4D4E4F" />
                        </svg>
                    </div>
                    <div class="toolbar-label">Shop</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#shopCategories" data-bs-toggle="offcanvas" aria-controls="shopCategories">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5 10C17.5 10.1658 17.4342 10.3247 17.3169 10.4419C17.1997 10.5592 17.0408 10.625 16.875 10.625H3.125C2.95924 10.625 2.80027 10.5592 2.68306 10.4419C2.56585 10.3247 2.5 10.1658 2.5 10C2.5 9.83424 2.56585 9.67527 2.68306 9.55806C2.80027 9.44085 2.95924 9.375 3.125 9.375H16.875C17.0408 9.375 17.1997 9.44085 17.3169 9.55806C17.4342 9.67527 17.5 9.83424 17.5 10ZM3.125 5.625H16.875C17.0408 5.625 17.1997 5.55915 17.3169 5.44194C17.4342 5.32473 17.5 5.16576 17.5 5C17.5 4.83424 17.4342 4.67527 17.3169 4.55806C17.1997 4.44085 17.0408 4.375 16.875 4.375H3.125C2.95924 4.375 2.80027 4.44085 2.68306 4.55806C2.56585 4.67527 2.5 4.83424 2.5 5C2.5 5.16576 2.56585 5.32473 2.68306 5.44194C2.80027 5.55915 2.95924 5.625 3.125 5.625ZM16.875 14.375H3.125C2.95924 14.375 2.80027 14.4408 2.68306 14.5581C2.56585 14.6753 2.5 14.8342 2.5 15C2.5 15.1658 2.56585 15.3247 2.68306 15.4419C2.80027 15.5592 2.95924 15.625 3.125 15.625H16.875C17.0408 15.625 17.1997 15.5592 17.3169 15.4419C17.4342 15.3247 17.5 15.1658 17.5 15C17.5 14.8342 17.4342 14.6753 17.3169 14.5581C17.1997 14.4408 17.0408 14.375 16.875 14.375Z"
                                fill="#4D4E4F" />
                        </svg>
                    </div>
                    <div class="toolbar-label">Categories</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#search" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.9419 17.058L14.0302 13.1471C15.1639 11.7859 15.7293 10.04 15.6086 8.27263C15.488 6.50524 14.6906 4.85241 13.3823 3.65797C12.074 2.46353 10.3557 1.81944 8.58462 1.85969C6.81357 1.89994 5.12622 2.62143 3.87358 3.87407C2.62094 5.12671 1.89945 6.81406 1.8592 8.5851C1.81895 10.3561 2.46304 12.0745 3.65748 13.3828C4.85192 14.691 6.50475 15.4884 8.27214 15.6091C10.0395 15.7298 11.7854 15.1644 13.1466 14.0306L17.0575 17.9424C17.1156 18.0004 17.1845 18.0465 17.2604 18.0779C17.3363 18.1094 17.4176 18.1255 17.4997 18.1255C17.5818 18.1255 17.6631 18.1094 17.739 18.0779C17.8149 18.0465 17.8838 18.0004 17.9419 17.9424C17.9999 17.8843 18.046 17.8154 18.0774 17.7395C18.1089 17.6636 18.125 17.5823 18.125 17.5002C18.125 17.4181 18.1089 17.3367 18.0774 17.2609C18.046 17.185 17.9999 17.1161 17.9419 17.058ZM3.12469 8.75018C3.12469 7.63766 3.45459 6.55012 4.07267 5.6251C4.69076 4.70007 5.56926 3.9791 6.5971 3.55336C7.62493 3.12761 8.75593 3.01622 9.84707 3.23326C10.9382 3.4503 11.9405 3.98603 12.7272 4.7727C13.5138 5.55937 14.0496 6.56165 14.2666 7.6528C14.4837 8.74394 14.3723 9.87494 13.9465 10.9028C13.5208 11.9306 12.7998 12.8091 11.8748 13.4272C10.9497 14.0453 9.86221 14.3752 8.74969 14.3752C7.25836 14.3735 5.82858 13.7804 4.77404 12.7258C3.71951 11.6713 3.12634 10.2415 3.12469 8.75018Z"
                                fill="#4D4E4F" />
                        </svg>
                    </div>
                    <div class="toolbar-label">Search</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#wishlist" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.4215 4.45326C16.5724 3.60627 15.4225 3.12997 14.2231 3.1285C13.0238 3.12704 11.8727 3.60054 11.0215 4.44545L9.99965 5.39467L8.97699 4.44232C8.12602 3.59373 6.9728 3.11795 5.77103 3.11963C4.56926 3.12132 3.41738 3.60034 2.56879 4.45131C1.7202 5.30228 1.24441 6.4555 1.2461 7.65727C1.24778 8.85904 1.7268 10.0109 2.57777 10.8595L9.55824 17.9423C9.6164 18.0014 9.68572 18.0483 9.76217 18.0803C9.83862 18.1123 9.92067 18.1288 10.0036 18.1288C10.0864 18.1288 10.1685 18.1123 10.2449 18.0803C10.3214 18.0483 10.3907 18.0014 10.4489 17.9423L17.4215 10.8595C18.2707 10.0098 18.7477 8.85768 18.7477 7.65639C18.7477 6.45509 18.2707 5.30296 17.4215 4.45326ZM16.5348 9.98139L9.99965 16.6095L3.46059 9.97514C2.8452 9.35975 2.49948 8.52511 2.49948 7.65482C2.49948 6.78454 2.8452 5.9499 3.46059 5.33451C4.07597 4.71913 4.91061 4.37341 5.7809 4.37341C6.65118 4.37341 7.48583 4.71913 8.10121 5.33451L8.11684 5.35014L9.57387 6.7056C9.68953 6.81324 9.84166 6.87307 9.99965 6.87307C10.1576 6.87307 10.3098 6.81324 10.4254 6.7056L11.8825 5.35014L11.8981 5.33451C12.5139 4.71954 13.3488 4.37438 14.219 4.37497C15.0893 4.37555 15.9237 4.72184 16.5387 5.33764C17.1537 5.95344 17.4988 6.78831 17.4983 7.6586C17.4977 8.52888 17.1514 9.36329 16.5356 9.97826L16.5348 9.98139Z"
                                fill="#4D4E4F" />
                        </svg>
                        <!-- <div class="toolbar-count">1</div> -->
                    </div>
                    <div class="toolbar-label">Wishlist</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#shoppingCart" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.75 8.23389V4.48389C13.75 3.48932 13.3549 2.5355 12.6517 1.83224C11.9484 1.12897 10.9946 0.733887 10 0.733887C9.00544 0.733887 8.05161 1.12897 7.34835 1.83224C6.64509 2.5355 6.25 3.48932 6.25 4.48389V8.23389M3.4375 6.35889H16.5625L17.5 17.6089H2.5L3.4375 6.35889Z"
                                stroke="#4D4E4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="toolbar-label">Cart</div>
                </a>
            </div>
        </div>
        <!-- /toolbar-bottom -->

    </div>
@endsection
