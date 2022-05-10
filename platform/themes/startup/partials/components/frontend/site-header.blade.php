<section class="doke top-page">
    <div class="banner" style="background-image: url('{{ get_image_url($shortcode->background_image) }}')">
        <div class="container">
            <div class="content" style="margin-top: 30px">
                <div class="title text-left">
                    <h2>{{ $shortcode->title }}</h2>
                </div>
                <div class="description text-left">{!! clean($shortcode->description) !!}</div>
                <div class="button text-left" style="margin-top: 20px">
                    <a class="btn btn-primary btn-sm" href="{{ $shortcode->link }}" style="background-color: {{ $shortcode->button_color }}!important; border-radius: 30px!important; border: none;">{{ $shortcode->button_title }}</a>
                </div>
            </div>
        </div>
    </div>
</section>