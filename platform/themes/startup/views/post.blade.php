@php
    Theme::layout('startup-blog-details')
@endphp

<div class="row">
    <div class="col-md-8 col-md-offset-2 with_shadow ">
        <article class="single-post vertical-item content-padding big-padding post overflow-hidden style-article">

            <div class=" article-content">
                <header class="entry-header">
                    <p class="content-justify item-meta">
                        <span class="entry-date highlight3 small-text">
                            <time class="entry-date" datetime="{{ $post->created_at->format('d/m/Y') }}">
                                {{ $post->created_at->format('d/m/Y') }}
                            </time>
                        </span>
                    </p>
                </header>
                {!! clean($post->content) !!}
            <!-- .entry-content -->
                <div class="post-tags">
                    <span class="tag-title"><i class="fa fa-tag" aria-hidden="true"></i> Tags</span>
                    @foreach($post->tags as $tag)
                    <a href="{{ $tag->url }}" rel="tag">{{ $tag->name }}</a>
                    @endforeach

                </div>
            </div>
            <!-- .item-content -->
        </article>
    </div>
    <!--eof .col-sm-8 (main content)-->
</div>
{{--<div class="ps-post--detail sidebar">--}}
{{--    <div class="ps-post__header">--}}
{{--        <p>{{ $post->created_at->translatedFormat('M d, Y') }} @if ($post->author) / {{ __('By') }} {{ $post->author->name }} @endif / {{ __('in') }} @foreach($post->categories as $category) <a href="{{ $category->url }}">{{ $category->name }}</a> @if (!$loop->last) , @endif @endforeach</p>--}}
{{--    </div>--}}
{{--    <div class="ps-post__content" style="padding-top: 0;">--}}
{{--        {!! clean($post->content) !!}--}}
{{--        @if (theme_option('facebook_comment_enabled_in_post', 'yes') == 'yes')--}}
{{--            <br />--}}
{{--            {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, Theme::partial('comments')) !!}--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div class="ps-post__footer">--}}
{{--        @if (!$post->tags->isEmpty())--}}
{{--            <p class="ps-post__tags">{{ __('Tags') }}:--}}
{{--                @foreach ($post->tags as $tag)--}}
{{--                    <a href="{{ $tag->url }}">{{ $tag->name }}</a>--}}
{{--                @endforeach--}}
{{--            </p>--}}
{{--        @endif--}}
{{--        <div class="ps-post__social">--}}
{{--            <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->url) }}&title={{ $post->description }}" target="_blank"><i class="fa fa-facebook"></i></a>--}}
{{--            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($post->url) }}&summary={{ rawurldecode($post->description) }}" target="_blank"><i class="fa fa-twitter"></i></a>--}}
{{--            <a class="twitter" href="https://twitter.com/intent/tweet?url={{ urlencode($post->url) }}&text={{ $post->description }}" target="_blank"><i class="fa fa-linkedin"></i></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @php $relatedPosts = get_related_posts($post->id, 2); @endphp--}}

{{--    @if ($relatedPosts->count())--}}
{{--        <div class="ps-related-posts">--}}
{{--            <h3>{{ __('Related Posts') }}</h3>--}}
{{--            <div class="row">--}}
{{--                @foreach ($relatedPosts as $post)--}}
{{--                    <div class="col-sm-6 col-12">--}}
{{--                        <div class="ps-post">--}}
{{--                            <div class="ps-post__thumbnail">--}}
{{--                                <a class="ps-post__overlay" href="{{ $post->url }}"></a>--}}
{{--                                <img src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}" />--}}
{{--                            </div>--}}
{{--                            <div class="ps-post__content" style="padding: 20px 0;">--}}
{{--                                <div class="ps-post__top">--}}
{{--                                    <div class="ps-post__meta">--}}
{{--                                        @foreach($post->categories as $category)--}}
{{--                                            <a href="{{ $category->url }}">{{ $category->name }}</a>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                    <a class="ps-post__title" href="{{ $post->url }}">{{ $post->name }}</a>--}}
{{--                                </div>--}}
{{--                                <div class="ps-post__bottom">--}}
{{--                                    <p>{{ $post->created_at->translatedFormat('M d, Y') }} @if ($post->author) {{ __('by') }} {{ $post->author->name }} @endif</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}


