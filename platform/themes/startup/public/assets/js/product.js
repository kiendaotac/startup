$(document).ready(function (e) {
    $(".product-thumb img").click(function(){
        $(".product-thumb").removeClass('active');
        $(this).parents('li').addClass('active');
        $(".product-image-feature").attr("src",$(this).attr("data-image"));
        $(".product-image-feature").attr("data-zoom-image",$(this).attr("data-zoom-image"));
    });

    $(".product-thumb").first().addClass('active');

    $('#add-to-cart').click(function(e){
        e.preventDefault();
        $(this).addClass('clicked_buy');
        add_item_show_modalCart($('#product-select').val());
    });
    $('#buy-now').click(function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            async: false,
            url:'/cart/add.js',
            async:false,
            data: $('form#add-item-form').serialize(),
            success:function(line){
                window.location = "/checkout";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Sản phẩm bạn vừa mua đã vượt quá tồn kho');
            }
        });
    });
})