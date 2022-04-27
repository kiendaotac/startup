<section id="docs">
    <div class="row">
        <div class="banner-bg-tailieu tailieu" style="background-image: url('{{ get_image_url($shortcode->background_image) }}')">
            <div class="bg-overlay"></div>
            <div class="col-sm-12 text-center text-white">
                <a href="">
                    <h2 class=" mb-0 section_header with_icon icon_color ">{{ $shortcode->title }}</h2>
                </a>
                <p class="small-text text-white mb-0 col-md-10 col-md-offset-1">{{ $shortcode->subtitle }}</p>
                <div class="text-center custom-test-tailieu col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    {{ $shortcode->description }}
                </div>
            </div>
            <p class="topmargin_40 custom-center-button text-center">
                <a href="{{ $shortcode->link }}" class="theme_button color2 wide_button" style="background-color: {{ $shortcode->button_color }}">
                    {{ $shortcode->button_title }}
                </a>
            </p>
        </div>
    </div>
</section>