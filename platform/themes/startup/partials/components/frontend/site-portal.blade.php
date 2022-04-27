<section id="portal" class="ls taichinh section_padding_bottom_50">
    <div class="container custom-container-finance">
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="#">
                    <h2 class="section_header icon_color3 mb-0">{{ $shortcode->title }}</h2>
                </a>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-3 col-lg-3 col-sm-3 pd-responsive-finance">
                <div class="wrapper-image-taichinh">
                    <div class="bg-overlay"></div>
                    <a href="{{ $post->url }}">
                        <img class="img-responsive image-finance-2"
                            src="{{ get_image_url($post->image) }}"
                            alt="{{ $post->name }}"
                            title="{{ $post->name }}"
                             style="height: 300px!important;"
                        >
                    </a>
                    <div class="centered-text">
                        <div class="item-content-taichinh">
                            <p class="small-text text-white margin_0 text-uppercase">{{ __('Cổng Thông Tin') }}</p>
                            <h4 class="text-white finance-text-custom-2">
                                <a href="{{ $post->url }}" title="{{ $post->name }}">{{ $post->name }}</a>
                            </h4>
{{--                            <span class="entry-date  text-white">--}}
{{--								<time class="entry-date" datetime="{{ $post->created_at->format('d/m/Y') }}">--}}
{{--									{{ $post->created_at->format('d/m/Y') }}--}}
{{--								</time>--}}
{{--							</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>