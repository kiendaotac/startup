<section id="services" class="ls ms">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                @if($shortcode->link)
                    <a href="{{ $shortcode->link }}">
                        <h2 class="section_header">{{ $shortcode->title }}</h2>
                    </a>
                @else
                    <h2 class="section_header">{{ $shortcode->title }}</h2>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-3 col-sm-6">
                <a href="{{ $service->category->url }}">
                    <div class="arrow_box text-center with_shadow">
                        <img class="icon-spacing" src="{{ get_image_url($service->icon) }}">
                    </div>
                </a>
                <h5 class="text-center">
                    <a href="{{ $service->category->url }}">
                        {{ $service->name }}
                    </a>
                </h5>
            </div>
            @endforeach
        </div>
    </div>
</section>