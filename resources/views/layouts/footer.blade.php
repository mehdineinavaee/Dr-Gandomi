  <!-- Start Footer Area -->
  <footer class="footer-area black-bg-color">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-lg-4 col-sm-4">
                  <div class="single-footer-widget bg-f9f5f1">
                      <a href="index.html" class="logo">
                          <img src={{ asset('storage/settings/' . $settings->logo) }} alt={{ $settings->address }}>
                      </a>

                      <p class="justify">
                          {!! $settings->footer_description !!}
                      </p>
                  </div>
              </div>

              <div class="col-lg-4 col-sm-4">
                  <div class="single-footer-widget">
                      <h3>لینک مفید</h3>

                      <ul class="import-link">
                          <li>
                              <a href={{ route('courses.index') }}>دوره ها</a>
                          </li>
                          <li>
                              <a href={{ route('blog_right_sidebars.index') }}>بلاگ</a>
                          </li>
                          <li>
                              <a href={{ route('faqs.index') }}>پرسش و پاسخ</a>
                          </li>
                          <li>
                              <a href={{ route('events.index') }}>رویدادها</a>
                          </li>
                          <li>
                              <a href={{ route('products.index') }}>محصولات</a>
                          </li>
                      </ul>
                  </div>
              </div>

              <div class="col-lg-4 col-sm-4">
                  <div class="single-footer-widget">
                      <h3>با ما در تماس باشید</h3>

                      <ul class="address">
                          <li class="location">
                              <i class="ri-map-pin-line"></i>
                              <span>آدرس</span>
                              {{ $settings->address }}
                          </li>
                          <li>
                              <i class="ri-mail-line"></i>
                              <span>ایمیل</span>
                              <span>{{ $settings->email }}</span>
                          </li>
                          <li>
                              <i class="ri-phone-line"></i>
                              <span>تلفن</span>
                              <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End Footer Area -->
