<section class="ls ms event news">
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
            @foreach($posts as $post)
            <div class="col-md-4 col-sm-6 item-padding ">
                <div class="item-event outer-div">
                    <a href="{{ $post->url }}">
                        <img
                            class="img-responsive inner-div"
                            src="{{ get_image_url($post->image) }}"
                            alt="{{ $post->name }}"
                            title="{{ $post->name }}"
                            style="width:100% ; height:250px;">
                    </a>
                    <div class="content" style="min-height: 92px;">
                        <p class="text-white">
                            <a href="{{ $post->url }}">{{ $post->name }}</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>