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
                      <ul class="social-icon">
                          @if (
                              $settings->facebook == null &&
                                  $settings->instagram == null &&
                                  $settings->linkedin == null &&
                                  $settings->twitter == null)
                              <li>
                                  <span></span>
                              </li>
                          @else
                              <span>ما را دنبال کنید</span>
                          @endif
                          @if ($settings->facebook)
                              <li>
                                  <a href="{{ $settings->facebook }}" target="_blank">
                                      <i class="ri-facebook-fill"></i>
                                  </a>
                              </li>
                          @endif
                          @if ($settings->instagram)
                              <li>
                                  <a href="{{ $settings->instagram }}" target="_blank">
                                      <i class="ri-instagram-line"></i>
                                  </a>
                              </li>
                          @endif
                          @if ($settings->linkedin)
                              <li>
                                  <a href="{{ $settings->linkedin }}" target="_blank">
                                      <i class="ri-linkedin-fill"></i>
                                  </a>
                              </li>
                          @endif
                          @if ($settings->twitter)
                              <li>
                                  <a href="{{ $settings->twitter }}" target="_blank">
                                      <i class="ri-twitter-fill"></i>
                                  </a>
                              </li>
                          @endif
                      </ul>
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
                      @if ($settings->address == null && $settings->email == null && $settings->tel == null)
                          <span></span>
                      @else
                          <h3>با ما در تماس باشید</h3>
                      @endif

                      <ul class="address">
                          @if ($settings->address)
                              <li class="location">
                                  <i class="ri-map-pin-line"></i>
                                  <span>آدرس</span>
                                  {{ $settings->address }}
                              </li>
                          @endif
                          @if ($settings->email)
                              <li>
                                  <i class="ri-mail-line"></i>
                                  <span>ایمیل</span>
                                  <span>{{ $settings->email }}</span>
                              </li>
                          @endif
                          @if ($settings->tel)
                              <li>
                                  <i class="ri-phone-line"></i>
                                  <span>تلفن</span>
                                  <a href="tel:{{ $settings->tel }}">{{ $settings->tel }}</a>
                              </li>
                          @endif
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End Footer Area -->
