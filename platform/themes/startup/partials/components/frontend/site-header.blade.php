<section class="doke top-page">
{{--    @dd($shortcode->background_image)--}}
    <div class="banner" style="background-image: url('{{ get_image_url($shortcode->background_image) }}')">
        <div class="bg-overlay-banner"></div>
        <div class="container">
            <div class="custom-logo"></div>
            <div class="wrapper-image">
                <img src="{{ get_image_url(theme_option('logo')) }}" alt="Logo" class="img-responsive custom-image-logo"/>
            </div>
            <div class="scroll-downs">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
        </div>
    </div>
</section>