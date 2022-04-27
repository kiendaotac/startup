<div class="row">
    <div class="col-sm-12">
        <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
            @foreach($posts as $post)
            <div class="col-md-4 col-sm-6 col-lg-4 ">
                <div class="hover-item rounded overflow-hidden">
                    <div class="item-image">
                        <a href="{{ $post->url }}">
                            <img class="img-responsive" src="{{ get_image_url($post->image) }}" alt="{{ $post->name }}" title="{{ $post->name }}" style="width:100%;height:230px;">
                        </a>
                    </div>
                    <div class="item-content">
								<span class="entry-date small-text ">
									<time class="entry-date" datetime="{{ $post->created_at->format('d/m/Y') }}">
										{{ $post->created_at->format('d/m/Y') }}
									</time>
								</span>
                        <h4 class="limit-title-blog">
                            <a title="{{ $post->name }}" href="{{ $post->url }}">
                                {{ $post->name }}
                            </a>
                        </h4>
                        <div class="limit-excerpt-blog">
                            <p>{{ $post->description }}</p>
                        </div>
                        <div class="button-xemthem-container"> <a href="{{ $post->url }}" target="" title="Xem thêm" class="button-xemthem">Xem thêm</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- eof .isotope_container.row -->
        <div class="row">
            {!! $posts->withQueryString()->links() !!}
{{--            <div class="col-sm-12 text-center">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12 text-center">--}}

{{--                        <ul class="pagination highlightlinks">--}}




{{--                            <li class="active"><a href="">1</a></li>--}}



{{--                            <li><a href="/blogs/tai-chinh?page=2">2</a></li>--}}


{{--                            <li>--}}
{{--                                <a href="/blogs/tai-chinh?page=2">--}}
{{--                                    <span class="sr-only">Next</span>--}}
{{--                                    <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
        </div>
    </div>
</div>
