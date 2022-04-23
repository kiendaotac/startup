<!doctype html>
<html class="no-js" lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    {!! Theme::header() !!}
</head>
<body class="home">
<div id="canvas">
    <div id="box_wrapper">
        {!! Theme::partial('header') !!}

        {!! Theme::content() !!}

        {!! Theme::partial('footer') !!}
{{--        <section class="doke top-page">
            <div class="banner">
                <div class="bg-overlay-banner"></div>
                <div class="container">
                    <div class="custom-logo"></div>
                    <div class="wrapper-image">
                        <img src="assets/images/logo.png" alt="Logo" class="img-responsive custom-image-logo"/>
                    </div>
                    <div class="scroll-downs">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="ls">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="/pages/gioi-thieu">
                            <h2 class="mb-0 section_header with_icon icon_color">Chào Mừng Đến Thái Nguyên Startup</h2>
                        </a>
                        <p class="small-text"> Trung tâm hỗ trợ khởi nghiệp toàn diện của tỉnh Cà Mau</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <img src="assets/images/home/welcome.jpeg" alt="logo-doke-startup" class="img-responsive custom-center-image"/>
                    </div>
                    <div class="col-md-6">
                        <div class="text-custom">
                            <p>Khởi nghiệp Cà Mau (Ca Mau Startup) được thành lập nhằm mục đích khởi tạo một điểm kết
                                nối, một diễn đàn chung dành cho cộng đồng khởi nghiệp của tỉnh Cà Mau. Khởi nghiệp Cà
                                Mau sẽ là một trong những kênh tiếp nhận các ý tưởng, các dự án khởi nghiệp, khởi sự
                                kinh doanh có tiềm năng; là nơi giới thiệu các sản phẩm khởi nghiệp, các doanh nghiệp
                                khởi nghiệp tiêu biểu của tỉnh; là nơi chia sẻ kinh nghiệm, kiến thức, dữ liệu, sự kiện,
                                nơi cung cấp các thông tin hỗ trợ khởi nghiệp, các chính sách của tỉnh Cà Mau về khởi
                                nghiệp, tạo tiền đề thúc đẩy sự kết nối, hợp tác và hỗ trợ giữa các tổ chức, cá nhân nằm
                                trong hệ sinh thái khởi nghiệp của tỉnh.</p>
                        </div>
                        <div class="custom-center-button mt-35">
                            <a href="/pages/gioi-thieu" class="theme_button color1 wide_button">Tìm hiểu</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="ls ms">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header with_icon icon_color4">Các Dịch Vụ Hỗ Trợ</h2>
                        <p class="small-text">Cà Mau Startup sẽ Hỗ trợ trên các lĩnh vực</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="arrow_box text-center with_shadow">
                            <img class="icon-spacing" src="assets/images/tu-van.png">
                        </div>
                        <h5 class="text-center">
                            Tư vấn
                        </h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="arrow_box text-center with_shadow">
                            <img class="icon-spacing" src="assets/images/dao-tao.png">
                        </div>
                        <h5 class="text-center">
                            Đào tạo
                        </h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="arrow_box text-center with_shadow">
                            <img class="icon-spacing" src="assets/images/tai-chinh.png">
                        </div>
                        <h5 class="text-center">
                            Tài chính
                        </h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="arrow_box text-center with_shadow">
                            <img class="icon-spacing" src="assets/images/so-huu-tri-tue.png">
                        </div>
                        <h5 class="text-center">
                            Sở hữu trí tuệ
                        </h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="arrow_box text-center with_shadow">
                            <img class="icon-spacing"
                                 src="assets/images/sang-tao.png">
                        </div>
                        <h5 class="text-center">
                            Cơ sở vật chất
                        </h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="arrow_box text-center with_shadow">
                            <img class="icon-spacing"
                                 src="assets/images/hoptac-ketnoi.png">
                        </div>
                        <h5 class="text-center">
                            Hợp tác - kết nối
                        </h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="arrow_box text-center with_shadow">
                            <img class="icon-spacing"
                                 src="assets/images/hoan-thien-sp.png">
                        </div>
                        <h5 class="text-center">
                            Hoàn thiện sản phẩm
                        </h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="arrow_box text-center with_shadow">
                            <img class="icon-spacing"
                                 src="assets/images/thuong-mai.png">
                        </div>
                        <h5 class="text-center">
                            Thương mại sản phẩm
                        </h5>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="ls page_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header with_icon icon_color2 ">Ban Tư Vấn - Đào Tạo</h2>
                        <p class="small-text">Là các anh chị quản lý ở các cơ quan nhà nước, các nhà sáng lập và điều hành nhiều công ty lớn </p>
                    </div>
                </div>
                &lt;!&ndash; .row &ndash;&gt;
                <div class="row">
                    <div class="col-sm-12">
                        <div class="owl-carousel with_shadow_items" data-nav="true" data-dots="false" data-items="3" data-responsive-lg="4" data-margin="30" data-loop="true">
                            <div class="vertical-item content-padding text-center with_shadow rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="assets/images/home/team-1.jpg" alt="Chuyên gia Nhân sự" class="img-responsive">
                                </div>
                                <div class="item-content">
                                    <p class="small-text margin_0">Chuyên gia Nhân sự</p>
                                    <h4 class="hover-color3 topmargin_0 limit-title mb-0">
                                        Nguyễn Thị T
                                    </h4>
                                    <p class="limit-content">
                                        Có nhiều kinh nghiệp trong lĩnh vực tư vấn nhân sự doanh nghiệp.
                                    </p>
                                    <p class="color2links">
                                        <a class="social-icon soc-facebook" href="https://www.facebook.com/" title="Facebook"></a>
                                        <a class="social-icon soc-twitter" href="https://twitter.com/" title="Twitter"></a>
                                        <a class="social-icon soc-google" href="https://plus.google.com/discover" title="Google"></a>
                                    </p>
                                </div>
                            </div>
                            <div class="vertical-item content-padding text-center with_shadow rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="assets/images/home/team-2.jpeg"
                                         alt="Chuyên gia Công Nghệ" class="img-responsive">
                                </div>
                                <div class="item-content">
                                    <p class="small-text margin_0">Chuyên gia Công Nghệ</p>
                                    <h4 class="hover-color3 topmargin_0 limit-title mb-0">
                                        Nguyễn Văn A
                                    </h4>
                                    <p class="limit-content">Có nhiều kinh nghiệm tư vấn công nghệ cho doanh nghiệp</p>
                                    <p class="color2links">
                                        <a class="social-icon soc-facebook" href="https://www.facebook.com/"
                                           title="Facebook"></a>
                                        <a class="social-icon soc-twitter" href="https://twitter.com/"
                                           title="Twitter"></a>
                                        <a class="social-icon soc-google" href="https://plus.google.com/discover"
                                           title="Google"></a>
                                    </p>
                                </div>
                            </div>
                            <div class="vertical-item content-padding text-center with_shadow rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="assets/images/home/team-3.jpeg"
                                         alt="Chuyên gia tài chính" class="img-responsive">
                                </div>
                                <div class="item-content">
                                    <p class="small-text margin_0">Chuyên gia tài chính</p>
                                    <h4 class="hover-color3 topmargin_0 limit-title mb-0">
                                        Nguyễn Văn B
                                    </h4>
                                    <p class="limit-content">Chuyên nghiên cứu tư vấn tài chính cho doanh nghiệp</p>
                                    <p class="color2links">
                                        <a class="social-icon soc-facebook" href="https://www.facebook.com/"
                                           title="Facebook"></a>
                                        <a class="social-icon soc-twitter" href="https://twitter.com/"
                                           title="Twitter"></a>
                                        <a class="social-icon soc-google" href="https://plus.google.com/discover"
                                           title="Google"></a>
                                    </p>
                                </div>
                            </div>
                            <div class="vertical-item content-padding text-center with_shadow rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="assets/images/home/team-4.jpeg"
                                         alt="Chuyên gia Marketing" class="img-responsive">
                                </div>
                                <div class="item-content">
                                    <p class="small-text margin_0">Chuyên gia Marketing</p>
                                    <h4 class="hover-color3 topmargin_0 limit-title mb-0">
                                        Nguyễn Văn C
                                    </h4>
                                    <p class="limit-content">Có nhiều kinh nghiệm hỗ trợ Marketing cho doanh nghiệp</p>
                                    <p class="color2links">
                                        <a class="social-icon soc-facebook" href="https://www.facebook.com/"
                                           title="Facebook"></a>
                                        <a class="social-icon soc-twitter" href="https://twitter.com/"
                                           title="Twitter"></a>
                                        <a class="social-icon soc-google" href="https://plus.google.com/discover"
                                           title="Google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        &lt;!&ndash; .owl-carousel &ndash;&gt;
                    </div>
                </div>
            </div>
        </section>
        <section id="products" class="ls ms products">
            <div class="container custom-container-finance">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="/collections/all">
                            <h2 class="mb-0 section_header with_icon icon_color3">Sản Phẩm Khởi Nghiệp</h2>
                        </a>
                        <p class="small-text">CÁC SẢN PHẨM KHỞI NGHIỆP TIÊU BIỂU CỦA TỈNH</p>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme list-unstyled " data-nav="true" data-dots="false" data data-autoplay="true" data-loop="true" data-responsive-lg="3">
                        <li class="product type-product">
                            <div class="vertical-item content-padding text-center with_shadow rounded">
                                <div class="item-media with_background">
                                    <a href="/products/chi-can-an-nut-moi-thang-co-the-thu-hoach-10kg-rau-sach">
                                        <img src="assets/images/product/product-1.jpg" alt="Cua biển Năm Căn Cà Mau" style="width:400px;height:230px;"/>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <h5 class="hover-color3 bottommargin_10 text-left limit-title-products text-center ">
                                        <a href="/products/chi-can-an-nut-moi-thang-co-the-thu-hoach-10kg-rau-sach">
                                            Cua biển Năm Căn Cà Mau
                                        </a>
                                    </h5>
                                    <p class="price">
                                        <del>
                                            <span class="amount"></span>
                                        </del>
                                        <ins>
                                            <span class="amount">500,000₫</span>
                                        </ins>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="product type-product">
                            <div class="vertical-item content-padding text-center with_shadow rounded">
                                <div class="item-media with_background">
                                    <a href="/products/khoi-nghiep-bang-du-an-ban-nhung-buc-anh-tuyet-dep-ve-trai-dat">
                                        <img src="assets/images/product/product-2.jpg" alt="Khô cá sặc bổi U Minh Cà Mau" style="width:400px;height:230px;"/>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <h5 class="hover-color3 bottommargin_10 text-left limit-title-products text-center ">
                                        <a href="/products/khoi-nghiep-bang-du-an-ban-nhung-buc-anh-tuyet-dep-ve-trai-dat">
                                            Khô cá sặc bổi U Minh Cà Mau
                                        </a>
                                    </h5>
                                    <p class="price">
                                        <del>
                                            <span class="amount"></span>
                                        </del>
                                        <ins>
                                            <span class="amount">350,000₫</span>
                                        </ins>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="product type-product">
                            <div class="vertical-item content-padding text-center with_shadow rounded">
                                <div class="item-media with_background">
                                    <a href="/products/y-tuong-khoi-nghiep-doc-dao-su-dung-nhiet-luong-cua-trau-dao-de-canh-tac-nong-nghiep"><img
                                                src="assets/images/product/product-3.jpg"
                                                alt="Mật ong rừng U Minh Cà Mau" style="width:400px;height:230px;"/></a>
                                </div>
                                <div class="item-content">
                                    <h5 class="hover-color3 bottommargin_10 text-left limit-title-products text-center ">
                                        <a href="/products/y-tuong-khoi-nghiep-doc-dao-su-dung-nhiet-luong-cua-trau-dao-de-canh-tac-nong-nghiep">Mật
                                            ong rừng U Minh Cà Mau</a>
                                    </h5>
                                    <p class="price">
                                        <del>
                                            <span class="amount"></span>
                                        </del>
                                        <ins>
                                            <span class="amount">250,000₫</span>
                                        </ins>
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="product type-product">
                            <div class="vertical-item content-padding text-center with_shadow rounded">
                                <div class="item-media with_background">
                                    <a href="/products/du-an-merculet-mvp-he-sinh-thai-phan-phoi-gia-tri-cho-nguoi-dung-internet"><img
                                                src="assets/images/product/product-4.jpg"
                                                alt="Tôm khô đặc sản Cà Mau" style="width:400px;height:230px;"/></a>
                                </div>
                                <div class="item-content">

                                    <h5 class="hover-color3 bottommargin_10 text-left limit-title-products text-center ">
                                        <a href="/products/du-an-merculet-mvp-he-sinh-thai-phan-phoi-gia-tri-cho-nguoi-dung-internet">Tôm
                                            khô đặc sản Cà Mau</a>
                                    </h5>
                                    <p class="price">
                                        <del>
                                            <span class="amount"></span>
                                        </del>
                                        <ins>
                                            <span class="amount">1,500,000₫</span>
                                        </ins>
                                    </p>

                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </section>
        <section id="mission" class="ls columns_margin_bottom_20">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <a href="blogs/dao-tao">
                            <h2 class="mb-0 section_header with_icon icon_color4 custom-text-daotao">Các Khóa Đào Tạo
                                Khởi Nghiệp Tại Cà Mau Startup</h2></a>
                        <p class="mb-0 small-text custom-text-daotao">Chương trình học thực tế góp phần tạo nền tảng
                            vững chắc để khởi nghiệp thành công</p>
                        <div class="text-custom">
                            - Bạn có ý tưởng tốt, muốn tự kinh doanh làm chủ nhưng chưa biết bắt đầu từ đâu?
                            <br>- Bạn từng kinh doanh thất bại, mơ hồ không biết rõ nguyên nhân hoặc biết nguyên nhân
                            nhưng lúng túng trong giải pháp?
                            <br>
                            - Bạn từng nghĩ giá như mình có thêm nhiều kiến thức, kinh nghiệm để không lãng phí thời
                            gian và tiền bạc?
                            <br>
                            - Bạn từng góp vốn kinh doanh nhưng vẫn luôn hoài nghi về tương lai của dự án?
                            <br>
                            - Bạn đang vận hành một dự án kinh doanh bình thường, nhưng để đi xa hơn, dài hơn là câu
                            chuyện khiến bạn hằng đêm mất ngủ?
                            <br>
                            - Hay đơn giản bạn chỉ muốn giải đáp câu hỏi liệu có bí mật nào đằng sau những câu chuyện
                            khởi nghiệp thành công và những bài học từ sự thất bại?
                            <br>
                            Tất cả những câu hỏi của bạn sẽ lần lượt được trả lời một cách chi tiết thông qua các khóa
                            đào đạo về khởi nghiệp của Cà Mau Startup.
                        </div>
                        <p class="topmargin_40 custom-center-button">
                            <a href="blogs/dao-tao" class="theme_button color2 wide_button">
                                Xem chi tiết
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6 bottommargin_0 mt-75">
                        <img src="assets/images/home/welcome-2.jpeg"
                             alt="" class="top-overlap-small"/>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="banner-bg-tailieu tailieu">
                    <div class="bg-overlay"></div>
                    <div class="col-sm-12 text-center text-white">
                        <a href="blogs/tai-lieu">
                            <h2 class=" mb-0 section_header with_icon icon_color ">Tài Liệu Khởi Nghiệp</h2>
                        </a>
                        <p class="small-text text-white mb-0 col-md-10 col-md-offset-1">Tập hợp nguồn tài liệu
                            phong phú về khởi nghiệp được cập nhật thường xuyên</p>
                        <div class="text-center custom-test-tailieu col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                            Bạn nào chưa có thói quen đọc sách thì hãy bắt đầu tập đọc ngay, càng sớm càng tốt, sớm nhất
                            có thể vì một điều chắc chắn là bạn không thể đủ thời gian và sức lực để tự mình chiêm
                            nghiệm, trải nghiệm rồi mới rút ra những bài học quý báu cho mình. Sách là kho kiến thức
                            khổng lồ, tích tụ hàng trăm ngàn trải nghiệm của những người đi trước, sách là con đường
                            ngắn nhất, nhanh nhất, đỡ tốn sức lực nhất giúp chúng ta hấp thụ kiến thức. Chuyên mục
                            này sẽ giới thiệu đến các bạn những quyển sách hay về Khởi nghiệp và rất dễ đọc để bạn làm
                            quen. Ngoài ra, chuyên mục này còn giới thiệu các văn bản, chính sách có liên
                            quan đến hỗ trợ khởi nghiệp.
                        </div>
                    </div>
                    <p class="topmargin_40 custom-center-button text-center">
                        <a href="blogs/tai-lieu" class="theme_button color2 wide_button">
                            Xem chi tiết
                        </a>
                    </p>
                </div>
            </div>
        </section>
        <section id="reviews" class="ls main_color3  page_testimonials business">
            <div class="container custom-container-finance">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href=blogs/doanh-nghiep>
                            <h2 class=" mb-0 section_header with_icon icon_color ">Doanh Nghiệp Khởi Nghiệp</h2>
                        </a>
                        <p class="small-text ">Các doanh nghiệp khởi nghiệp tiêu biểu của tỉnh</p>
                    </div>
                </div>
                <div class="row columns_margin_bottom_20 ">
                    <div class="owl-carousel owl-theme" data-nav="true" data-dots="false" data-items="3"
                         data-responsive-lg="3" data-responsive-sm="2" data-autoplay="true" data-loop="true">
                        <article class="vertical-item content-padding with_shadow rounded overflow-hidden hover-item">
                            <div class="item-media">
                                <img class="img-responsive"
                                     src="//file.hstatic.net/1000302784/article/foody-vietnam_grande.jpg"
                                     alt="cong ty co phan foody" title="công ty cổ phần foody"
                                     style="width:100%;height:230px;">
                                <div class="media-links">
                                    <a href="/blogs/doanh-nghiep/cong-ty-co-phan-foody" class="abs-link"></a>
                                </div>
                            </div>
                            <div class="item-content">
						<span class="entry-date small-text ">
							<time class="entry-date" datetime="01/09/2018">
								01/09/2018
							</time>
						</span>
                                <h4 class="entry-title hover-color3 limit-content">
                                    <a href="/blogs/doanh-nghiep/cong-ty-co-phan-foody">Công ty cổ phần Foody</a>
                                </h4>
                                <div class="limit-excerpt-blog">
                                    <p>Được xây dựng từ giữa năm 2012 tại TP. HCM, Việt Nam, Foody là cộng đồng tin cậy
                                        cho mọi người có thể tìm kiếm, đánh giá, bình luận các địa điểm ăn uống: nhà
                                        hàng, quán ăn, cafe, bar, karaoke, tiệm bánh, khu du lịch... tại Việt Nam - từ
                                        website hoặc ứng dụng di động.</p>
                                </div>
                                <div class="button-xemthem-container"><a
                                            href="/blogs/doanh-nghiep/cong-ty-co-phan-foody" target="" title="Xem thêm"
                                            class="button-xemthem">Xem thêm</a></div>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_shadow rounded overflow-hidden hover-item">
                            <div class="item-media">
                                <img class="img-responsive"
                                     src="//file.hstatic.net/1000302784/article/0abaa641dece98ed8dedbba0da233543_grande.jpg"
                                     alt="cong ty khoi nghiep designbold" title="công ty khởi nghiệp designbold"
                                     style="width:100%;height:230px;">
                                <div class="media-links">
                                    <a href="/blogs/doanh-nghiep/cong-ty-tnhh-tep-bac" class="abs-link"></a>
                                </div>
                            </div>
                            <div class="item-content">
						<span class="entry-date small-text ">
							<time class="entry-date" datetime="15/08/2018">
								15/08/2018
							</time>
						</span>
                                <h4 class="entry-title hover-color3 limit-content">
                                    <a href="/blogs/doanh-nghiep/cong-ty-tnhh-tep-bac">Công ty khởi nghiệp
                                        DesignBold</a>
                                </h4>
                                <div class="limit-excerpt-blog">
                                    <p>DesignBold là một dự án startup. Đây là công cụ hỗ trợ cho người dùng trong việc
                                        thiết kế đồ họa với một số lượng lớn các mẫu thiết kế (template) miễn phí và trả
                                        phí.</p>
                                </div>
                                <div class="button-xemthem-container"><a href="/blogs/doanh-nghiep/cong-ty-tnhh-tep-bac"
                                                                         target="" title="Xem thêm"
                                                                         class="button-xemthem">Xem thêm</a></div>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_shadow rounded overflow-hidden hover-item">
                            <div class="item-media">
                                <img class="img-responsive"
                                     src="//file.hstatic.net/1000302784/article/apple-2385198_1280_grande.jpg"
                                     alt="tap doan cong nghe may tinh apple inc"
                                     title="tập đoàn công nghệ máy tính apple inc."
                                     style="width:100%;height:230px;">
                                <div class="media-links">
                                    <a href="/blogs/doanh-nghiep/cong-ty-tnhh-mang-thuy-san-viet-nam-aquanetviet"
                                       class="abs-link"></a>
                                </div>
                            </div>
                            <div class="item-content">
						<span class="entry-date small-text ">
							<time class="entry-date" datetime="14/08/2018">
								14/08/2018
							</time>
						</span>
                                <h4 class="entry-title hover-color3 limit-content">
                                    <a href="/blogs/doanh-nghiep/cong-ty-tnhh-mang-thuy-san-viet-nam-aquanetviet">Tập
                                        đoàn công nghệ máy tính Apple Inc.</a>
                                </h4>
                                <div class="limit-excerpt-blog">
                                    <p>Apple Inc. là một tập đoàn công nghệ máy tính của Mỹ có trụ sở chính đặt tại
                                        Cupertino, California. Apple được thành lập ngày 1 tháng 4 năm 1976 dưới tên
                                        Apple Computer, Inc., và đổi tên thành Apple Inc. vào đầu năm 2007.<br
                                                data-mce-bogus="1"></p>
                                </div>
                                <div class="button-xemthem-container"><a
                                            href="/blogs/doanh-nghiep/cong-ty-tnhh-mang-thuy-san-viet-nam-aquanetviet"
                                            target="" title="Xem thêm" class="button-xemthem">Xem thêm</a></div>
                            </div>
                        </article>

                        <article class="vertical-item content-padding with_shadow rounded overflow-hidden hover-item">
                            <div class="item-media">
                                <img class="img-responsive"
                                     src="//file.hstatic.net/1000302784/article/shrimp-2641687_1920_fb310f66a4764ffd85101e34958962e1_grande.jpg"
                                     alt="cong ty co phan cong nghe biofloc dba"
                                     title="công ty cổ phần công nghệ biofloc đba" style="width:100%;height:230px;">
                                <div class="media-links">
                                    <a href="/blogs/doanh-nghiep/startup-edtech-viet-nhan-dau-tu-tu-quy-singapore"
                                       class="abs-link"></a>
                                </div>
                            </div>
                            <div class="item-content">
						<span class="entry-date small-text ">
							<time class="entry-date" datetime="27/07/2018">
								27/07/2018
							</time>
						</span>
                                <h4 class="entry-title hover-color3 limit-content">
                                    <a href="/blogs/doanh-nghiep/startup-edtech-viet-nhan-dau-tu-tu-quy-singapore">Công
                                        ty Cổ phần Công nghệ BIOFLOC ĐBA</a>
                                </h4>
                                <div class="limit-excerpt-blog">
                                    <p><span>Đi lên từ farm nuôi thực tế và thấu hiểu được nỗi băn khoăn trong nghề, ĐBA đã ứng dụng những tiến bộ khoa học và chất xám của đội ngũ tri thức để đưa ra quy trình kỹ thuật nuôi tôm theo công nghệ BIOFLOC ĐBA, đạt năng suất cao và tỷ lệ thành công cao.</span>
                                    </p>
                                </div>
                                <div class="button-xemthem-container"><a
                                            href="/blogs/doanh-nghiep/startup-edtech-viet-nhan-dau-tu-tu-quy-singapore"
                                            target="" title="Xem thêm" class="button-xemthem">Xem thêm</a></div>
                            </div>
                        </article>

                    </div>
                </div>

            </div>
        </section>


        <section class="sukien ls">
            <div class="container header-spacing">
                <div class="row">
                    <div class="col-sm-12 text-center">

                        <a href=https://camaustartup.com/blogs/su-kien><h2
                                    class="section_header with_icon icon_color3 mb-0">Sự Kiện Khởi Nghiệp</h2></a>


                        <p class="small-text">Được tổ chức thường xuyên nhằm tìm kiếm, hỗ trợ và thúc đấy sự phát triển
                            của cộng động khởi nghiệp</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 custom-pd-left mt-0">

                        <div class="item-padding ">
                            <div class="item-event outer-div">
                                <a href="/blogs/su-kien/hoi-nghi-ung-dung-facebook-messenger-va-cong-nghe-chatbot-vao-marketing"><img
                                            class="img-responsive inner-div style-image-left"
                                            src="//file.hstatic.net/1000302784/article/screenhunter_267_dec._25_08.12_grande.jpg"
                                            alt="Hội nghị " Ứng dụng Facebook Messenger và công nghệ Chatbot vào marketing""
                                    title="Hội nghị "Ứng dụng Facebook Messenger và công nghệ Chatbot vào marketing"" ></a>
                                <div class="content">
                                    <p class="text-white">
                                        <a href="/blogs/su-kien/hoi-nghi-ung-dung-facebook-messenger-va-cong-nghe-chatbot-vao-marketing">Hội
                                            nghị "Ứng dụng Facebook Messenger và công nghệ Chatbot vào marketing"</a>
                                    </p>
                                </div>
                            </div>
                            <div class="limit-sukien-blog">
                                <p>Sự kiện đầu tiên tại Việt Nam về xu hướng ứng dụng Facebook Messenger và công nghệ
                                    Chatbot vào marketing để tạo ra sự khác biệt và đột phá trong kinh doanh hiện
                                    đại.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 pl-0 mt-0">
                        <div class="col-md-6 col-lg-6 col-sm-6 custom-pd-right mt-0">

                            <div class="row item-content">
                                <div class="col-md-6 td-module-image mt-0  pr-0">
                                    <a href="/blogs/su-kien/toa-dam-startup-kinh-nghiem-thanh-cong-bai-hoc-that-bai"><img
                                                class="img-responsive custom-image-sukien"
                                                src="//file.hstatic.net/1000302784/article/small_business_flyer__gold_design__medium.png"
                                                alt="toa dam startup kinh nghiem thanh cong bai hoc that bai"
                                                title="Tọa đàm “Startup: Kinh nghiệm thành công - Bài học thất bại”"></a>
                                </div>
                                <div class="col-md-6 td-module-content mt-0">
                                    <p class="title"><a class="custom-color-1"
                                                        href="/blogs/su-kien/toa-dam-startup-kinh-nghiem-thanh-cong-bai-hoc-that-bai">Tọa
                                            đàm “Startup: Kinh nghiệm thành công - Bài học thất bại”</a></p>
                                </div>
                            </div>

                            <div class="row item-content">
                                <div class="col-md-6 td-module-image mt-0  pr-0">
                                    <a href="/blogs/su-kien/cuoc-thi-nttcom-startup-challenge-2018"><img
                                                class="img-responsive custom-image-sukien"
                                                src="//file.hstatic.net/1000302784/article/t_i_xu_ng_medium.png"
                                                alt="cuoc thi nttcom startup challenge 2018"
                                                title="Cuộc thi  NTTCom Startup Challenge 2018"></a>
                                </div>
                                <div class="col-md-6 td-module-content mt-0">
                                    <p class="title"><a class="custom-color-1"
                                                        href="/blogs/su-kien/cuoc-thi-nttcom-startup-challenge-2018">Cuộc
                                            thi NTTCom Startup Challenge 2018</a></p>
                                </div>
                            </div>

                            <div class="row item-content">
                                <div class="col-md-6 td-module-image mt-0  pr-0">
                                    <a href="/blogs/su-kien/cuoc-thi-khoi-nghiep-doi-moi-sang-tao-du-lich-thanh-pho-ho-chi-minh-nam-2018"><img
                                                class="img-responsive custom-image-sukien"
                                                src="//file.hstatic.net/1000302784/article/img_8085_fe086a5ca522409189097ff075145fd9_medium.jpg"
                                                alt="cuoc thi khoi nghiep doi moi sang tao du lich thanh pho ho chi minh nam 2018"
                                                title="Cuộc thi Khởi nghiệp Đổi mới sáng tạo Du lịch thành phố Hồ Chí Minh năm 2018"></a>
                                </div>
                                <div class="col-md-6 td-module-content mt-0">
                                    <p class="title"><a class="custom-color-1"
                                                        href="/blogs/su-kien/cuoc-thi-khoi-nghiep-doi-moi-sang-tao-du-lich-thanh-pho-ho-chi-minh-nam-2018">Cuộc
                                            thi Khởi nghiệp Đổi mới sáng tạo Du lịch thành phố Hồ Chí Minh năm 2018</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 custom-pd-right mt-0">

                            <div class="row item-content">
                                <div class="col-md-6 td-module-image mt-0 pr-0">
                                    <a href="/blogs/su-kien/cuoc-thi-khoi-nghiep-vung-dong-bang-song-cuu-long-nam-2018"><img
                                                class="img-responsive custom-image-sukien"
                                                src="//file.hstatic.net/1000302784/article/brochure_mekong_startup-1_medium.png"
                                                alt="cuoc thi khoi nghiep vung dong bang song cuu long nam 2018"
                                                title="Cuộc thi khởi nghiệp vùng Đồng bằng sông Cửu Long năm 2018"></a>
                                </div>
                                <div class="col-md-6 td-module-content mt-0">
                                    <p class="title"><a class="custom-color-1"
                                                        href="/blogs/su-kien/cuoc-thi-khoi-nghiep-vung-dong-bang-song-cuu-long-nam-2018">Cuộc
                                            thi khởi nghiệp vùng Đồng bằng sông Cửu Long năm 2018</a></p>
                                </div>
                            </div>

                            <div class="row item-content">
                                <div class="col-md-6 td-module-image mt-0 pr-0">
                                    <a href="/blogs/su-kien/chuong-trinh-youth-co-lab-viet-nam-2018"><img
                                                class="img-responsive custom-image-sukien"
                                                src="//file.hstatic.net/1000302784/article/img_8085_medium.jpg"
                                                alt="chuong trinh youth co lab viet nam 2018"
                                                title="Chương trình Youth Co:Lab Việt Nam 2018"></a>
                                </div>
                                <div class="col-md-6 td-module-content mt-0">
                                    <p class="title"><a class="custom-color-1"
                                                        href="/blogs/su-kien/chuong-trinh-youth-co-lab-viet-nam-2018">Chương
                                            trình Youth Co:Lab Việt Nam 2018</a></p>
                                </div>
                            </div>

                            <div class="row item-content">
                                <div class="col-md-6 td-module-image mt-0 pr-0">
                                    <a href="/blogs/su-kien/su-kien-ngay-khoi-nghiep-startup-day-2018"><img
                                                class="img-responsive custom-image-sukien"
                                                src="//file.hstatic.net/1000302784/article/business-2987962_cef80b4f09e74f689b335b73507bda83_bd68792fb021487d9dc3f2cfaaa6f9f6_medium.jpg"
                                                alt="su kien ngay khoi nghiep startup day 2018"
                                                title="Sự kiện ngày khởi nghiệp " Startup Day 2018""></a>
                                </div>
                                <div class="col-md-6 td-module-content mt-0">
                                    <p class="title"><a class="custom-color-1"
                                                        href="/blogs/su-kien/su-kien-ngay-khoi-nghiep-startup-day-2018">Sự
                                            kiện ngày khởi nghiệp "Startup Day 2018"</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ls ms event news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">

                        <a href=https://camaustartup.com/blogs/tin-tuc><h2
                                    class="mb-0 section_header with_icon icon_color3">Tin Tức Khởi Nghiệp</h2></a>


                        <p class="small-text">Cập nhật liên tục các thông tin liên quan đến khởi nghiệp</p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-6 item-padding ">
                        <div class="item-event outer-div">
                            <a href="/blogs/tin-tuc/mot-bai-viet-hay-ve-khoi-nghiep-cua-tien-sy-alan-phan"><img
                                        class="img-responsive inner-div"
                                        src="//file.hstatic.net/1000302784/article/internet-marketing-email-banner_6113069026784b4085c731f622fca56a_2b4d247d74c14e57a86f83550771f23f_grande.png"
                                        alt="Một bài viết hay về khởi nghiệp của tiến sỹ Alan Phan"
                                        title="Một bài viết hay về khởi nghiệp của tiến sỹ Alan Phan"
                                        style="width:100% ; height:250px;"></a>
                            <div class="content">
                                <p class="text-white">
                                    <a href="/blogs/tin-tuc/mot-bai-viet-hay-ve-khoi-nghiep-cua-tien-sy-alan-phan">Một
                                        bài viết hay về khởi nghiệp của tiến sỹ Alan Phan</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 item-padding ">
                        <div class="item-event outer-div">
                            <a href="/blogs/tin-tuc/startup-co-co-hoi-nhan-toi-10-ty-dong-mot-du-an-tu-vintech-fund"><img
                                        class="img-responsive inner-div"
                                        src="//file.hstatic.net/1000302784/article/chemist-3014142_1280_88936b8b9aef4cb794f12d362450d3ba_grande.jpg"
                                        alt="Startup có cơ hội nhận tới 10 tỷ đồng một dự án từ VinTech Fund"
                                        title="Startup có cơ hội nhận tới 10 tỷ đồng một dự án từ VinTech Fund"
                                        style="width:100% ; height:250px;"></a>
                            <div class="content">
                                <p class="text-white">
                                    <a href="/blogs/tin-tuc/startup-co-co-hoi-nhan-toi-10-ty-dong-mot-du-an-tu-vintech-fund">Startup
                                        có cơ hội nhận tới 10 tỷ đồng một dự án từ VinTech Fund</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 item-padding ">
                        <div class="item-event outer-div">
                            <a href="/blogs/tin-tuc/mang-luoi-startup-ecosystem-giup-startup-viet-vuon-ra-toan-cau"><img
                                        class="img-responsive inner-div"
                                        src="//file.hstatic.net/1000302784/article/khai-mac-techfest-4927-1543505840_55052c0be7b14682962c2c1b862935fd_grande.jpg"
                                        alt="Mạng lưới Startup Ecosystem giúp startup Việt vươn ra toàn cầu"
                                        title="Mạng lưới Startup Ecosystem giúp startup Việt vươn ra toàn cầu"
                                        style="width:100% ; height:250px;"></a>
                            <div class="content">
                                <p class="text-white">
                                    <a href="/blogs/tin-tuc/mang-luoi-startup-ecosystem-giup-startup-viet-vuon-ra-toan-cau">Mạng
                                        lưới Startup Ecosystem giúp startup Việt vươn ra toàn cầu</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 item-padding ">
                        <div class="item-event outer-div">
                            <a href="/blogs/tin-tuc/thu-tuong-de-xuat-thanh-lap-trung-tam-khoi-nghiep-quoc-gia"><img
                                        class="img-responsive inner-div"
                                        src="//file.hstatic.net/1000302784/article/khai-mac-techfest-4927-1543505840_grande.jpg"
                                        alt="Thủ tướng đề xuất thành lập Trung tâm khởi nghiệp Quốc gia"
                                        title="Thủ tướng đề xuất thành lập Trung tâm khởi nghiệp Quốc gia"
                                        style="width:100% ; height:250px;"></a>
                            <div class="content">
                                <p class="text-white">
                                    <a href="/blogs/tin-tuc/thu-tuong-de-xuat-thanh-lap-trung-tam-khoi-nghiep-quoc-gia">Thủ
                                        tướng đề xuất thành lập Trung tâm khởi nghiệp Quốc gia</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 item-padding ">
                        <div class="item-event outer-div">
                            <a href="/blogs/tin-tuc/goi-ho-tro-mien-phi-cho-dn-ve-linh-vuc-nong-nghiep-thuc-pham-tu-to-chuc-phi-loi-nhuan-pum-ha-lan"><img
                                        class="img-responsive inner-div"
                                        src="//file.hstatic.net/1000302784/article/635913746_780x439_grande.jpg"
                                        alt="Gói hỗ trợ miễn phí cho DN về lĩnh vực nông nghiệp, thực phẩm từ tổ chức Phi Lợi nhuận PUM Hà Lan"
                                        title="Gói hỗ trợ miễn phí cho DN về lĩnh vực nông nghiệp, thực phẩm từ tổ chức Phi Lợi nhuận PUM Hà Lan"
                                        style="width:100% ; height:250px;"></a>
                            <div class="content">
                                <p class="text-white">
                                    <a href="/blogs/tin-tuc/goi-ho-tro-mien-phi-cho-dn-ve-linh-vuc-nong-nghiep-thuc-pham-tu-to-chuc-phi-loi-nhuan-pum-ha-lan">Gói
                                        hỗ trợ miễn phí cho DN về lĩnh vực nông nghiệp, thực phẩm từ tổ chức Phi Lợi
                                        nhuận PUM Hà Lan</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 item-padding ">
                        <div class="item-event outer-div">
                            <a href="/blogs/tin-tuc/kinh-nghiem-goi-von-cua-cac-startup-hieu-nguoi-hieu-ta"><img
                                        class="img-responsive inner-div"
                                        src="//file.hstatic.net/1000302784/article/paper-3187096_1920-min_grande.jpg"
                                        alt="Kinh nghiệm gọi vốn của các Startup: Hiểu người, hiểu ta"
                                        title="Kinh nghiệm gọi vốn của các Startup: Hiểu người, hiểu ta"
                                        style="width:100% ; height:250px;"></a>
                            <div class="content">
                                <p class="text-white">
                                    <a href="/blogs/tin-tuc/kinh-nghiem-goi-von-cua-cac-startup-hieu-nguoi-hieu-ta">Kinh
                                        nghiệm gọi vốn của các Startup: Hiểu người, hiểu ta</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="blog" class="ls taichinh section_padding_bottom_50">
            <div class="container custom-container-finance">
                <div class="row">
                    <div class="col-sm-12 text-center">

                        <a href=https://camaustartup.com/blogs/tai-chinh><h2
                                    class="section_header with_icon icon_color3 mb-0">Tài Chính Khởi Nghiệp</h2></a>


                        <p class="small-text">Thông tin về các quỹ đầu tư và quỹ hỗ trợ khởi nghiệp</p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4 col-lg-4 col-sm-4 pd-responsive-finance">
                        <div class="wrapper-image-taichinh">
                            <div class="bg-overlay"></div>
                            <a href="/blogs/tai-chinh/quy-phat-trien-khoa-hoc-va-cong-nghe-dinh-tien-hoang-dthf"><img
                                        class="img-responsive image-finance-1"
                                        src="//file.hstatic.net/1000302784/article/canva-photo-editor_8a9cfc011dbc4786b7115d31b04fabd4_medium.png"
                                        alt="Quỹ phát triển Khoa học và Công nghệ Đinh Tiên Hoàng (DTHF)"
                                        title="Quỹ phát triển Khoa học và Công nghệ Đinh Tiên Hoàng (DTHF)"></a>
                            <div class="centered-text">
                                <div class="item-content-taichinh">
                                    <h4 class="text-white finance-text-custom">
                                        <a href="/blogs/tai-chinh/quy-phat-trien-khoa-hoc-va-cong-nghe-dinh-tien-hoang-dthf"
                                           title="Quỹ phát triển Khoa học và Công nghệ Đinh Tiên Hoàng (DTHF)">Quỹ phát
                                            triển Khoa học và Công nghệ Đinh Tiên Hoàng (DTHF)</a>
                                    </h4>
                                    <span class="entry-date  text-white">
								<time class="entry-date" datetime="17/08/2018">
									17/08/2018
								</time>
							</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 pd-responsive-finance">
                        <div class="wrapper-image-taichinh">
                            <div class="bg-overlay"></div>
                            <a href="/blogs/tai-chinh/quy-khoi-nghiep-doanh-nghiep-khoa-hoc-cong-nghe-viet-nam-svf"><img
                                        class="img-responsive image-finance-1"
                                        src="//file.hstatic.net/1000302784/article/canva-photo-editor_26da28806d6040fab9113f7e7aebff01_medium.png"
                                        alt="Quỹ Khởi nghiệp Doanh nghiệp Khoa học Công nghệ Việt Nam (SVF)"
                                        title="Quỹ Khởi nghiệp Doanh nghiệp Khoa học Công nghệ Việt Nam (SVF)"></a>
                            <div class="centered-text">
                                <div class="item-content-taichinh">
                                    <h4 class="text-white finance-text-custom">
                                        <a href="/blogs/tai-chinh/quy-khoi-nghiep-doanh-nghiep-khoa-hoc-cong-nghe-viet-nam-svf"
                                           title="Quỹ Khởi nghiệp Doanh nghiệp Khoa học Công nghệ Việt Nam (SVF)">Quỹ
                                            Khởi nghiệp Doanh nghiệp Khoa học Công nghệ Việt Nam (SVF)</a>
                                    </h4>
                                    <span class="entry-date  text-white">
								<time class="entry-date" datetime="17/08/2018">
									17/08/2018
								</time>
							</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 pd-responsive-finance">
                        <div class="wrapper-image-taichinh">
                            <div class="bg-overlay"></div>
                            <a href="/blogs/tai-chinh/quy-dau-tu-thinh-vuong-moi-npif"><img
                                        class="img-responsive image-finance-1"
                                        src="//file.hstatic.net/1000302784/article/canva-photo-editor_8208d6f8f0e54885b1d28fa5ae450f3a_medium.png"
                                        alt="Quỹ đầu tư Thịnh vượng mới (NPIF)"
                                        title="Quỹ đầu tư Thịnh vượng mới (NPIF)"></a>
                            <div class="centered-text">
                                <div class="item-content-taichinh">
                                    <h4 class="text-white finance-text-custom">
                                        <a href="/blogs/tai-chinh/quy-dau-tu-thinh-vuong-moi-npif"
                                           title="Quỹ đầu tư Thịnh vượng mới (NPIF)">Quỹ đầu tư Thịnh vượng mới
                                            (NPIF)</a>
                                    </h4>
                                    <span class="entry-date  text-white">
								<time class="entry-date" datetime="17/08/2018">
									17/08/2018
								</time>
							</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-3 col-lg-3 col-sm-3 pd-responsive-finance">
                        <div class="wrapper-image-taichinh">
                            <div class="bg-overlay"></div>
                            <a href="/blogs/tai-chinh/cau-lac-bo-nha-dau-tu-thien-than-angel-invesor-club"><img
                                        class="img-responsive image-finance-2"
                                        src="//file.hstatic.net/1000302784/article/canva-photo-editor__1__e0d67b10980d43f7ac7f1e40e72ce396_medium.png"
                                        alt="Câu lạc bộ Nhà đầu tư Thiên thần (Angel Invesor Club)"
                                        title="Câu lạc bộ Nhà đầu tư Thiên thần (Angel Invesor Club)"></a>
                            <div class="centered-text">
                                <div class="item-content-taichinh">
                                    <h4 class="text-white finance-text-custom-2">
                                        <a href="/blogs/tai-chinh/cau-lac-bo-nha-dau-tu-thien-than-angel-invesor-club"
                                           title="Câu lạc bộ Nhà đầu tư Thiên thần (Angel Invesor Club)">Câu lạc bộ Nhà
                                            đầu tư Thiên thần (Angel Invesor Club)</a>
                                    </h4>
                                    <span class="entry-date  text-white">
								<time class="entry-date" datetime="17/08/2018">
									17/08/2018
								</time>
							</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-3 pd-responsive-finance">
                        <div class="wrapper-image-taichinh">
                            <div class="bg-overlay"></div>
                            <a href="/blogs/tai-chinh/quy-moi-truong-toan-cau-viet-nam-gef"><img
                                        class="img-responsive image-finance-2"
                                        src="//file.hstatic.net/1000302784/article/canva-photo-editor_45814843e8564f2fabc99c6571c96f13_medium.png"
                                        alt="Quỹ Môi trường toàn cầu Việt Nam (GEF)"
                                        title="Quỹ Môi trường toàn cầu Việt Nam (GEF)"></a>
                            <div class="centered-text">
                                <div class="item-content-taichinh">
                                    <h4 class="text-white finance-text-custom-2">
                                        <a href="/blogs/tai-chinh/quy-moi-truong-toan-cau-viet-nam-gef"
                                           title="Quỹ Môi trường toàn cầu Việt Nam (GEF)">Quỹ Môi trường toàn cầu Việt
                                            Nam (GEF)</a>
                                    </h4>
                                    <span class="entry-date  text-white">
								<time class="entry-date" datetime="17/08/2018">
									17/08/2018
								</time>
							</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-3 pd-responsive-finance">
                        <div class="wrapper-image-taichinh">
                            <div class="bg-overlay"></div>
                            <a href="/blogs/tai-chinh/quy-phat-trien-khoa-hoc-va-cong-nghe-quoc-gia-nafosted"><img
                                        class="img-responsive image-finance-2"
                                        src="//file.hstatic.net/1000302784/article/canva-photo-editor__1__3ae649127288493fb9ff52e476594e02_medium.png"
                                        alt="Quỹ Phát triển khoa học và công nghệ Quốc gia (NAFOSTED)"
                                        title="Quỹ Phát triển khoa học và công nghệ Quốc gia (NAFOSTED)"></a>
                            <div class="centered-text">
                                <div class="item-content-taichinh">
                                    <h4 class="text-white finance-text-custom-2">
                                        <a href="/blogs/tai-chinh/quy-phat-trien-khoa-hoc-va-cong-nghe-quoc-gia-nafosted"
                                           title="Quỹ Phát triển khoa học và công nghệ Quốc gia (NAFOSTED)">Quỹ Phát
                                            triển khoa học và công nghệ Quốc gia (NAFOSTED)</a>
                                    </h4>
                                    <span class="entry-date  text-white">
								<time class="entry-date" datetime="17/08/2018">
									17/08/2018
								</time>
							</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-3 pd-responsive-finance">
                        <div class="wrapper-image-taichinh">
                            <div class="bg-overlay"></div>
                            <a href="/blogs/tai-chinh/clb-nha-dau-tu-thien-than-thuoc-to-chuc-ho-tro-khoi-nghiep-hatch-program-hatch-angel"><img
                                        class="img-responsive image-finance-2"
                                        src="//file.hstatic.net/1000302784/article/canva-photo-editor__1__728f8835160945708fb73257aa58e2de_medium.png"
                                        alt="CLB Nhà đầu tư Thiên thần thuộc tổ chức hỗ trợ khởi nghiệp HATCH!Program (HATCH!ANGEL)"
                                        title="CLB Nhà đầu tư Thiên thần thuộc tổ chức hỗ trợ khởi nghiệp HATCH!Program (HATCH!ANGEL)"></a>
                            <div class="centered-text">
                                <div class="item-content-taichinh">
                                    <h4 class="text-white finance-text-custom-2">
                                        <a href="/blogs/tai-chinh/clb-nha-dau-tu-thien-than-thuoc-to-chuc-ho-tro-khoi-nghiep-hatch-program-hatch-angel"
                                           title="CLB Nhà đầu tư Thiên thần thuộc tổ chức hỗ trợ khởi nghiệp HATCH!Program (HATCH!ANGEL)">CLB
                                            Nhà đầu tư Thiên thần thuộc tổ chức hỗ trợ khởi nghiệp HATCH!Program
                                            (HATCH!ANGEL)</a>
                                    </h4>
                                    <span class="entry-date  text-white">
								<time class="entry-date" datetime="17/08/2018">
									17/08/2018
								</time>
							</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="appointment" class="ls ms page_appointment background_cover">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center" data-animation="fadeInUp">

                        <h2 class="section_header with_icon icon_color3"> Cần Tư Vấn, Hỗ Trợ Về Khởi Nghiệp</h2>


                        <p class="small-text">Liên hệ ngay với Cà Mau Startup</p>

                        <form class="contact-form row columns_margin_bottom_20" method="post" action="/contact">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="pickup-name">Họ tên
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-user highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="contact[name]"
                                           id="contactFormName" class="form-control" placeholder="Họ tên">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="pickup-phone">Số điện thoại
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-phone highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="contact[phone]"
                                           id="contactFormPhone" class="form-control" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="pickup-phone">Email
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                                    <input type="email" aria-required="true" size="30" value="" name="contact[email]"
                                           id="contactFormEmail" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="pickup-message">Tin nhắn</label>
                                    <i class="fa fa-comment highlight3" aria-hidden="true"></i>
                                    <textarea aria-required="true" rows="3" cols="45" name="contact[body]"
                                              id="contactFormMessage" class="form-control"
                                              placeholder="Tin nhắn"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="contact-form-submit topmargin_10">
                                    <button type="submit" class="theme_button color3 wide_button">Gửi tin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>--}}


        <!--Scroll to Top-->
        <div id="myCart" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">
                            Bạn có <b></b> sản phẩm trong giỏ hàng
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="hrv-close-modal"></span>
                        </button>
                    </div>
                    <form action="/cart" method="post" id="cartform">
                        <div class="modal-body">
                            <table style="width:100%;" id="cart-table">
                                <tr>
                                    <th></th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                    <th></th>
                                </tr>
                                <tr class="line-item original">
                                    <td class="item-image"></td>
                                    <td class="item-title">
                                        <a></a>
                                    </td>
                                    <td class="item-quantity"></td>
                                    <td class="item-price"></td>
                                    <td class="item-delete text-center"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="modal-note">
                                        <textarea placeholder="Viết ghi chú" id="note" name="note" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="total-price-modal">
                                        Tổng cộng : <span class="item-total"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-lg-6">
                                    <div class="comeback">
                                        <a href="/collections/all">
                                            <i class="fa fa-caret-left mr10"></i>Tiếp tục mua hàng
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <div class="buttons btn-modal-cart">
                                        <button type="submit" class="button-default" id="checkout" name="checkout">
                                            Đặt hàng
                                            <i class="fa fa-caret-right"></i>
                                        </button>
                                    </div>

                                    <div class="buttons btn-modal-cart">
                                        <button type="submit" class="button-default" id="update-cart-modal" name="">
                                            <i class="fa fa-caret-left"></i>
                                            Cập nhật
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
            <symbol id="icon-add-cart">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     viewBox="0 0 512 512" enable-background="new 0 0 512 512">
                    <g>
                        <g>
                            <polygon
                                    points="447.992,336 181.555,336 69.539,80 0.008,80 0.008,48 90.477,48 202.492,304 447.992,304 		"/>
                        </g>
                        <path d="M287.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S287.992,389.5,287.992,416z"/>
                        <path d="M447.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S447.992,389.5,447.992,416z"/>
                        <g>
                            <polygon points="499.18,144 511.992,112 160.008,112 172.805,144 		"/>
                            <polygon points="211.195,240 223.992,272 447.992,272 460.805,240 		"/>
                            <polygon points="486.398,176 185.602,176 198.398,208 473.586,208 		"/>
                        </g>
                    </g>
                </svg>
            </symbol>
            <symbol id="icon-list-switch">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     viewBox="0 0 194.828 194.828" style="enable-background:new 0 0 194.828 194.828;"
                     xml:space="preserve">
			<g>
                <g>
                    <g>
                        <path d="M190.931,17.534H3.897C1.745,17.534,0,19.279,0,21.431v19.483c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897V21.431C194.828,19.279,193.083,17.534,190.931,17.534z M187.034,37.017H7.793v-11.69h179.241
										 V37.017z"/>
                        <path d="M190.931,64.293H3.897C1.745,64.293,0,66.038,0,68.19v31.172c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897V68.19C194.828,66.038,193.083,64.293,190.931,64.293z M187.034,95.466H7.793v-23.38h179.241
										 V95.466z"/>
                        <path d="M190.931,122.741H3.897c-2.152,0-3.897,1.745-3.897,3.897v46.759c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897v-46.759C194.828,124.486,193.083,122.741,190.931,122.741z M187.034,169.5H7.793v-38.966
										 h179.241V169.5z"/>
                    </g>
                </g>
            </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
		</svg>

            </symbol>
            <symbol id="icon-sort-by">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
			<g>
                <polygon points="85.877,154.014 85.877,428.309 131.706,428.309 131.706,154.014 180.497,221.213 217.584,194.27 108.792,44.46
												 0,194.27 37.087,221.213 	"/>
                <polygon points="404.13,335.988 404.13,61.691 358.301,61.691 358.301,335.99 309.503,268.787 272.416,295.73 381.216,445.54
												 490,295.715 452.913,268.802 	"/>
            </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
		</svg>
            </symbol>
            <symbol id="icon-search_white" viewBox="0 0 1024 1024">
                <path class="path1"
                      d="M1014.176 968.256l-264.32-260.128c69.184-75.264 111.68-174.688 111.68-284.128 0-234.080-192.8-423.872-430.688-423.872s-430.72 189.792-430.72 423.872c0 234.112 192.864 423.872 430.72 423.872 102.752 0 197.088-35.552 271.072-94.688l265.376 261.12c12.928 12.736 33.952 12.736 46.88 0 12.96-12.672 12.96-33.376 0-46.048zM430.848 782.688c-201.312 0-364.48-160.64-364.48-358.688 0-198.080 163.168-358.656 364.48-358.656 201.28 0 364.448 160.576 364.448 358.656 0.032 198.048-163.168 358.688-364.448 358.688z"></path>
            </symbol>
            <symbol id="icon-user" viewBox="0 0 1024 1024">
                <title>user</title>
                <path class="path1"
                      d="M622.826 702.736c-22.11-3.518-22.614-64.314-22.614-64.314s64.968-64.316 79.128-150.802c38.090 0 61.618-91.946 23.522-124.296 1.59-34.054 48.96-267.324-190.862-267.324s-192.45 233.27-190.864 267.324c-38.094 32.35-14.57 124.296 23.522 124.296 14.158 86.486 79.128 150.802 79.128 150.802s-0.504 60.796-22.614 64.314c-71.22 11.332-337.172 128.634-337.172 257.264h896c0-128.63-265.952-245.932-337.174-257.264z"></path>
            </symbol>
        </svg>

    </div>
</div>
{!! Theme::footer() !!}
<script>
    $(document).ready(function () {
        if (window.location.href.indexOf("?contact_posted=true") > -1) {
            alert("Cám ơn bạn đã liên hệ! Chúng tôi sẽ trả lời ngay khi có thể.");
        }
    });
</script>

<script>
    $(".scroll-downs").click(function () {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 1500);
    });
</script>
</body>
</html>