@extends('index')
@section('content')
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Về chúng tôi</h1>
                </div>
            </div>

            <div class="row mb-5">

                <div class="d-md-flex post-entry-2 half">
                    <a href="#" class="me-4 thumbnail">
                        <img src="{{ asset('frontend/img/post-landscape-2.jpg') }}" alt="" class="img-fluid">
                    </a>
                    <div class="ps-md-5 mt-4 mt-md-0">
                        <div class="post-meta mt-4">Về chúng tôi</div>
                        <h2 class="mb-4 display-4">Lịch sử Công ty</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                        <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                    </div>
                </div>

                <div class="d-md-flex post-entry-2 half mt-5">
                    <a href="#" class="me-4 thumbnail order-2">
                        <img src="{{ asset('frontend/img/post-landscape-1.jpg') }}" alt="" class="img-fluid">
                    </a>
                    <div class="pe-md-5 mt-4 mt-md-0">
                        <div class="post-meta mt-4">Sứ mệnh &amp; Tầm nhìn</div>
                        <h2 class="mb-4 display-4">Sứ mệnh &amp; Tầm nhìn</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                        <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="mb-5 bg-light py-5">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-between align-items-lg-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="display-4 mb-4">Tin tức mới nhất</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rem eaque vel est asperiores iste pariatur placeat molestias, rerum provident ea maiores debitis eum earum esse quas architecto! Minima, voluptatum! Minus tempora distinctio quo sint est blanditiis voluptate eos. Commodi dolore nesciunt culpa adipisci nemo expedita suscipit autem dolorum rerum?</p>
                    <p>At magni dolore ullam odio sapiente ipsam, numquam eius minus animi inventore alias quam fugit corrupti error iste laboriosam dolorum culpa doloremque eligendi repellat iusto vel impedit odit cum. Sequi atque molestias nesciunt rem eum pariatur quibusdam deleniti saepe eius maiores porro quam, praesentium ipsa deserunt laboriosam adipisci. Optio, animi!</p>
                    <p><a href="#" class="more">Xem tất cả bài viết</a></p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('frontend/img/post-portrait-3.jpg') }}" alt="" class="img-fluid mb-4">
                        </div>
                        <div class="col-6 mt-4">
                            <img src="{{ asset('frontend/img/post-portrait-4.jpg') }}" alt="" class="img-fluid mb-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="display-4">Đội ngũ của chúng tôi</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="{{ asset('frontend/img/person-1.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Cameron Williamson</h4>
                    <span class="d-block mb-3 text-uppercase">Người sáng lập &amp; CEO</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="{{ asset('frontend/img/person-2.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Wade Warren</h4>
                    <span class="d-block mb-3 text-uppercase">Người sáng lập, VP</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="{{ asset('frontend/img/person-3.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Jane Cooper</h4>
                    <span class="d-block mb-3 text-uppercase">Nhân viên biên tập</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="{{ asset('frontend/img/person-4.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Cameron Williamson</h4>
                    <span class="d-block mb-3 text-uppercase">Nhân viên biên tập</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="{{ asset('frontend/img/person-5.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Cameron Williamson</h4>
                    <span class="d-block mb-3 text-uppercase">Nhân viên biên tập</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="{{ asset('frontend/img/person-6.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Cameron Williamson</h4>
                    <span class="d-block mb-3 text-uppercase">Nhân viên biên tập</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                </div>
            </div>
        </div>
    </section>
  
@endsection
