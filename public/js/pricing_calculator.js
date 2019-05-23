var paypal_price = 0.3; // 79.99


$('.price-select-input').change(function () {
    if (this.value == 'monthly') {
        $('.price-value').html('79')
        $('.cent').html('.99');
        $('.comment').html('')
        paypal_price = 0.3; // 79.99
    } else if (this.value == 'semiannually') {
        $('.price-value').html('420')
        $('.cent').html('.00')
        $('.comment').html('Save 12%')
        paypal_price = 0.6; // 420
    } else if (this.value == 'annually') {
        $('.price-value').html('756')
        $('.cent').html('.00')
        $('.comment').html('Save 20%!')
        paypal_price = 0.9; // 756
    }
})