<section id="services" class="ls ms">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header icon_color4">{{ $shortcode->title }}</h2>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-3 col-sm-6">
                <div class="arrow_box text-center with_shadow">
                    <img class="icon-spacing" src="{{ get_image_url($service->icon) }}">
                </div>
                <h5 class="text-center">
                    {{ $service->name }}
                </h5>
            </div>
            @endforeach
        </div>
    </div>
</section>