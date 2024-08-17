@extends('index')
@section('content')
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-9" data-aos="fade-up">
            @if ($Posts->isNotEmpty())
            <h3 class="category-title">Danh Mục: {{ $Categories->where('id', $Posts->first()->categories_id)->first()->name }}</h3>
            @foreach ($Posts as $key => $list)
            <div class="d-md-flex post-entry-2 half">
               <a href="{{ route('Post',$list->id) }}" class="me-4 thumbnail">
               <img src="{{ asset('backend/uploads/'. $list->img) }}" alt="" class="img-fluid">
               </a>
               <div>
                  <div class="post-meta"><span class="date">{{ $list->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $list->ngay_dang }}</span></div>
                  <h3><a href="{{ route('Post',$list->id) }}">{{ $list->name }}</a></h3>
                  <p>{{ $list->tomtat }}</p>
                  <div class="d-flex align-items-center author">
                     <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                     <div class="name">
                        <h3 class="m-0 p-0">{{ $list->tac_gia }}</h3>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            @else
            <p>Không có bài viết nào trong danh mục này!</p>
            @endif
            <div class="text-start py-4">
               <div class="pagination">
                  {{ $Posts->links("pagination::bootstrap-4") }}
                  {{-- <a href="#" class="prev" custom-pagination><<</a>
                  <a href="#" class="active">{!! $Posts->links("pagination::bootstrap-4") !!}</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a>
                  <a href="#" class="next">>></a> --}}
               </div>
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
                  <!-- Mới nhất -->
                  <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                     @foreach ($PostNew->take(6) as $key => $showlist)
                        <div class="post-entry-1 border-bottom">
                           <div class="post-meta"><span class="date">{{ $showlist->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $showlist->ngay_dang }}</span></div>
                           <h2 class="mb-2"><a href="{{ route('Post',$showlist->id) }}">{{ $showlist->name }}</a></h2>
                           <span class="author mb-3 d-block">{{ $showlist->tac_gia }}</span>
                        </div>
                     @endforeach
                     
                  </div>
                  <!-- Kết thúc Mới nhất -->
                  <!-- Xu hướng -->
                  <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                     @foreach ($luotxem as $key => $showlist)
                        <div class="post-entry-1 border-bottom">
                           <div class="post-meta"><span class="date">{{ $showlist->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $showlist->ngay_dang }}</span></div>
                           <h2 class="mb-2"><a href="{{ route('Post',$showlist->id) }}">{{ $showlist->name }}</a></h2>
                           <span class="author mb-3 d-block">{{  $showlist->tac_gia }}</span>
                        </div>
                     @endforeach
                  </div>
                  <!-- Kết thúc xu hướng -->

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
             </div><!-- End Video -->
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