<section id="products" class="ls ms products">
    <div class="container custom-container-finance">
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="">
                    <h2 class="mb-0 section_header icon_color3">{{ $shortcode->title }}</h2>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme list-unstyled " data-nav="true" data-dots="false" data data-autoplay="true" data-loop="true" data-responsive-lg="3">
                @foreach($products as $product)
                <li class="product type-product">
                    <div class="vertical-item content-padding text-center with_shadow rounded">
                        <div class="item-media with_background">
                            <a href="{{ $product->url }}">
                                <img src="{{ get_image_url($product->image, 'small') }}" alt="Cua biển Năm Căn Cà Mau" style="width:400px;height:230px;"/>
                            </a>
                        </div>
                        <div class="item-content">
                            <h5 class="hover-color3 bottommargin_10 text-left limit-title-products text-center ">
                                <a href="{{ $product->url }}">
                                    {{ $product->name }}
                                </a>
                            </h5>
                            <p class="price">
                                @if ($product->front_sale_price !== $product->price)
                                <del>
                                    <span class="amount">{{ format_price($product->price_with_taxes) }}</span>
                                </del>
                                @endif
                                <ins>
                                    <span class="amount">{{ format_price($product->front_sale_price_with_taxes) }}</span>
                                </ins>
                            </p>
                        </div>
                    </div>
                </li>
                @endforeach
            </div>
        </div>
    </div>
</section>