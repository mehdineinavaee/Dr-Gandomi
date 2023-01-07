@extends('layouts.app')
@section('title', 'جزئیات پرداخت')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-16">
        <div class="container">
            <div class="page-title-content">
                <h2>Product details</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">Product details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Product Details Area -->
    <section class="product-details-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image mr-15">
                        <img src="assets/images/product/product-9.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc ml-15">
                        <h3>Natural</h3>

                        <div class="product-review">
                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <a href="index.htm#" class="rating-count">(2 Customer reviews)</a>
                        </div>

                        <div class="price">
                            <span class="new-price"> <del>$88.00</del> $80.00</span>
                        </div>

                        <p class="justify">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren dolore</p>

                        <ul class="sku">
                            <li>
                                SKU
                                <span>:SKU</span>
                            </li>
                            <li>
                                Category
                                <span>:Book</span>
                            </li>
                            <li>
                                Tags
                                <span>:Natural Book</span>
                            </li>
                            <li>
                                Availability
                                <span>:In Stock</span>
                            </li>
                        </ul>

                        <div class="product-add-to-cart">
                            <span class="quantities">Quantities:</span>
                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class="ri-subtract-line"></i>
                                </span>

                                <input type="text" value="1">

                                <span class="plus-btn">
                                    <i class="ri-add-line"></i>
                                </span>
                            </div>
                        </div>

                        <button type="submit" class="default-btn mr-20">
                            Add to cart
                        </button>
                        <button type="submit" class="default-btn">
                            Add to Wishlist
                        </button>

                        <ul class="social-wrap">
                            <li>
                                <span>Share:</span>
                            </li>
                            <li>
                                <a href="javascript:if(confirm('https://www.facebook.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.facebook.com/'"
                                    target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:if(confirm('https://www.instagram.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.instagram.com/'"
                                    target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:if(confirm('https://www.linkedin.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.linkedin.com/'"
                                    target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:if(confirm('https://twitter.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://twitter.com/'"
                                    target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="tab product-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        Description
                                    </li>
                                    <li>
                                        Reviews (2)
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="product-details-tab-content">
                                            <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Libero blanditiis
                                                quo fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero
                                                iusto minus, nulla excepturi quidem reprehenderit blanditiis eligendi
                                                exercitationem nesciunt ad! Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Sequi temporibus deserunt mollitia natus esse, sunt fuga
                                                quos. Autem quasi error quisquam architecto fuga suscipit atque voluptatibus
                                                nobis impedit nulla. Officia ercitationem. Lorem ipsum dolor, sit amet
                                                consectetur adipisicing elit. Officia quaerat maxime laudantium obcaecati
                                                qui? Magni officiis fugit, dolorem mollitia eius similique accusantium
                                                nostrum possimus consectetur laudantium distinctio aliquid delectus
                                                assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                                earum deleniti, quaerat rerum corporis quis iste veritatis quia aliquam
                                                totam autem? Repellendus elit. Sequi temporibus deserunt mollitia natus
                                                esse, sunt fuga quos. Autem</p>

                                            <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Corporis repellat
                                                tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde
                                                ullam, distinctio atque aperiam obcaecati ipsam id, inventore consectetur
                                                laudantium repellat tempora aliquid exercitationem. Vel, dicta quos. Velit
                                                magnam, eius unde ullam. Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Obcaecati reprehenderit quasi fugit error deleniti libero, porro illo
                                                numquam accusamus sunt id sapiente!</p>
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="product-details-tab-content">
                                            <div class="product-review-form">
                                                <h3>Customer reviews</h3>

                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <p>Based on 2 reviews</p>
                                                </div>

                                                <div class="review-comments">
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>

                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>July 21,
                                                                2020</strong></span>
                                                        <p class="justify">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="index.htm#" class="review-report-link">Reply</a>
                                                    </div>

                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>

                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>July 21,
                                                                2020</strong></span>
                                                        <p class="justify">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="index.htm#" class="review-report-link">Reply</a>
                                                    </div>
                                                </div>

                                                <div class="review-form">
                                                    <h3>Write a review</h3>

                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input type="text" id="name" name="name"
                                                                        class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" id="email" name="email"
                                                                        class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Review title</label>
                                                                    <input type="text" id="review-title"
                                                                        name="review-title" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Body of review (1500)</label>
                                                                    <textarea name="review-body" id="review-body" cols="30" rows="8" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="btn default-btn">
                                                                    Submit review
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
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
        </div>
    </section>
    <!-- End Product Details Area -->

    <!-- Start Product Area -->
    <div class="product-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Related products</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img src="assets/images/product/product-1.jpg" alt="Image">

                            <ul>

                                <li>
                                    <a href="index.htm#">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.htm#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <i class="ri-shopping-cart-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <a href="product-details.html">
                            <h3>Natural</h3>
                        </a>

                        <span class="price"> <del>$20</del> $10.00</span>
                        <span class="new">New</span>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img src="assets/images/product/product-2.jpg" alt="Image">

                            <ul>

                                <li>
                                    <a href="index.htm#">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.htm#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <i class="ri-shopping-cart-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <a href="product-details.html">
                            <h3>Secret covered in sand</h3>
                        </a>

                        <span class="price">$20.00</span>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img src="assets/images/product/product-3.jpg" alt="Image">

                            <ul>

                                <li>
                                    <a href="index.htm#">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.htm#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <i class="ri-shopping-cart-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <a href="product-details.html">
                            <h3>N is for nature</h3>
                        </a>

                        <span class="price">$08.00</span>
                        <span class="new sell">Sell</span>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img src="assets/images/product/product-4.jpg" alt="Image">

                            <ul>

                                <li>
                                    <a href="index.htm#">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.htm#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <i class="ri-shopping-cart-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <a href="product-details.html">
                            <h3>Life of the candle</h3>
                        </a>

                        <span class="price">$15.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Product View One Area -->
    <div class="modal fade product-view-one" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <span aria-hidden="true">
                        <i class="ri-close-line"></i>
                    </span>
                </button>

                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-view-one-image">
                            <div id="big" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="assets/images/product/product-1.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-2.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-3.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-4.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-5.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-6.jpg" alt="Image">
                                </div>
                            </div>

                            <div id="thumbs" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="assets/images/product/product-1.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-2.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-3.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-4.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-5.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-6.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="product-content">
                            <h3>
                                <a href="index.htm#">Natural</a>
                            </h3>

                            <div class="price">
                                <span class="new-price">$10.00</span>
                            </div>

                            <div class="product-review">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                                <a href="index.htm#" class="rating-count">4 Reviews</a>
                            </div>

                            <ul class="product-info">
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam ad reprehenderit
                                        fuga nam, non odit necessitatibus facilis beatae temporibus</p>
                                </li>
                                <li>
                                    <span>Availability:</span> <a href="index.htm#">In Stock (8 Items)</a>
                                </li>
                                <li>
                                    <span>Product Type:</span> <a href="index.htm#">Book</a>
                                </li>
                            </ul>

                            <div class="product-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class="ri-subtract-line"></i>
                                    </span>

                                    <input type="text" value="1">

                                    <span class="plus-btn">
                                        <i class="ri-add-line"></i>
                                    </span>
                                </div>

                                <a href="cart.html" class="default-btn">
                                    Add to cart
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>

                            <div class="share-this-product">
                                <h3>Share this product</h3>

                                <ul>
                                    <li>
                                        <a href="javascript:if(confirm('https://www.facebook.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.facebook.com/'"
                                            target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:if(confirm('https://www.instagram.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.instagram.com/'"
                                            target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:if(confirm('https://www.linkedin.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.linkedin.com/'"
                                            target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:if(confirm('https://twitter.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://twitter.com/'"
                                            target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product View One Area -->

@endsection
