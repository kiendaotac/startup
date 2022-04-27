@php
    Theme::layout('startup-blog');
@endphp

@if ($posts->count() > 0)
    @include(Theme::getThemeNamespace() . '::views.blog-category-loop', compact('posts'))
@endif
