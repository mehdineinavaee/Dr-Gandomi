<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </a>
                </div>

                <div class="others-options-for-mobile-devices">
                    <ul>
                        <li>
                            <a href="{{ route('application_form.index') }}" class="default-btn">
                                Application Form
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
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
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
                                    <a href="{{ route('about.index') }}" class="nav-link">درباره ما</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('application_form.index') }}" class="nav-link">فرم کاربردی</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('our_professors.index') }}" class="nav-link">اساتید</a>
                                </li>
                                <li class="nav-item">
                                    <a href="JavaScript:void(0)" class="nav-link">
                                        دانشگاه
                                        <i class="ri-arrow-left-s-line"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('campus_information.index') }}" class="nav-link">اطلاعات
                                                دانشگاه</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('campus_experience.index') }}" class="nav-link">تجربیات
                                                دانشگاه</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('alumni.index') }}" class="nav-link">فارغ التحصیلان</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('study_online.index') }}" class="nav-link">مطالعه
                                                آنلاین</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admission.index') }}" class="nav-link">پذیرش ها</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('FAQ.index') }}" class="nav-link">پرسش و پاسخ</a>
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
                                    <a href="{{ route('privacy_policy.index') }}" class="nav-link">سیاست حفظ حریم
                                        خصوصی</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('terms_conditions.index') }}" class="nav-link">شرایط و
                                        ضوابط</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('coming_soon.index') }}" class="nav-link">به زودی</a>
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
                                <li class="nav-item">
                                    <a href="{{ route('checkout.index') }}" class="nav-link">پرداخت</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('product_details.index') }}" class="nav-link">جزئیات پرداخت</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="JavaScript:void(0)" class="nav-link">
                                بلاگ
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('blog_left_sidebar.index') }}" class="nav-link">بلاگ چپ
                                        چین</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog_right_sidebar.index') }}" class="nav-link">بلاگ راست
                                        چین</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog_details.index') }}" class="nav-link">جزئیات بلاگ</a>
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
                                    <a href="{{ route('blog_left_sidebar.index') }}" class="nav-link">دوره ها
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog_right_sidebar.index') }}" class="nav-link">دسته بندی ها
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog_details.index') }}" class="nav-link">روش برگزاری</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul>
                            <li>
                                <a href="{{ route('application_form.index') }}" class="default-btn">
                                    فرم کاربردی
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
