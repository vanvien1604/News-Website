@extends('index')
@section('content')
<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
   <div class="container-md" data-aos="fade-in">
      <div class="row">
         <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
               <div class="swiper-wrapper">
                  @foreach ($thinh_hanh as $key => $hot)
                     <div class="swiper-slide">
                        <a href="{{ route('Post',$hot->id) }}" class="img-bg d-flex align-items-end" style="background-image: url('{{ asset('backend/uploads/'. $hot->img) }}');">
                           <div class="img-bg-inner">
                              <h2>{{ $hot->name }}</h2>
                              <p>{{ $hot->description }}</p>
                           </div>
                        </a>
                     </div>
                  @endforeach
               </div>
               <div class="custom-swiper-button-next">
                  <span class="bi-chevron-right"></span>
               </div>
               <div class="custom-swiper-button-prev">
                  <span class="bi-chevron-left"></span>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Hero Slider Section -->
@if(isset($tk) && !empty($Search))
<div class="container" data-aos="fade-up">
   @if ($Posts->isNotEmpty())
   <h3 class="category-title" style="display: flex">
      Tìm kiếm: 
      <p class="category-title mx-1" style="color: brown;"> {{ $tk }}</p>
   </h3>
   @if($Search->isEmpty())
   <p class="category-title" style="color: brown;">Không tìm thấy kết quả!</p>
   @else
   @foreach ($Search as $key => $list)
   <div class="d-md-flex post-entry-2 half">
      <a href="{{ route('Post',$list->id) }}" class="me-4 thumbnail">
      <img src="{{ asset('backend/uploads/'. $list->img) }}" alt="" class="img-fluid">
      </a>
      <div>
         <div class="post-meta"><span class="date">{{ $list->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $list->ngay_dang }}</span></div>
         <h3><a href="#">{{ $list->name }}</a></h3>
         <p>{{ $list->tomtat }}</p>
         <div class="d-flex align-items-center author">
            <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
            <div class="name">
               <h3 class="m-0 p-0">Wade Warren</h3>
            </div>
         </div>
      </div>
   </div>
   @endforeach
   @endif
   @else
   <p class="category-title" style="color: brown;">Không có bài viết nào trong danh mục này!</p>
   @endif
</div>
@else
<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
   <div class="container" data-aos="fade-up">
      <div class="row g-5">
         <div class="col-lg-4">
            @foreach ($Posts as $key => $showhome)
            @if ($key == 0)
               <div class="post-entry-1 lg">
                  <a href="{{ route('Post',$showhome->id) }}"><img src="{{ asset('backend/uploads/'.$showhome->img) }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">{{ $showhome->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $showhome->ngay_dang }}</span></div>
                  <h2><a href="{{ route('Post',$showhome->id) }}">{{ $showhome->name }}</a></h2>
                  <p class="mb-4 d-block">{{ $showhome->description }}</p>
                  <div class="d-flex align-items-center author">
                     <div class="photo"><img src="{{ asset('frontend/img/person-1.jpg') }}" alt="" class="img-fluid"></div>
                     <div class="name">
                        <h3 class="m-0 p-0">{{ $showhome->tac_gia }}</h3>
                     </div>
                  </div>
               </div>
            @endif
            @endforeach
         </div>
         <div class="col-lg-8">
            <div class="row g-5">
               <div class="col-lg-4 border-start custom-border">
                  @foreach ($Posts as $key => $showhome)
                  @if ($key > 0 && $key <= 3)
                     <div class="post-entry-1">
                        <a href="{{ route('Post',$showhome->id) }}"><img src="{{ asset('backend/uploads/'.$showhome->img) }}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{ $showhome->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $showhome->ngay_dang }}</span></div>
                        <h2><a href="{{ route('Post',$showhome->id) }}">{{ $showhome->name }}</a></h2>
                     </div>
                  @endif
                  @endforeach
               </div>
               <div class="col-lg-4 border-start custom-border">
                  @foreach ($Posts as $key => $showhome)
                  @if ($key > 3 && $key <= 6)
                     <div class="post-entry-1">
                        <a href="{{ route('Post',$showhome->id) }}"><img src="{{ asset('backend/uploads/'.$showhome->img) }}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{ $showhome->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $showhome->ngay_dang }}</span></div>
                        <h2><a href="{{ route('Post',$showhome->id) }}">{{ $showhome->name }}</a></h2>
                     </div>
                  @endif
                  @endforeach
               </div>
               <!-- Trending Section -->
               <div class="col-lg-4">
                  <div class="trending">
                     <h3>Xu hướng</h3>
                     <ul class="trending-post">
                        @foreach ($luotxem as $key => $view)
                           <li>
                              <a href="{{ route('Post',$view->id) }}">
                                 <span class="number">{{ $key + 1 }}</span>
                                 <h3>{{ $view->name }}</h3>
                                 <span class="author">{{ $view->tac_gia }}</span>
                              </a>
                           </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <!-- End Trending Section -->
            </div>
         </div>
      </div>
      <!-- End .row -->
   </div>
