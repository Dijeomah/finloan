@extends('pages.template')
@section('view')
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('home')}}">@lang('navigation.home')</a></li>
                    <li><span>@lang('navigation.contact')</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>@lang('contact.contact_header')</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <p class="block-title__tagline">@lang('contact.contact_form.contact')</p><!-- /.block-title__tagline -->
                                <h2 class="block-title__title">@lang('contact.contact_form.get_in_touch')</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="contact-one__text">@lang('contact.contact_form.contact_text')</p><!-- /.contact-one__text -->
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
                                    <input type="text" placeholder="@lang('contact.contact_form.full_name')" name="name">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="email" placeholder="@lang('contact.contact_form.email_address')" name="email">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="@lang('contact.contact_form.phone_number')" name="phone">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="@lang('contact.contact_form.subject')" name="subject">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <textarea placeholder="@lang('contact.contact_form.message')" name="message"></textarea>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <button type="submit" class="thm-btn">@lang('contact.contact_form.send_a_message')</button><!-- /.thm-btn -->
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
                                <p class="contact-info-one__text">@lang('contact.contact_info.have_a_question')</p><!-- /.contact-info-one__text -->
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
                                <p class="contact-info-one__text">@lang('contact.contact_info.write_email')</p><!-- /.contact-info-one__text -->
                                <a class="contact-info-one__link" href="mailto:needhelp@company.com">needhelp@company.com</a>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__item -->
                    </div><!-- /.col-md-4 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

@endsection
