@extends('index')
@section('content')
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Liên hệ với chúng tôi</h1>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-md-4">
                    <div class="info-item">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Địa chỉ</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item info-item-borders">
                        <i class="bi bi-phone"></i>
                        <h3>Số điện thoại</h3>
                        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="form mt-5">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Tên của bạn" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email của bạn" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Chủ đề" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Tin nhắn" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Đang tải</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tin nhắn của bạn đã được gửi. Cảm ơn bạn!</div>
                    </div>
                    <div class="text-center"><button type="submit">Gửi Tin Nhắn</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section>
@endsection
