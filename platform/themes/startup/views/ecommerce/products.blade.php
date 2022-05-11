<section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="columns-4">
                    <div id="products" class="products list-unstyled">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="product type-product col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="vertical-item content-padding text-center with_shadow rounded">
                                    <div class="item-media with_background">
                                        <a href="{{ $product->url }}">
                                            <img src="{{ get_image_url($product->image) }}" alt="{{ $product->name }}" style="height:230px;"/></a>
                                    </div>
                                    <div class="item-content">

                                        <h5 class="hover-color3 bottommargin_10 text-left limit-title-products text-center ">
                                            <a href="{{ $product->url }}">{{ $product->name }}</a>
                                        </h5>
                                        <p class="price">
                                            <ins>
                                                <span class="amount">{{ format_price($product->front_sale_price_with_taxes) }}</span>
                                            </ins>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>