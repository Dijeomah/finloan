<nav class="main-menu">
    <div class="container-fluid">
        <div class="main-menu__logo">

            <svg xmlns="http://www.w3.org/2000/svg" class="main-menu__logo__shape-1" viewBox="0 0 317 120">
                <path d="M259.856,120H0V0H274l43,37.481Z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="main-menu__logo__shape-2" viewBox="0 0 317 120">
                <path d="M259.856,120H0V0H274l43,37.481Z"/>
            </svg>


            <a href="{{route('home')}}">
                <img src="{{asset('assets/images/logo-dark.png')}}" width="140" height="51" alt="Finlon">
            </a>
        </div><!-- /.main-menu__logo -->
        <div class="main-menu__nav">
            <ul class="main-menu__list">
                <li class="{{(request()->is('/')) ? 'current' : '' }}">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li class="{{(request()->is('about')) ? 'current' : '' }}">
                    <a href="{{route('about')}}">About</a>
                </li>
                <li class="{{(request()->is('services')) ? 'current' : '' }}">
                    <a href="{{route('services')}}">Services</a>
                </li>
                <li class="{{(request()->is('contact')) ? 'current' : '' }}">
                    <a href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div><!-- /.main-menu__nav -->
        <div class="main-menu__right">
            <a href="#" class="main-menu__toggler mobile-nav__toggler">
                <i class="fa fa-bars"></i>
            </a>
            <a href="{{route('apply-now')}}" class="thm-btn main-menu__btn">Request Loan</a><!-- /.thm-btn -->
            <a href="tel:926668880000" class="main-menu__contact">
                        <span class="main-menu__contact__icon">
                            <i class="icon-phone"></i>
                        </span><!-- /.main-menu__contact__icon -->
                <span class="main-menu__contact__text">
                            <strong>92 666 888 0000</strong>
                            Mon to Fri: 9 am to 6 pm
                        </span>
            </a><!-- /.main-menu__contact -->
        </div><!-- /.main-menu__right -->
    </div><!-- /.container-fluid -->
</nav>
