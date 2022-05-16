@php
    Theme::layout('blog-sidebar')
@endphp

<div class="container">
    @foreach($searchResults as $item)
        @if($item->searchable->status == \Botble\Base\Enums\BaseStatusEnum::PUBLISHED)
        <div class="row">
            <div class="col-md-2 td-module-image mt-0  pr-0">
                <a href="{{ $item->url }}">
                    <img class="img-responsive custom-image-sukien" width="150px" src="{{ get_image_url($item->searchable->image) }}" alt="{{ $item->title }}" title="{{ $item->title }}">
                </a>
            </div>
            <div class="col-md-10 td-module-content mt-0">
                <h3><a href="{{ $item->url }}">{{ $item->title }}</a></h3>
                <p class="title">
                    {!! clean($item->searchable->description) !!}
                </p>
            </div>
        </div>
        @endif
    @endforeach
</div>
