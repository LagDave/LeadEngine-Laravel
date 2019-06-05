let checkout_container = $(".checkout-container")
checkout_container.html('<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="RAAKHJF7R9JWL"><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></form>')


$('.price-select-input').change(function () {
    if (this.value == 'monthly') {
        $('.price-value').html('79')
        $('.cent').html('.99');
        $('.comment').html('')


        // Set the html
        checkout_container.html('<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="RAAKHJF7R9JWL"><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></form>')
    } else if (this.value == 'semiannually') {
        $('.price-value').html('420')
        $('.cent').html('.00')
        $('.comment').html('Save 12%')


        // Set the html
        checkout_container.html('<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="RZ5J3QAR3Z7N4"><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></form>')
    } else if (this.value == 'annually') {
        $('.price-value').html('756')
        $('.cent').html('.00')
        $('.comment').html('Save 20%!')


        // Set the html
        checkout_container.html('<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">  <input type="hidden" name="cmd" value="_s-xclick">    <input type="hidden" name="hosted_button_id" value="6BQBE73XW4S46"> <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">   </form>')

    }
})