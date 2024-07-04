$(function(){
    $(document).on("click",".order-package",function(){
        
        if (typeof $(".order-package").attr("class") !== "undefined") {
            let ele = $(this);
            data = {
                html_description: ele.parents('[data-package-box]').find('[data-package-scroll]').html(),
                sku: ele.attr('data-sku'),
                categoryType: ele.attr('data-category-type'),
                id: ele.attr('data-package-id'),
                promotion_id: ele.attr('data-promotion-id'),
                title: ele.attr('data-title'),
                price: ele.attr('data-price'),
                priceText: ele.attr('data-price-text'),
                orderSession: 1
            };
            _ajax.post("/crm_inc/core/pricingManagement", data, function (data) {
                window.location = '/order/order-now';
            });
       }

        if (typeof $(".view_detail").attr("class") !== "undefined") {

            $(".view_detail").on("click", function () {
                let ele = $(this),
                    data = {
                        html_description: ele.parents('[data-package-box]').find('[data-package-scroll]').html(),
                        short_description: ele.parents('[data-package-box]').find('[data-package-detail]').html(),
                        sku: ele.attr('data-sku'),
                        categoryType: ele.attr('data-category-type'),
                        id: ele.attr('data-package-id'),
                        promotion_id: ele.attr('data-promotion-id'),
                        title: ele.attr('data-title'),
                        price: ele.attr('data-price'),
                        priceText: ele.attr('data-price-text'),
                        orderSession: 1
                    };

                _ajax.post("/crm_inc/core/pricingManagement", data, function (data) {
                    window.location = '/view_detail';
                });
            });

        }
    })
})