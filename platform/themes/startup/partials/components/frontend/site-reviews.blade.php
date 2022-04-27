<section id="reviews" class="ls main_color3  page_testimonials business">
    <div class="container custom-container-finance">
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href=#>
                    <h2 class=" mb-0 section_header icon_color ">{{ $shortcode->title }}</h2>
                </a>
            </div>
        </div>
        <div class="row columns_margin_bottom_20 ">
            <div class="owl-carousel owl-theme" data-nav="true" data-dots="false" data-items="3"
                 data-responsive-lg="3" data-responsive-sm="2" data-autoplay="true" data-loop="true">
                @foreach($posts as $post)
                <article class="vertical-item content-padding with_shadow rounded overflow-hidden hover-item">
                    <div class="item-media">
                        <img class="img-responsive"
                             src="{{ get_image_url($post->image) }}"
                             alt="{{ $post->name }}" title="{{ $post->name }}"
                             style="width:100%;height:230px;">
                        <div class="media-links">
                            <a href="{{ $post->url }}" class="abs-link"></a>
                        </div>
                    </div>
                    <div class="item-content">
						<span class="entry-date small-text ">
							<time class="entry-date" datetime="{{ $post->created_at->format('d/m/Y') }}">
								{{ $post->created_at->format('d/m/Y') }}
							</time>
						</span>
                        <h4 class="entry-title hover-color3 limit-content">
                            <a href="{{ $post->url }}">{{ $post->name }}</a>
                        </h4>
                        <div class="limit-excerpt-blog">
                            <p>{{ $post->description }}</p>
                        </div>
                        <div class="button-xemthem-container">
                            <a href="{{ $post->url }}" target="" title="Xem thêm" class="button-xemthem">Xem thêm</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>

    </div>
</section>