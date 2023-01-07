@extends('layouts.app')
@section('title', 'پرداخت')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-19">
        <div class="container">
            <div class="page-title-content">
                <h2>Checkout</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Checkout Area -->
    <section class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="log-in-coupon-code mr-15">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Returning customer? click here to login
                                    </a>

                                    <div class="contact-form-action accordion-content">
                                        <p class="justify">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed
                                            est sit amet
                                            ipsum luctus.</p>

                                        <form method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="name"
                                                            placeholder="Username or Email">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input class="form-control" type="password" name="password"
                                                            placeholder="Password">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button class="default-btn" type="submit">
                                                        Log in
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Have a coupon? Click here to enter your code
                                    </a>

                                    <div class="contact-form-action accordion-content">
                                        <p class="justify">Now apply coupon</p>

                                        <form method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="Coupon"
                                                            placeholder="Coupon Code">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button class="default-btn" type="submit">
                                                        Apply coupon
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <form>
                        <div class="billing-details mr-15">
                            <h3 class="title">Billing Details</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>First name <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last name <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Company name (Optional)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Country <span class="required">*</span></label>

                                        <div class="select-box">
                                            <select class="form-control">
                                                <option value="5">United Kingdom</option>
                                                <option value="1">China</option>
                                                <option value="2">United Arab Emirates</option>
                                                <option value="0">Germany</option>
                                                <option value="3">France</option>
                                                <option value="4">Japan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Street address <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>State<span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Zip <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ship-different-address">
                                        <label class="form-check-label" for="ship-different-address">Ship to a different
                                            address?</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Order notes (Optional)</label>
                                        <textarea name="notes" id="notes" cols="30" rows="8" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="order-details ml-15">
                        <div class="cart-totals">
                            <h3>Checkout summary</h3>

                            <ul>
                                <li>Subtotal <span>$240.00</span></li>
                                <li>Shipping <span>$240.00</span></li>
                                <li>Coupon <span>$00.00</span></li>
                                <li>Total <span>$240.00</span></li>
                                <li><b>Payable Total</b> <span><b>$240.00</b></span></li>
                            </ul>
                        </div>

                        <div class="faq-accordion">
                            <h3>Payment method</h3>

                            <ul class="accordion">
                                <li class="accordion-item active">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Direct bank transfer
                                    </a>

                                    <p class="accordion-content show">
                                        Make your payment directly into our bank account. Please use your Order ID as the
                                        payment reference. Your order won’t be shipped until the funds have our account.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Cash on delivery
                                    </a>

                                    <p class="accordion-content">
                                        Please send your cheque to Store Name, Store Street, Store Town, Store State /
                                        County, Store Postcode.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        PayPal
                                    </a>

                                    <p class="accordion-content">
                                        Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                        account.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ship-differents-address">
                                        <label class="form-check-label" for="ship-different-address">I’ve read and accept
                                            the <a href="terms-conditions.html">terms & conditions</a>*</label>
                                    </div>
                                </li>

                                <li class="place-order">
                                    <a href="index.htm#" class="default-btn two">
                                        Place order
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection
