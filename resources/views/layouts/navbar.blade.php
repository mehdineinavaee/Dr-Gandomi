<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src={{ asset('storage/settings/' . $settings->logo) }} alt="logo">
                    </a>
                </div>

                <div class="others-options-for-mobile-devices">
                    <ul>
                        <li>
                            <button type="button" class="search-btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModalsrc">
                                <i class="ri-search-line"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src={{ asset('storage/settings/' . $settings->logo) }} alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">صفحه اصلی</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('courses.index') }}" class="nav-link">دوره ها</a>
                        </li>

                        <li class="nav-item">
                            <a href="JavaScript:void(0)" class="nav-link">
                                صفحات
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('blog_right_sidebars.index') }}" class="nav-link">بلاگ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('our_professors.index') }}" class="nav-link">اساتید</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('faqs.index') }}" class="nav-link">پرسش و پاسخ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gallery.index') }}" class="nav-link">گالری</a>
                                </li>
                                <li class="nav-item">
                                    <a href="JavaScript:void(0)" class="nav-link">
                                        کاربر
                                        <i class="ri-arrow-left-s-line"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('my_account.index') }}" class="nav-link">حساب من</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="log-in.html" class="nav-link">ورود</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">ثبت نام</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('not_found_page.index') }}" class="nav-link">صفحه 404</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="JavaScript:void(0)" class="nav-link">
                                رویدادها
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('events.index') }}" class="nav-link">رویدادها</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('event_details.index') }}" class="nav-link">جزئیات رویداد</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="JavaScript:void(0)" class="nav-link">
                                فروشگاه
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('products.index') }}" class="nav-link">محصولات</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cart.index') }}" class="nav-link">کارت</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('wishlist.index') }}" class="nav-link">لیست علاقه مندی ها</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}" class="nav-link">تماس با ما</a>
                        </li>

                        <li class="nav-item">
                            <a href="JavaScript:void(0)" class="nav-link">
                                مدیریت
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('settings.edit', ['setting' => 1]) }}" class="nav-link">
                                        تنظیمات
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="JavaScript:void(0)" class="nav-link">
                                        دوره ها
                                        <i class="ri-arrow-left-s-line"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('categories.index') }}" class="nav-link">دسته بندی ها
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('modes.index') }}" class="nav-link">روش برگزاری</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('courses.admin') }}" class="nav-link">پنل دوره
                                                ها
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog_right_sidebars.admin') }}" class="nav-link">
                                        پنل بلاگ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('our_professors.admin') }}" class="nav-link">
                                        پنل اساتید
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('faqs.admin') }}" class="nav-link">
                                        پنل پرسش و پاسخ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('galleries.admin') }}" class="nav-link">
                                        پنل گالری
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="JavaScript:void(0)" class="nav-link">
                                        محصولات
                                        <i class="ri-arrow-left-s-line"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('publishers.index') }}" class="nav-link">انتشارات
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('authors.index') }}" class="nav-link">نویسنده ها</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('translators.index') }}" class="nav-link">مترجمان</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('products.admin') }}" class="nav-link">پنل محصولات
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact.edit', ['contact' => 1]) }}" class="nav-link">
                                        پنل تماس با ما
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul>
                            <li>
                                <a href="#" class="default-btn">
                                    ثبت نام
                                </a>
                            </li>
                            <li>
                                <button type="button" class="search-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalsrc">
                                    <i class="ri-search-line"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
