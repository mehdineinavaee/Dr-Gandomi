<!-- Start Top Header -->
<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                @if ($settings->phone_number)
                    <ul class="header-left-content">
                        <li>
                            <a href="tel:{{ $settings->phone_number }}">
                                <i class="ri-phone-fill"></i>
                                {{ $settings->phone_number }}
                            </a>
                        </li>
                    </ul>
                @endif
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="header-right-content">
                    <div class="languages-switcher">
                        <i class="ri-global-line"></i>
                        <select>
                            <option value="1">فارسی</option>
                            <option value="2">English</option>
                        </select>
                    </div>

                    <div class="my-account">
                        <a href="{{ route('my_account.index') }}">
                            <i class="ri-user-fill"></i>
                        </a>
                    </div>

                    <div class="cart-icon">
                        <a href="{{ route('cart.index') }}">
                            <i class="ri-shopping-cart-line"></i>
                            <span>03</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Top Header -->
