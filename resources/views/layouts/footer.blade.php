  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-heading">Về Vnexpress</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                    <p><a href="about.html" class="footer-link-more">Tìm hiểu thêm</a></p>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Điều hướng</h3>
                    <ul class="footer-links list-unstyled">
                        <li><a href="{{ route('Homepages') }}"><i class="bi bi-chevron-right"></i> Trang chủ</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Danh mục</a></li>
                        <li><a href="{{ route('About') }}"><i class="bi bi-chevron-right"></i> Giới thiệu</a></li>
                        <li><a href="{{ route('Contact') }}"><i class="bi bi-chevron-right"></i> Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Danh mục</h3>
                    <ul class="footer-links list-unstyled">
                        @foreach ($Categories as $key => $list)
                            <li><a href="{{ route('Category',$list->id) }}"><i class="bi bi-chevron-right"></i>{{ $list->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h3 class="footer-heading">Bài viết gần đây</h3>

                    <ul class="footer-links footer-blog-entry list-unstyled">
                        @foreach ($Postsfooter->take(4) as $key => $listfooter)
                            <li>
                                <a href="{{ route('Post',$listfooter->id) }}" class="d-flex align-items-center">
                                    <img src="{{ asset('backend/uploads/' . $listfooter->img) }}" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">{{ $listfooter->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $listfooter->ngay_dang }}</span></div>
                                        <span>{{ $listfooter->name }}</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="copyright">
                        © Bản quyền <strong><span>ZenBlog</span></strong>. Đã được bảo lưu quyền
                    </div>

                    <div class="credits">
                        <!-- Tất cả các liên kết trong chân trang phải được giữ nguyên. -->
                        <!-- Bạn chỉ có thể xóa các liên kết nếu bạn mua phiên bản pro. -->
                        <!-- Thông tin cấp phép: https://bootstrapmade.com/license/ -->
                        <!-- Mua phiên bản pro với mẫu liên hệ PHP/AJAX hoạt động: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Thiết kế bởi <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>