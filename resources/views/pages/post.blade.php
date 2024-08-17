@extends('index')
@section('content')
<section class="single-post-content">
   <div class="container">
      <div class="row">
         <div class="col-md-9 post-content" data-aos="fade-up">
            <!-- ======= Nội dung Bài viết ======= -->
            <div class="single-post">
               @if ($Posts)
               <div class="post-meta"><span class="date">{{ $Posts->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $Posts->ngay_dang }}</span></div>
               <h1 class="mb-5">{{ $Posts->name }}</h1>
               <p><span class="firstcharacter">{{ substr($Posts->noidung, 0, 1) }}</span>{{ substr($Posts->noidung, 1) }}</p>
               @if ($Posts->img)
               <figure class="my-4 text-center">
                  <img src="{{ asset('backend/uploads/' . $Posts->img) }}" alt="{{ $Posts->name }}" class="img-fluid" style="width: 900px; height: 550px; object-fit: cover;">
                  {{-- 
                  <figcaption>{{ $Post->caption ?? 'Chú thích hình ảnh' }}</figcaption>
                  --}}
               </figure>
               @endif
               <p>{{ $Posts->noidung }}</p>
               <div class="comments">
                  <h5 class="comment-title py-4">2 Bình luận</h5>
                  <div class="comment d-flex mb-4">
                     <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                           <img class="avatar-img" src="{{ asset('frontend/img/person-5.jpg') }}" alt="" class="img-fluid">
                        </div>
                     </div>
                     <div class="flex-grow-1 ms-2 ms-sm-3">
                        <div class="comment-meta d-flex align-items-baseline">
                           <h6 class="me-2">Jordan Singer</h6>
                           <span class="text-muted">2d</span>
                        </div>
                        <div class="comment-body">
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum at amet doloremque qui magni, placeat deserunt pariatur itaque laudantium impedit aliquam eligendi repellendus excepturi quibusdam nobis esse accusantium.
                        </div>
                        <div class="comment-replies bg-light p-3 mt-3 rounded">
                           <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 phản hồi</h6>
                           <div class="reply d-flex mb-4">
                              <div class="flex-shrink-0">
                                 <div class="avatar avatar-sm rounded-circle">
                                    <img class="avatar-img" src="{{ asset('frontend/img/person-4.jpg') }}" alt="" class="img-fluid">
                                 </div>
                              </div>
                              <div class="flex-grow-1 ms-2 ms-sm-3">
                                 <div class="reply-meta d-flex align-items-baseline">
                                    <h6 class="mb-0 me-2">Brandon Smith</h6>
                                    <span class="text-muted">2d</span>
                                 </div>
                                 <div class="reply-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 </div>
                              </div>
                           </div>
                           <div class="reply d-flex">
                              <div class="flex-shrink-0">
                                 <div class="avatar avatar-sm rounded-circle">
                                    <img class="avatar-img" src="{{ asset('frontend/img/person-3.jpg') }}" alt="" class="img-fluid">
                                 </div>
                              </div>
                              <div class="flex-grow-1 ms-2 ms-sm-3">
                                 <div class="reply-meta d-flex align-items-baseline">
                                    <h6 class="mb-0 me-2">James Parsons</h6>
                                    <span class="text-muted">1d</span>
                                 </div>
                                 <div class="reply-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore sed eos sapiente, praesentium.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment d-flex">
                     <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                           <img class="avatar-img" src="{{ asset('frontend/img/person-2.jpg') }}" alt="" class="img-fluid">
                        </div>
                     </div>
                     <div class="flex-shrink-1 ms-2 ms-sm-3">
                        <div class="comment-meta d-flex">
                           <h6 class="me-2">Santiago Roberts</h6>
                           <span class="text-muted">4d</span>
                        </div>
                        <div class="comment-body">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Comments -->
               <!-- ======= Comments Form ======= -->
               <div class="row justify-content-center mt-5">
                  <div class="col-lg-12">
                     <h5 class="comment-title">Để lại bình luận</h5>
                     <div class="row">
                        <div class="col-lg-6 mb-3">
                           <label for="comment-name">Tên</label>
                           <input type="text" class="form-control" id="comment-name" placeholder="Nhập tên của bạn">
                        </div>
                        <div class="col-lg-6 mb-3">
                           <label for="comment-email">Email</label>
                           <input type="text" class="form-control" id="comment-email" placeholder="Nhập email của bạn">
                        </div>
                        <div class="col-12 mb-3">
                           <label for="comment-message">Tin nhắn</label>
                           <textarea class="form-control" id="comment-message" placeholder="Nhập tin nhắn của bạn" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-12">
                           <input type="submit" class="btn btn-primary" value="Gửi bình luận">
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Comments Form -->
               @else
               <p>Bài viết không tìm thấy.</p>
               @endif
            </div>
         </div>
         <div class="col-md-3">
            <!-- ======= Thanh bên ======= -->
            <div class="aside-block">
               <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Mới nhất</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Xu hướng</button>
                  </li>
               </ul>
               <div class="tab-content" id="pills-tabContent">
                  <!-- Nổi bật -->
                  <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                     @foreach ($PostNew->take(6) as $key => $showlist)
                     <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">{{ $showlist->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $showlist->ngay_dang }}</span></div>
                        <h2 class="mb-2"><a href="{{ route('Post',$showlist->id) }}">{{ $showlist->name }}</a></h2>
                        <span class="author mb-3 d-block">{{ $showlist->tac_gia }}</span>
                     </div>
                     @endforeach
                  </div>
                  <!-- Kết thúc Nổi bật -->
                  <!-- Thịnh hành -->
                  <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                     @foreach ($luotxem as $key => $showlist)
                     <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">{{ $showlist->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $showlist->ngay_dang }}</span></div>
                        <h2 class="mb-2"><a href="{{ route('Post',$showlist->id) }}">{{ $showlist->name }}</a></h2>
                        <span class="author mb-3 d-block">{{  $showlist->tac_gia }}</span>
                     </div>
                     @endforeach
                  </div>
                  <!-- Kết thúc Đang thịnh hành -->
               </div>
            </div>
            <div class="aside-block">
               <h3 class="aside-title">Video</h3>
               <div class="video-post">
                  <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="{{ asset('frontend') }}/img/post-landscape-5.jpg" alt="" class="img-fluid">
                  </a>
               </div>
            </div>
            <!-- End Video -->
            <div class="aside-block">
               <h3 class="aside-title">Danh mục</h3>
               <ul class="aside-links list-unstyled">
                  @foreach ($Categories as $key => $list)
                  <li><a href="{{ route('Category',$list->id) }}"><i class="bi bi-chevron-right"></i>{{ $list->name }}</a></li>
                  @endforeach
               </ul>
            </div>
            <!-- Kết thúc Danh mục -->
            <div class="aside-block">
               <h3 class="aside-title">Thẻ</h3>
               <ul class="aside-tags list-unstyled">
                  @foreach ($Categories as $key => $list)
                  <li><a href="{{ route('Category',$list->id) }}">{{ $list->name }}</a></li>
                  @endforeach
               </ul>
            </div>
            <!-- Kết thúc Thẻ -->
         </div>
      </div>
   </div>
</section>
@endsection