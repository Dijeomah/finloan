<footer class="main-footer">
    <div class="container">
        <div class="row row-gutter-y-30">
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget footer-widget--about">
                    <a href="{{route('home')}}" class="footer-widget__logo">
                        <img src="{{asset('assets/images/logo-light.png')}}" alt="finlon" width="140" height="51">
                    </a>
                    <p class="footer-widget__text">Footer text here.</p>
                    <ul class="list-unstyled footer-widget__info">
                        <li>
                            <i class="icon-email"></i>
                            <a href="mailto:needhelp@finlon.com">needhelp@finlon.com</a>
                        </li>
                        <li>
                            <i class="icon-telephone"></i>
                            <a href="tel:926668880000">92 666 888 0000 </a>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-widget__title">
                        Explore
                    </h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__menu">
                        <li><a href="{{route('about')}}">@lang('navigation.about')</a></li>
                        <li><a href="{{route('services')}}">@lang('navigation.services')</a></li>
                        <li><a href="{{route('apply-now')}}">@lang('home.apply_for_loan')</a></li>
                        <li><a href="{{route('contact')}}">@lang('navigation.contact')</a></li>
                    </ul><!-- /.list-unstyled footer-widget__menu -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget footer-widget--time">
                    <h3 class="footer-widget__title">
                        Timing
                    </h3><!-- /.footer-widget__title -->
                    <p class="footer-widget__text">
                        Mon Fri: 7:00am - 6:00pm <br> Saturday: 9:00am - 5:00pm <br> Sunday: Closed
                    </p>
                    <div class="footer-widget__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.footer-widget__social -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.main-footer -->
<div class="bottom-footer">
    <div class="container">
        <p class="bottom-footer__text text-center">Copyright &copy; <?php echo date('Y')?> All Rights Reserved.</p>
        <!-- /.bottom-footer__text -->
    </div><!-- /.container -->
</div><!-- /.bottom-footer -->
