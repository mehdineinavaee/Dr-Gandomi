@extends('layouts.app')
@section('title', 'کارت')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-17">
        <div class="container">
            <div class="page-title-content">
                <h2>Cart</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home 
                        </a>
                    </li>

                    <li class="active">Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Cart Area -->
    <section class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form class="cart-controller">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Trash</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead> 
                                                                        
                                <tbody>
                                    <tr>
                                        <td class="trash">
                                            <a href="index.htm#" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                        
                                        <td class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-1.jpg" alt="Image">
                                            </a>
                                        </td>
    
                                        <td class="product-name">
                                            <a href="product-details.html">Natural</a>
                                        </td>
    
                                        <td class="product-price">
                                            <span class="unit-amount">$10.00</span>
                                        </td>
    
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
    
                                                <input type="text" value="1">
    
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>
    
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$10.00</span>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td class="trash">
                                            <a href="index.htm#" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
    
                                        <td class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-2.jpg" alt="Image">
                                            </a>
                                        </td>
    
                                        <td class="product-name">
                                            <a href="product-details.html">Secret covered in sand</a>
                                        </td>
    
                                        <td class="product-price">
                                            <span class="unit-amount">$20.00</span>
                                        </td>
    
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
    
                                                <input type="text" value="1">
    
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>
    
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$20.00</span>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td class="trash">
                                            <a href="index.htm#" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
    
                                        <td class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-3.jpg" alt="Image">
                                            </a>
                                        </td>
    
                                        <td class="product-name">
                                            <a href="product-details.html">N is for nature</a>
                                        </td>
    
                                        <td class="product-price">
                                            <span class="unit-amount">$08.00</span>
                                        </td>
    
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
    
                                                <input type="text" value="1">
    
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>
    
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$08.00</span>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td class="trash">
                                            <a href="index.htm#" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
    
                                        <td class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-4.jpg" alt="Image">
                                            </a>
                                        </td>
    
                                        <td class="product-name">
                                            <a href="product-details.html">Life of the candle</a>
                                        </td>
    
                                        <td class="product-price">
                                            <span class="unit-amount">$15.00</span>
                                        </td>
    
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
    
                                                <input type="text" value="1">
    
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>
    
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$15.00</span>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td class="trash">
                                            <a href="index.htm#" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
    
                                        <td class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-5.jpg" alt="Image">
                                            </a>
                                        </td>
    
                                        <td class="product-name">
                                            <a href="product-details.html">Be now</a>
                                        </td>
    
                                        <td class="product-price">
                                            <span class="unit-amount">$20.00</span>
                                        </td>
    
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
    
                                                <input type="text" value="1">
    
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>
    
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$20.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
    
                    <div class="coupon-cart">
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Coupon code">
                                    <a href="index.htm#" class="default-btn">
                                        Apply coupon
                                    </a>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-5">
                                <a href="index.htm#" class="default-btn update-cart">
                                    Update cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-totals">
                        <h3 class="cart-checkout-title">Checkout summary</h3>
    
                        <ul>
                            <li>Subtotal <span>$145.00</span></li>
                            <li>Shipping <span>$00.00</span></li>
                            <li>Total <span>$315.00</span></li>
                            <li><b>Payable Total</b> <span><b>$145.00</b></span></li>
                        </ul>
    
                        <a href="checkout.html" class="default-btn">
                            Proceed to checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Area -->
@endsection
