@extends('layouts.app')
@section('title', 'لیست علاقه مندی ها')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-18">
        <div class="container">
            <div class="page-title-content">
                <h2>Wishlist</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">Wishlist</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Wishlist Area -->
    <section class="wishlist-area  ptb-100">
        <div class="container">
            <form class="cart-controller">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Trash</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
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
                                    In stock
                                </td>

                                <td class="product-subtotal">
                                    <a href="cart.html" class="default-btn">
                                        Add to cart
                                    </a>
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
                                    In stock
                                </td>

                                <td class="product-subtotal">
                                    <a href="cart.html" class="default-btn">
                                        Add to cart
                                    </a>
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
                                    In stock
                                </td>

                                <td class="product-subtotal">
                                    <a href="cart.html" class="default-btn">
                                        Add to cart
                                    </a>
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
                                    In stock
                                </td>

                                <td class="product-subtotal">
                                    <a href="cart.html" class="default-btn">
                                        Add to cart
                                    </a>
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
                                    In stock
                                </td>

                                <td class="product-subtotal">
                                    <a href="cart.html" class="default-btn">
                                        Add to cart
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </section>
    <!-- End Wishlist Area -->
@endsection
