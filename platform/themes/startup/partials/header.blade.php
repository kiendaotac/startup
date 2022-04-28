<!-- HEADER startup -->
<div class="header_icon_buttons col-md-12 col-sm-12 col-xs-12 text-center hidden-xs hidden-sm">
    <div class="text-uppercase py-1" style="color: #008488; font-weight: bold; font-size: 24px; line-height: 2; transform: scale(1,1.3)">
        Trung tâm ươm tạo công nghệ và hỗi trợ khởi nghiệp - TUAF
    </div>
    <div class="text-uppercase py-1" style="color: #008488; font-size: 20px; line-height: 2; transform: scale(1,1.3)">
        Technology incubation and startup support center - TUAF
    </div>
    <div class="text-uppercase text-danger pt-1" style="color: #e6330e; font-size: 24px; font-weight: bold; line-height: 2; transform: scale(1,1.3)">
        Cổng thông tin kết nối hỗ trợ khởi nghiệp đổi mới sáng tạo
    </div>
</div>
<header class="page_header toggler_left with_top_border item_with_border">
    <div class="container">
        <div class="row">
            <div class="header_mainmenu col-md-4 col-sm-4 col-xs-4 hidden-xs hidden-sm">
                <!-- main nav start -->
                <nav class="mainmenu_wrapper">
                    <ul class="mainmenu nav sf-menu">
                        <li>
                            {!! Menu::renderMenuLocation('main-menu', [
                                    'view'    => 'components.main-menu',
                                    'options' => ['class' => 'mega-menu', 'a' => 'true'],
                            ]) !!}
                        </li>
                    </ul>
                </nav>
                <!-- eof main nav -->
                <!-- header toggler -->
                <span class="toggle_menu">
                    <span></span>
                </span>
            </div>
            <div class="header_mainmenu col-md-4 col-sm-4 col-xs-4 hidden-md hidden-lg">
                <!-- main nav start -->
                <nav class="mainmenu_wrapper">
                    {!! Menu::renderMenuLocation('main-menu', [
                            'view'    => 'components.main-menu-mobile',
                            'options' => ['class' => 'mainmenu nav sf-menu'],
                    ]) !!}
                </nav>
                <!-- eof main nav -->
                <!-- header toggler -->
                <span class="toggle_menu">
                    <span></span>
                </span>
                <span class="text-menu hidden-xs hidden-sm">MENU</span>
            </div>

{{--            <div class="header_right_buttons col-md-4 col-sm-4 col-xs-4 text-right">--}}
{{--                <div class="page_social_icons greylinks">--}}
{{--                    <div class="dropdown pull-right">--}}
{{--                        <a class="btn-account">--}}
{{--                            <i class="far fa-shopping-bag"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-account">--}}
{{--                            <a class="cart-link cart" href="/account/login">--}}
{{--                                <i class="fa fa-sign-in" aria-hidden="true"></i>--}}
{{--                                Đăng nhập--}}
{{--                            </a>--}}
{{--                            <a class="cart-link cart" href="/account/register">--}}
{{--                                <i class="fa fa-user-plus" aria-hidden="true"></i>--}}
{{--                                Đăng ký--}}
{{--                            </a>--}}
{{--                            <a class="cart-link cart" href="/cart">--}}
{{--                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
{{--                                <span class="count-item cart-number">0</span>--}}
{{--                            </a>--}}
{{--                            <a class="cart-link cart" target="_blank" href="#">--}}
{{--                                <i class="fa fa-wpforms" aria-hidden="true"></i>--}}
{{--                                <span> Đăng ký ý tưởng/dự án</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</header>
<!-- END OF HEADER -->