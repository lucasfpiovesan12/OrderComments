var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/place-order': {
                'PalacioDasFerramentas_OrderComments/js/order/place-order-mixin': true
            },
            'Magento_Checkout/js/action/set-payment-information': {
                'PalacioDasFerramentas_OrderComments/js/order/set-payment-information-mixin': true
            }
        }
    }
};