
// Basic Plan
paypal.Button.render({
    // Configure environment
    env: 'production',
    client: {
        sandbox: 'AfP1bnFlqbbeoVW-y863YUTo3NmjyzYHlPSLOPuvJ6R2_zfmEXfjqj1oFkrEN0qTPLQsxHmufjJjhk_q',
        production: 'AVKYeWo_SNR5CPffqjvYtg6STTakK8dy9rmtox8KxkXGz8w_r-7F0i9PMjIvG8gtMhEKPkBR1mrDJ6D-'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'responsive',
        color: 'blue',
        shape: 'pill',
        tagline: false
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function (data, actions) {
        return actions.payment.create({
            transactions: [{
                amount: {
                    total: paypal_price,
                    currency: 'USD'
                }
            }]
        });
    },

    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute().then(function () {
            showLoader();
            window.location.href = "http://web.leadengine.live/signup/sendmail";
        });
    }
}, '#paypal-button');