</section>

<!-- End Post Grid Section -->
<!-- ======= Culture Category Section ======= -->
<section class="category-section">
   <div class="container" data-aos="fade-up">
      @foreach ($Categories_Home as $key => $titleHome)
      <div class="section-header d-flex justify-content-between align-items-center mb-5">
         <h2>{{ $titleHome->name }}</h2>
            <div><a href="{{ route('Category',$titleHome->id) }}" class="more">Xem Tất Cả {{ $titleHome->first()->name }}</a></div>
      </div>

      <div class="row">
         <div class="col-md-9">
            @foreach ($titleHome->post as $key => $postHome)
                @if ($key == 0)
                    <div class="d-lg-flex post-entry-2">
                        <a href="{{ route('Post', $postHome->id) }}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                            <img src="{{ asset('backend/uploads/' . $postHome->img) }}" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta">
                                <span class="date">Văn hóa</span>
                                <span class="mx-1">&bullet;</span>
                                <span>{{ $postHome->ngay_dang }}</span>
                            </div>
                            <h3><a href="{{ route('Post', $postHome->id) }}">{{ $postHome->name }}</a></h3>
                            <p>{{ $postHome->description }}</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="{{ asset('frontend/img/person-2.jpg') }}" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">{{ $postHome->tac_gia }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        
            <div class="row">
                <div class="col-lg-4">
                    @foreach ($titleHome->post as $key => $postHome)
                        @if ($key == 1)
                            <div class="post-entry-1 border-bottom">
                                <a href="{{ route('Post', $postHome->id) }}">
                                    <img src="{{ asset('backend/uploads/' . $postHome->img) }}" alt="" class="img-fluid">
                                </a>
                                <div class="post-meta">
                                    <span class="date">Văn hóa</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>{{ $postHome->ngay_dang }}</span>
                                </div>
                                <h2 class="mb-2"><a href="{{ route('Post', $postHome->id) }}">{{ $postHome->name }}</a></h2>
                                <span class="author mb-3 d-block">{{ $postHome->tac_gia }}</span>
                                <p class="mb-4 d-block">{{ $postHome->description }}</p>
                            </div>
                        @endif
                    @endforeach
        
                    @foreach ($titleHome->post as $key => $postHome)
                        @if ($key == 2)
                    <div class="post-entry-1">
                        <div class="post-meta"><span class="date">Văn hóa</span> <span class="mx-1">&bullet;</span> <span>{{ $postHome->ngay_dang }}</span></div>
                        <h2 class="mb-2"><a href="{{ route('Post', $postHome->id) }}">{{ $postHome->name }}</a></h2>
                        <span class="author mb-3 d-block">{{ $postHome->tac_gia }}</span>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-lg-8">
                    @foreach ($titleHome->post as $key => $postHome)
                        @if ($key == 3)
                            <div class="post-entry-1">
                                <a href="{{ route('Post', $postHome->id) }}"><img src="{{ asset('backend/uploads/' . $postHome->img) }}" alt="" class="img-fluid"></a>
                                <div class="post-meta">
                                    <span class="date">Văn hóa</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>{{ $postHome->ngay_dang }}</span>
                                </div>
                                <h2 class="mb-2"><a href="{{ route('Post', $postHome->id) }}">{{ $postHome->name }}</a></h2>
                                <span class="author mb-3 d-block">{{ $postHome->tac_gia }}</span>
                                <p class="mb-4 d-block">{{ $postHome->description }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        
         <div class="col-md-3">
            @foreach ($titleHome->post->take(6) as $postSidebar)
               <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date">Văn hóa</span> <span class="mx-1">&bullet;</span> <span>{{ $postSidebar->ngay_dang }}</span></div>
                  <h2 class="mb-2"><a href="{{ route('Post',$postSidebar->id) }}">{{ $postSidebar->name }}</a></h2>
                  <span class="author mb-3 d-block">{{ $postSidebar->tac_gia }}</span>
               </div>
            @endforeach
         </div>
      </div>
      @endforeach
   </div>
</section>
{{-- <!-- End Culture Category Section -->
<!-- ======= Phần Danh Mục Kinh Doanh ======= -->
<section class="category-section">
   <div class="container" data-aos="fade-up">
      <div class="section-header d-flex justify-content-between align-items-center mb-5">
         <h2>Kinh Doanh</h2>
         <div><a href="category.html" class="more">Xem Tất Cả Danh Mục Kinh Doanh</a></div>
      </div>
      <div class="row">
         <div class="col-md-9 order-md-2">
            <div class="d-lg-flex post-entry-2">
               <a href="single-post.html" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
               <img src="{{ asset('frontend/img/post-landscape-3.jpg') }}" alt="" class="img-fluid">
               </a>
               <div>
                  <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                  <h3><a href="single-post.html">Con trai của Huấn luyện viên bóng đá John Gruden, Deuce Gruden hiện đang làm gì?</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                  <div class="d-flex align-items-center author">
                     <div class="photo"><img src="{{ asset('frontend/img/person-4.jpg') }}" alt="" class="img-fluid"></div>
                     <div class="name">
                        <h3 class="m-0 p-0">Wade Warren</h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <div class="post-entry-1 border-bottom">
                     <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-5.jpg') }}" alt="" class="img-fluid"></a>
                     <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">11 Công Việc Bán Thời Gian Từ Xa Bạn Có Thể Thực Hiện Ngay Bây Giờ</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                     <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                  </div>
                  <div class="post-entry-1">
                     <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">5 Mẹo Khởi Nghiệp Tuyệt Vời Dành Cho Các Nhà Sáng Lập Nữ</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="post-entry-1">
                     <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-7.jpg') }}" alt="" class="img-fluid"></a>
                     <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">Cách Tránh Phân Tâm Và Giữ Tập Trung Trong Các Cuộc Gọi Video?</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                     <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="post-entry-1 border-bottom">
               <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2 class="mb-2"><a href="single-post.html">Cách Tránh Phân Tâm Và Giữ Tập Trung Trong Các Cuộc Gọi Video?</a></h2>
               <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
            <div class="post-entry-1 border-bottom">
               <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2 class="mb-2"><a href="single-post.html">17 Hình Ảnh Tóc Dài Trung Bình Được Tỉa Tầng Sẽ Truyền Cảm Hứng Cho Kiểu Tóc Mới Của Bạn</a></h2>
               <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
            <div class="post-entry-1 border-bottom">
               <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2 class="mb-2"><a href="single-post.html">9 Kiểu Tóc Nửa Đầu/Nửa Xuống Cho Tóc Dài Và Trung Bình</a></h2>
               <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
            <div class="post-entry-1 border-bottom">
               <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2 class="mb-2"><a href="single-post.html">Bảo Hiểm Nhân Thọ Và Thai Kỳ: Hướng Dẫn Cho Các Mẹ Đi Làm</a></h2>
               <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
            <div class="post-entry-1 border-bottom">
               <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2 class="mb-2"><a href="single-post.html">Các Mặt Nạ Tự Làm Tại Nhà Tốt Nhất Để Giữ Da Sạch Mụn</a></h2>
               <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
            <div class="post-entry-1 border-bottom">
               <div class="post-meta"><span class="date">Kinh Doanh</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2 class="mb-2"><a href="single-post.html">10 Mẹo Cuộc Sống Thay Đổi Đáng Kể Mà Mỗi Mẹ Đi Làm Nên Biết</a></h2>
               <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Phần Danh Mục Kinh Doanh -->
<!-- ======= Phần Danh Mục Lối Sống ======= -->
<section class="category-section">
   <div class="container" data-aos="fade-up">
      <div class="section-header d-flex justify-content-between align-items-center mb-5">
         <h2>Lối Sống</h2>
         <div><a href="category.html" class="more">Xem Tất Cả Danh Mục Lối Sống</a></div>
      </div>
      <div class="row g-5">
         <div class="col-lg-4">
            <div class="post-entry-1 lg">
               <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-8.jpg') }}" alt="" class="img-fluid"></a>
               <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2><a href="single-post.html">11 Công Việc Bán Thời Gian Từ Xa Bạn Có Thể Thực Hiện Ngay Bây Giờ</a></h2>
               <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>
               <div class="d-flex align-items-center author">
                  <div class="photo"><img src="{{ asset('frontend/img/person-7.jpg') }}" alt="" class="img-fluid"></div>
                  <div class="name">
                     <h3 class="m-0 p-0">Esther Howard</h3>
                  </div>
               </div>
            </div>
            <div class="post-entry-1 border-bottom">
               <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2 class="mb-2"><a href="single-post.html">Các Mặt Nạ Tự Làm Tại Nhà Tốt Nhất Để Giữ Da Sạch Mụn</a></h2>
               <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
            <div class="post-entry-1">
               <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
               <h2 class="mb-2"><a href="single-post.html">10 Mẹo Cuộc Sống Thay Đổi Đáng Kể Mà Mỗi Mẹ Đi Làm Nên Biết</a></h2>
               <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="row g-5">
               <div class="col-lg-4 border-start custom-border">
                  <div class="post-entry-1">
                     <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-6.jpg') }}" alt="" class="img-fluid"></a>
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2><a href="single-post.html">Hãy Quay Lại Công Việc, New York</a></h2>
                  </div>
                  <div class="post-entry-1">
                     <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-5.jpg') }}" alt="" class="img-fluid"></a>
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>17 Tháng 7, '22</span></div>
                     <h2><a href="single-post.html">Cách Tránh Phân Tâm Và Giữ Tập Trung Trong Các Cuộc Gọi Video?</a></h2>
                  </div>
                  <div class="post-entry-1">
                     <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-4.jpg') }}" alt="" class="img-fluid"></a>
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>15 Tháng 3, '22</span></div>
                     <h2><a href="single-post.html">Tại Sao Craigslist Tampa Là Một Trong Những Nơi Thú Vị Nhất Trên Mạng?</a></h2>
                  </div>
               </div>
               <div class="col-lg-4 border-start custom-border">
                  <div class="post-entry-1">
                     <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-3.jpg') }}" alt="" class="img-fluid"></a>
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2><a href="single-post.html">6 Bước Dễ Dàng Để Tạo Merch Đáng Yêu Của Bạn Cho Instagram</a></h2>
                  </div>
                  <div class="post-entry-1">
                     <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-2.jpg') }}" alt="" class="img-fluid"></a>
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>1 Tháng 3, '22</span></div>
                     <h2><a href="single-post.html">10 Mẹo Cuộc Sống Thay Đổi Đáng Kể Mà Mỗi Mẹ Đi Làm Nên Biết</a></h2>
                  </div>
                  <div class="post-entry-1">
                     <a href="single-post.html"><img src="{{ asset('frontend/img/post-landscape-1.jpg') }}" alt="" class="img-fluid"></a>
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2><a href="single-post.html">5 Mẹo Khởi Nghiệp Tuyệt Vời Dành Cho Các Nhà Sáng Lập Nữ</a></h2>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="post-entry-1 border-bottom">
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">Cách Tránh Phân Tâm Và Giữ Tập Trung Trong Các Cuộc Gọi Video?</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
                  <div class="post-entry-1 border-bottom">
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">17 Hình Ảnh Tóc Dài Trung Bình Được Tỉa Tầng Sẽ Truyền Cảm Hứng Cho Kiểu Tóc Mới Của Bạn</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
                  <div class="post-entry-1 border-bottom">
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">9 Kiểu Tóc Nửa Đầu/Nửa Xuống Cho Tóc Dài Và Trung Bình</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
                  <div class="post-entry-1 border-bottom">
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">Bảo Hiểm Sự Sống Và Thai Kỳ: Hướng Dẫn Cho Một Mẹ Đi Làm</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
                  <div class="post-entry-1 border-bottom">
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">Các Mặt Nạ Tự Làm Tại Nhà Tốt Nhất Để Giữ Da Sạch Mụn</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
                  <div class="post-entry-1 border-bottom">
                     <div class="post-meta"><span class="date">Lối Sống</span> <span class="mx-1">&bullet;</span> <span>5 Tháng 7, '22</span></div>
                     <h2 class="mb-2"><a href="single-post.html">10 Mẹo Cuộc Sống Thay Đổi Đáng Kể Mà Mỗi Mẹ Đi Làm Nên Biết</a></h2>
                     <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Kết thúc .row -->
   </div>
</section>
<!-- Kết thúc Phần Danh Mục Lối Sống --> --}}
@endif
@endsection