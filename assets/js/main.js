$( document ).ready(function() {

    // fetch product 
    $.getJSON('/api/products.json', function(data) {
        let str = "";
        $.each(data, function(key, value) {
            // best seller
            if(value.tag == 'best_seller') {
                str += `<div class="product bestseller">
                    <div class="product__top radio">
                        <div class="product__left">
                        <p class="product__name">
                            `+value.name+`
                            <!---->
                        </p>
                        <p class="product__discount"><span>
                            `+value.discount*100+`%
                            Discount
                            </span> <span><span>$`+value.discounted_price+`</span>
                            / each
                            </span>
                        </p>
                        </div>
                        <div class="product__right">
                        <span><span class="product__price">$`+value.sell_price+`</span> <span class="product__price product__price--old">`+value.sell_price*value.discount+`</span></span> <!---->
                        </div>
                    </div>
                    <div class="bestseller-element">Best Seller</div>
                </div>`;
            }
            
            // recommended
            else if(value.tag == 'recommended') {
                str += `<div class="product">
                    <div class="product__top radio">
                        <div class="product__left">
                        <p class="product__name">
                            `+value.name+`
                            <!---->
                        </p>
                        <p class="product__discount"><span>
                            `+value.discount*100+`%
                            Discount
                            </span> <span><span>$`+value.discounted_price+`</span>
                            / each
                            </span>
                        </p>
                        </div>
                        <div class="product__right">
                        <span><span class="product__price">$`+value.sell_price+`</span> <span class="product__price product__price--old">`+value.sell_price*value.discount+`</span></span> <!---->
                        </div>
                    </div>
                    <div class="recommened-element">Recommended Deal</div>
                </div>`;
            }

            else {
                str += `<div class="product">
                    <div class="product__top radio">
                        <div class="product__left">
                        <p class="product__name">
                            `+value.name+`
                            <!---->
                        </p>
                        <p class="product__discount"><span>
                            `+value.discount*100+`%
                            Discount
                            </span> <span><span>$`+value.discounted_price+`</span>
                            / each
                            </span>
                        </p>
                        </div>
                        <div class="product__right">
                        <span><span class="product__price">$`+value.sell_price+`</span> <span class="product__price product__price--old">`+value.sell_price*value.discount+`</span></span> <!---->
                        </div>
                    </div>
                </div>`;
            }


        });

        $("#products").html(str)
    });


    // select product
    $(".products").on("click",".product" ,function() {
        $(".product").removeClass("product--selected")
        $(this).addClass("product--selected")
    });


    // accept terms
    $(".accept-terms").on("click", ".checkbox", function() {
        $(this).toggleClass("checkbox--selected");
        if($(this).hasClass("checkbox--selected")) {
            $(".btn--submit").removeClass("btn--disabled");
            $(".btn--submit").prop("disabled", false);
        } else {
            $(".btn--submit").addClass("btn--disabled");
            $(".btn--submit").prop("disabled", true);
        }
    }) ;



    // get current ip
    $.getJSON("https://api.ipify.org?format=json", function(data) { 
        $("#customer_ip").val(data.ip);
    })


    // submit 
    $("#btn--submit").on("click", function(e) {
        e.preventDefault();
        console.log('submit form');

        let data = {
            firstname: $("#firstname").val(),
            lastname: $("#lastname").val(),
            card_number: $("#cc_no").val(),
            expiration_month: $("#exp_mo").val(),
            expiration_year: $("#exp_year").val(),
            cvc: $("#cc_cvc").val(),
            orderid: $("#orderid").val(),
            transaction_type: $("#transaction_type").val(),
            amount: $("#amount").val(),
            currency: $("#currency").val(),
            email: $("#email").val(),
            street: $("#street").val(),
            city: $("#city").val(),
            zip: $("#zip").val(),
            state: $("#state").val(),
            country: $("#country").val(),
            phone: $("#phone").val(),
            customerip: $("#customerip").val(),
        }

        console.log(data)
        
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
          )
    });

});
