<section id="team" class="ls page_portfolio">
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
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel with_shadow_items" data-nav="true" data-dots="false" data-items="3" data-responsive-lg="4" data-margin="30" data-loop="true">
                    @foreach($teams as $team)
                    <div class="vertical-item content-padding text-center with_shadow rounded overflow-hidden">
                        <div class="item-media">
                            <img src="{{ get_image_url($team->avatar) }}" alt="{{ $team->title }}" class="img-responsive">
                        </div>
                        <div class="item-content">
                            <p class="small-text margin_0">{{ $team->title }}</p>
                            <p class="small-text margin_0">{{ $team->fields }}</p>
                            <h4 class="hover-color3 topmargin_0 limit-title mb-0">
                                {{ $team->name }}
                            </h4>
                            <p class="color2links">
                                Tel: {{ $team->phone }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- .owl-carousel -->
            </div>
        </div>
    </div>
</section>