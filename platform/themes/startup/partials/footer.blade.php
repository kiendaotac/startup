<!-- FOOTER -->
<footer class="page_footer ds parallax  columns_padding_25">
    <div class="container">
        <div class="row pt-25-footer">
            <div class="col-md-2 col-sm-12">
                <div class="widget">
                    <div class="custom-center-button">
                        <a href="/" class="logo">
                            <img src="{{ get_image_url(theme_option('logo')) }}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 mt-35-footer text-center">
                <form method="post" action="{{ route('public.newsletter.subscribe') }}" class="subscribe">
                    @csrf
                    <input type="text" name="email" placeholder="Nhập email của bạn để nhận tin tức mới nhất." class="w-80">
                    <button type="submit" class="button-submit respon-button">Gửi
                        <i class="fa fa-long-arrow-right"></i>
                    </button>
                </form>
                <div class="row">
                    <div class="header_mainmenu hidden-xs">
                        <!-- main nav start -->
                        <nav class="mainmenu_wrapper">
                            {!! Menu::renderMenuLocation('main-menu', [
                                'view'    => 'components.menu-footer',
                                'options' => ['class' => 'mainmenu nav sf-menu'],
                            ]) !!}
                        </nav>
                        <!-- eof main nav -->
                        <!-- header toggler -->

                    </div>

                </div>
                {!! Menu::renderMenuLocation('main-menu', [
                    'view'    => 'components.menu-footer-response',
                    'options' => ['class' => 'no-bullets p-0 hidden-xs hidden-md hidden-lg hidden-sm'],
                ]) !!}
            </div>


            <div class="col-md-2 col-sm-12 text-center pl-0 pr-0">

                <div class="darklinks topmargin_25">

                    <a href="https://twitter.com/camaustartup"
                       class="social-icon border-icon rounded-icon soc-twitter"></a>
                    <a href="https://www.facebook.com/camaustartup"
                       class="social-icon border-icon rounded-icon soc-facebook"></a>
                    <a href="https://www.instagram.com/"
                       class="social-icon border-icon rounded-icon soc-instagram"></a>


                </div>
                <a class="cart-link cart" target="_blank"
                   href="https://docs.google.com/forms/d/e/1FAIpQLSfG2FGCmo1dskhp3F8ZBNEzCLHa9OJkjboQ8pCde_c9xzJRAA/viewform?usp=pp_url">
                    <button type="submit" class="button-submit respon-button apply-mt">Đăng ký ngay</button>
                </a>
            </div>

        </div>
    </div>
</footer>
<section class="ls page_copyright section_padding_15">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="custom-text-footer">{{ theme_option('owner') }}</p>
                <p class="custom-text-footer">Địa chỉ: {{ theme_option('tuaf_address') }} | Điện thoại: <a href="tel:{{ Str::remove('.',theme_option('tuaf_phone')) }}">{{ theme_option('tuaf_phone') }}</a> | Website:
                    <a href="https://{{ theme_option('tuaf_website') }}">{{ theme_option('tuaf_website') }}</a> | Email:
                    <a href="mailto:{{ theme_option('tuaf_email') }}">{{ theme_option('tuaf_email') }}</a></p>
            </div>
        </div>
    </div>
</section>
<!-- END OF FOOTER -->