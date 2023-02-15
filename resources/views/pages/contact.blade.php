@extends('pages.template')
@section('view')
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>Contact</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>Contact us</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <p class="block-title__tagline">contact</p><!-- /.block-title__tagline -->
                                <h2 class="block-title__title">Feel free to get
                                    in touch</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="contact-one__text">There are many variations of passages of lorem ipsum available the
                                majority have alteration in some form by injected humour.</p><!-- /.contact-one__text -->
                            <div class="contact-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.contact-one__social -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <form action="https://thegenius.co/html/finlon_new1/assets/sendemail.php" class="form-one contact-form-validated">
                            <div class="row row-gutter-y-20 row-gutter-x-20">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Full name" name="name">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email address" name="email">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="Phone number" name="phone">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <button type="submit" class="thm-btn">Send a Message</button><!-- /.thm-btn -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="contact-info-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-info-one__item">
                            <div class="contact-info-one__icon">
                                <i class="icon-telephone"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__text">Have any question?</p><!-- /.contact-info-one__text -->
                                <a class="contact-info-one__link" href="tel:+3-(856)000-9850">+3-(856) 000-9850</a>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__item -->
                    </div><!-- /.col-md-4 col-sm-12 -->
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-info-one__item">
                            <div class="contact-info-one__icon">
                                <i class="icon-email"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__text">Write us email</p><!-- /.contact-info-one__text -->
                                <a class="contact-info-one__link" href="mailto:needhelp@company.com">needhelp@company.com</a>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__item -->
                    </div><!-- /.col-md-4 col-sm-12 -->
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-info-one__item">
                            <div class="contact-info-one__icon">
                                <i class="icon-pin"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__text">Visit anytime</p><!-- /.contact-info-one__text -->
                                <a class="contact-info-one__link" href="#">88 Road Broklyn New York</a>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__item -->
                    </div><!-- /.col-md-4 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

        <div class="google-map__default">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__default" allowfullscreen></iframe>
        </div>
        <!-- /.google-map -->
@endsection
