@extends('layout.app-site')
@section('title', 'Product')
@section('content')
    <section class="flat-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="tf-cart-sold">
                        <div class="notification-sold bg-surface">
                            <img class="icon" src="images/logo/icon-fire.png" alt="img">
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
                    </div>
                    <form>
                        <table class="tf-table-page-cart">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tf-cart-item file-delete">
                                    <td class="tf-cart-item_product">
                                        <a href="product-detail.html" class="img-box">
                                            <img src="images/products/womens/women-19.jpg" alt="product">
                                        </a>
                                        <div class="cart-info">
                                            <a href="product-detail.html" class="cart-title link">V-neck cotton T-shirt</a>
                                            <div class="variant-box">
                                                <div class="tf-select">
                                                    <select>
                                                        <option selected="selected">Blue</option>
                                                        <option>Black</option>
                                                        <option>White</option>
                                                        <option>Red</option>
                                                        <option>Beige</option>
                                                        <option>Pink</option>
                                                    </select>
                                                </div>
                                                <div class="tf-select">
                                                    <select>
                                                        <option selected="selected">XL</option>
                                                        <option>XS</option>
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                        <option>2XL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-cart-title="Price" class="tf-cart-item_price text-center">
                                        <div class="cart-price text-button price-on-sale">$60.00</div>
                                    </td>
                                    <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                        <div class="wg-quantity mx-md-auto">
                                            <span class="btn-quantity btn-decrease">-</span>
                                            <input type="text" class="quantity-product" name="number" value="1">
                                            <span class="btn-quantity btn-increase">+</span>
                                        </div>
                                    </td>
                                    <td data-cart-title="Total" class="tf-cart-item_total text-center">
                                        <div class="cart-total text-button total-price">$60.00</div>
                                    </td>
                                    <td data-cart-title="Remove" class="remove-cart"><span
                                            class="remove icon icon-close"></span></td>
                                </tr>
                                <tr class="tf-cart-item file-delete">
                                    <td class="tf-cart-item_product">
                                        <a href="product-detail.html" class="img-box">
                                            <img src="images/products/womens/women-1.jpg" alt="product">
                                        </a>
                                        <div class="cart-info">
                                            <a href="product-detail.html" class="cart-title link">V-neck cotton T-shirt</a>
                                            <div class="variant-box">
                                                <div class="tf-select">
                                                    <select>
                                                        <option selected="selected">Blue</option>
                                                        <option>Black</option>
                                                        <option>White</option>
                                                        <option>Red</option>
                                                        <option>Beige</option>
                                                        <option>Pink</option>
                                                    </select>
                                                </div>
                                                <div class="tf-select">
                                                    <select>
                                                        <option selected="selected">XL</option>
                                                        <option>XS</option>
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                        <option>2XL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-cart-title="Price" class="tf-cart-item_price text-center">
                                        <div class="cart-price text-button price-on-sale">$40.00</div>
                                    </td>
                                    <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                        <div class="wg-quantity mx-md-auto">
                                            <span class="btn-quantity btn-decrease">-</span>
                                            <input type="text" class="quantity-product" name="number" value="1">
                                            <span class="btn-quantity btn-increase">+</span>
                                        </div>
                                    </td>
                                    <td data-cart-title="Total" class="tf-cart-item_total text-center">
                                        <div class="cart-total text-button total-price">$40.00</div>
                                    </td>
                                    <td data-cart-title="Remove" class="remove-cart"><span
                                            class="remove icon icon-close"></span></td>
                                </tr>
                                <tr class="tf-cart-item file-delete">
                                    <td class="tf-cart-item_product">
                                        <a href="product-detail.html" class="img-box">
                                            <img src="images/products/womens/women-29.jpg" alt="product">
                                        </a>
                                        <div class="cart-info">
                                            <a href="product-detail.html" class="cart-title link">V-neck cotton
                                                T-shirt</a>
                                            <div class="variant-box">
                                                <div class="tf-select">
                                                    <select>
                                                        <option selected="selected">Blue</option>
                                                        <option>Black</option>
                                                        <option>White</option>
                                                        <option>Red</option>
                                                        <option>Beige</option>
                                                        <option>Pink</option>
                                                    </select>
                                                </div>
                                                <div class="tf-select">
                                                    <select>
                                                        <option selected="selected">XL</option>
                                                        <option>XS</option>
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                        <option>2XL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-cart-title="Price" class="tf-cart-item_price text-center">
                                        <div class="cart-price"><span class="old-price">$80.00</span><span
                                                class="text-button new-price price-on-sale">$129.00</span></div>
                                    </td>
                                    <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                        <div class="wg-quantity mx-md-auto">
                                            <span class="btn-quantity btn-decrease">-</span>
                                            <input type="text" class="quantity-product" name="number"
                                                value="1">
                                            <span class="btn-quantity btn-increase">+</span>
                                        </div>
                                    </td>
                                    <td data-cart-title="Total" class="tf-cart-item_total text-center">
                                        <div class="cart-total text-button total-price">$129.00</div>
                                    </td>
                                    <td data-cart-title="Remove" class="remove-cart"><span
                                            class="remove icon icon-close"></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="ip-discount-code">
                            <input type="text" placeholder="Add voucher discount">
                            <button class="tf-btn"><span class="text">Apply Code</span></button>
                        </div>
                        <div class="group-discount">
                            <div class="box-discount">
                                <div class="discount-top">
                                    <div class="discount-off">
                                        <div class="text-caption-1">Discount</div>
                                        <span class="sale-off text-btn-uppercase">10% OFF</span>
                                    </div>
                                    <div class="discount-from">
                                        <p class="text-caption-1">For all orders <br> from 200$</p>
                                    </div>
                                </div>
                                <div class="discount-bot">
                                    <span class="text-btn-uppercase">Mo234231</span>
                                    <button class="tf-btn"><span class="text">Apply Code</span></button>
                                </div>
                            </div>
                            <div class="box-discount active">
                                <div class="discount-top">
                                    <div class="discount-off">
                                        <div class="text-caption-1">Discount</div>
                                        <span class="sale-off text-btn-uppercase">10% OFF</span>
                                    </div>
                                    <div class="discount-from">
                                        <p class="text-caption-1">For all orders <br> from 200$</p>
                                    </div>
                                </div>
                                <div class="discount-bot">
                                    <span class="text-btn-uppercase">Mo234231</span>
                                    <button class="tf-btn"><span class="text">Apply Code</span></button>
                                </div>
                            </div>
                            <div class="box-discount">
                                <div class="discount-top">
                                    <div class="discount-off">
                                        <div class="text-caption-1">Discount</div>
                                        <span class="sale-off text-btn-uppercase">10% OFF</span>
                                    </div>
                                    <div class="discount-from">
                                        <p class="text-caption-1">For all orders <br> from 200$</p>
                                    </div>
                                </div>
                                <div class="discount-bot">
                                    <span class="text-btn-uppercase">Mo234231</span>
                                    <button class="tf-btn"><span class="text">Apply Code</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="fl-sidebar-cart">
                        <div class="box-order bg-surface">
                            <h5 class="title">Order Summary</h5>
                            <div class="subtotal text-button d-flex justify-content-between align-items-center">
                                <span>Subtotal</span>
                                <span class="total">-$80.00</span>
                            </div>
                            <div class="discount text-button d-flex justify-content-between align-items-center">
                                <span>Discounts</span>
                                <span class="total">-$80.00</span>
                            </div>
                            <div class="ship">
                                <span class="text-button">Shipping</span>
                                <div class="flex-grow-1">
                                    <fieldset class="ship-item">
                                        <input type="radio" name="ship-check" class="tf-check-rounded" id="free"
                                            checked="">
                                        <label for="free">
                                            <span>Free Shipping</span>
                                            <span class="price">$0.00</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="ship-item">
                                        <input type="radio" name="ship-check" class="tf-check-rounded" id="local">
                                        <label for="local">
                                            <span>Local:</span>
                                            <span class="price">$35.00</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="ship-item">
                                        <input type="radio" name="ship-check" class="tf-check-rounded" id="rate">
                                        <label for="rate">
                                            <span>Flat Rate:</span>
                                            <span class="price">$35.00</span>
                                        </label>
                                    </fieldset>
                                </div>
                            </div>
                            <h5 class="total-order d-flex justify-content-between align-items-center">
                                <span>Total</span>
                                <span class="total">$186,99</span>
                            </h5>
                            <div class="box-progress-checkout">
                                <fieldset class="check-agree">
                                    <input type="checkbox" id="check-agree" class="tf-check-rounded">
                                    <label for="check-agree">
                                        I agree with the <a href="term-of-use.html">terms and conditions</a>
                                    </label>
                                </fieldset>
                                <a href="checkout.html" class="tf-btn btn-reset">Process To Checkout</a>
                                <p class="text-button text-center">Or continue shopping</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
