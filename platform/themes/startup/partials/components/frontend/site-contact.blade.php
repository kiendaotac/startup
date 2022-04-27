<section id="appointment" class="ls ms page_appointment background_cover">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" data-animation="fadeInUp">
                <h2 class="section_header icon_color3">{{ $shortcode->title }}</h2>
                <form class="contact-form row columns_margin_bottom_20" method="post" action="{{ route('public.send.contact') }}">
                    @csrf
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="pickup-name">Họ tên<span class="required">*</span></label>
                            <i class="fa fa-user highlight3" aria-hidden="true"></i>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="contactFormName" class="form-control" placeholder="Họ tên">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="pickup-phone">Số điện thoại
                                <span class="required">*</span>
                            </label>
                            <i class="fa fa-phone highlight3" aria-hidden="true"></i>
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="contactFormPhone" class="form-control" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="pickup-phone">Email
                                <span class="required">*</span>
                            </label>
                            <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="contactFormEmail" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="pickup-message">Tin nhắn</label>
                            <i class="fa fa-comment highlight3" aria-hidden="true"></i>
                            <textarea aria-required="true" rows="3" cols="45" name="content"
                                      id="contactFormMessage" class="form-control"
                                      placeholder="Tin nhắn"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="contact-form-submit topmargin_10">
                            <button type="submit" class="theme_button color3 wide_button">Gửi tin</button>
                        </div>
                    </div>
                    <div class="contact-message contact-success-message" style="display: none"></div>
                    <div class="contact-message contact-error-message" style="display: none"></div>
                </form>
            </div>
        </div>
    </div>
</section>