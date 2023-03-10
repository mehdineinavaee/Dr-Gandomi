@extends('layouts.app')
@section('title', 'کارت')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'کارت', 'url' => url()->current(), 'bg' => $settings->cart]],
    ])
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
                                        <th scope="col">حذف</th>
                                        <th scope="col">تصویر</th>
                                        <th scope="col">نام محصول</th>
                                        <th scope="col">قیمت</th>
                                        <th scope="col">تعداد</th>
                                        <th scope="col">قیمت نهایی</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($products->isEmpty())
                                        <tr>
                                            <td colspan="6">موردی یافت نشد</td>
                                        </tr>
                                    @else
                                        @foreach ($products as $product)
                                            <tr>
                                                <td class="trash">
                                                    <a class="remove delete_from_cart">
                                                        <i class="ri-delete-bin-line"></i>
                                                        <form
                                                            action="{{ route('cart.destroy', ['product' => $product->id]) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    </a>
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href={{ route('products.show', ['product' => $product->id]) }}>
                                                        <img src={{ asset('storage/products/' . $product->cover) }}
                                                            alt={{ $product->title }}>
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href={{ route('products.show', ['product' => $product->id]) }}>{{ $product->title }}
                                                    </a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="unit-amount">{{ number_format($product->price) }}
                                                        تومان</span>
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
                                                    <span class="subtotal-amount">{{ number_format($product->total) }}
                                                        تومان</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="cart-totals">
                        <h3 class="cart-checkout-title">خلاصه پرداخت</h3>

                        <ul>
                            <li>هزینه کل محصولات <span>$145.00</span></li>
                            <li>هزینه ارسال <span>$00.00</span></li>
                            <li>جمع نهایی <span>$315.00</span></li>
                            <li><b>هزینه قابل پرداخت</b> <span><b>$145.00</b></span></li>
                        </ul>

                        <a href="checkout.html" class="default-btn">
                            پرداخت در ادامه
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Area -->
@endsection
@push('js')
    <script>
        $('.delete_from_cart').click(function() {
            if (confirm("آیا از حذف اطمینان دارید؟")) {
                $(this).find('form').submit();
            }
        });
    </script>
@endpush
