$(document).ready(function () {
    $('#cartsubmit').click(function () {
        var ajaxURL = $('#cartsubmit').data("url");
        var page_id = $('#cartsubmit').data("id");
        // console.log(ajaxURL)
        $.post(ajaxURL, page_id, function (response) {
            //   console.log(response);
            getCartItem();
        });
    });
    $('#cartdelete').click(function () {
        var ajaxURL = $('#cartdelete').data("url");
        // console.log(ajaxURL)
        $.post(ajaxURL, function (response) {
            getCartItem();
        });
    });
    $('[data-toggle="tooltip"]').tooltip();

    function getCartItem() {
        var ajaxURL = $('#cartget').data("url");
        // console.log(ajaxURL)
        $.post(ajaxURL, function (response) {
            $('#cartget').text(response.length);
        });
    }

    $('#cartget').on('load',
        getCartItem()
    );

    $('.item_quantity').change(function () {
            //console.log(this);
            var price = $(this).closest('td').next('td').data('price');
            var quantity = $(this).val();
            var total = 0;
            //  console.log(price)
            //  console.log(quantity)
            // console.log(total)
            price = price * quantity;
            $(this).closest('td').next('td').data('price', price);
            $('.item_price').each(function () {
                total = total + parseInt($(this).closest('td').data('price'));
            });
            //console.log(total)
            $('#calculateText').text(total + " $");

            var ajaxURL = $(this).data("url");
            //console.log('post ' + ajaxURL);
            $.post(ajaxURL, {"tx_yourart_arts[quantity]": quantity}, function (response) {
            });
        }
    );
    $('.removeCartElement').click(function () {
        var ajaxURL = $(this).data("url");
        $(this).closest('tr').remove();
        $.post(ajaxURL, function (response) {
            console.log(response);
        });
    });
});

