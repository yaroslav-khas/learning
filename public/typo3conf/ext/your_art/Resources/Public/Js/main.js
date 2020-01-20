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
            $('#totalForm').val(total)
            var ajaxURL = $(this).data("url");
            //console.log('post ' + ajaxURL);
            $.post(ajaxURL, {"tx_yourart_arts[quantity]": quantity}, function (response) {
            });
        }
    );
    $('.item_quantity').ready(function () {
            var price = $(this).closest('td').next('td').data('price');
            var quantity = $(this).val();
            var total = 0;
            price = price * quantity;
            $(this).closest('td').next('td').data('price', price);
            $('.item_price').each(function () {
                total = total + parseInt($(this).closest('td').data('price'));
            });
            $('#calculateText').text(total + " $");
            $('#totalForm').val(total)
            total=0;
        }
    );
    $('.removeCartElement').click(function () {
        var ajaxURL = $(this).data("url");
        $(this).closest('tr').remove();
        $.post(ajaxURL, function (response) {
            console.log(response);
        });
    });
    $(".inputDelivery").change(function () {
        $(".inputDeliveryCity").removeClass('invisible');
        $(".inputDeliveryWarehouse").removeClass('invisible');

    });
    if($(".inputDelivery :selected").val()>=0){
        $(".inputDeliveryCity").removeClass('invisible');
        $(".inputDeliveryWarehouse").removeClass('invisible');
    }
    $(".inputDeliveryCity").on('input',function () {
        if ($('.inputDelivery').children("option:selected").val()==1){
            var getCity = {
                "async": true,
                "crossDomain": true,
                "url": "https://api.novaposhta.ua/v2.0/json/",
                "method": "POST",
                "headers": {
                    "content-type": "application/json",
                },
                "processData": false,
                "data":
                    "{\r\n\"apiKey\": \"fddd658c93d0dfef5ec6097b636a2727\",\r\n \"modelName\": \"Address\",\r\n \"calledMethod\": \"searchSettlements\",\r\n \"methodProperties\": {\r\n \"CityName\": \""+$(this).val()+"\"\r\n }\r\n}"

            };
            //console.log(settings);
            $.ajax(getCity).done(function (response) {
                $( "datalist.deliveryCity" ).empty();
                console.log(response.data["0"]["Addresses"])
                for (i=0;i<response.data["0"]["Addresses"].length;i++){
                    console.log(response.data["0"]["Addresses"][i]["Present"]);
                    $( "datalist.deliveryCity" ).append("<option value='"+response.data['0']['Addresses'][i]['MainDescription']+"'>"+response.data["0"]["Addresses"][i]["Present"]+"</option>");
                }
            });
        }

        if ($('.inputDelivery').children("option:selected").val()==2){
            console.log("Justin")
        }
    })
    $(".inputDeliveryCity").on('change',function () {
        var getWarehouse = {
            "async": true,
            "crossDomain": true,
            "url": "https://api.novaposhta.ua/v2.0/json/",
            "method": "POST",
            "headers": {
                "content-type": "application/json",
            },
            "processData": false,
            "data":
                "{\r\n\"apiKey\": \"fddd658c93d0dfef5ec6097b636a2727\",\r\n \"modelName\": \"AddressGeneral\",\r\n \"calledMethod\": \"getWarehouses\",\r\n \"methodProperties\": {\r\n \"CityName\": \""+$(this).val()+"\"\r\n }\r\n}"

        };
        $.ajax(getWarehouse).done(function (response) {
            $( ".inputDeliveryWarehouse" ).empty();
            console.log(response)
            for (i=0;i<response.data.length;i++){
                console.log(response.data[i]["Description"]);
                $( "select.inputDeliveryWarehouse" ).append("<option value='"+response.data[i]['Description']+"'>"+response.data[i]['Description']+"</option>");
            }
        });
        console.log("test")
    })

    $("#checkoutSubmit").click(function () {
        $('#calculateText').text();
        console.log($('#calculateText').text())
    })

});


