<div class="pricing_component">

    <div class="header">
        <div class="container">
            <img src="{{asset('images/wide_logo_white.png')}}" alt="">
            <button class='close' onclick='hidePricingPage()'><i class="fas fa-window-close"></i></button>
        </div>
    </div>

    <br>
    
    <div class="container">
        <p class="text-bold text-medium text-primary text-center">
            Get Started with LeadEngine
        </p>
        <p class="text-normal text-dbl-line-height text-primary text-center">
            LeadEngine is a fully done-for-you B2B Lead Generation. 
            When you consider all the value and return of investment from your 
            leads that LeadEngine generates, it is an INCREDIBLE 
            value for your time & money.
        </p>
        <br>
        <div class="pricing">
                <p class="text-purple text-bold text-mednorm text-center text-primary">PRICING</p>
            <div class="price-and-calculator-container">
                
                <div class="price-text-container">
                    <div class="pricing-text">
                        <p class="text-mednorm text-center">
                            <span class="text-grey text-bold text-medium text-primary price">
                                <sup style='font-size:.6em'>$ </sup>
                                <span class="price-value"> 165</span><span class="cent">.00</span>
                            </span>
                        </p>
                        <p class="text-mednorm text-primary text-bold text-purple text-center comment"></p>
                    </div>
                    <div class="pricing-perks">
                        <p class="text-small text-primary"><i class="text-mednorm fas fa-check-square text-green"></i> 30-Day Money-Back Guarantee</p>
                        <p class="text-small text-primary"><i class="text-mednorm fas fa-check-square text-green"></i> Cancel anytime</p>
                        <p class="text-small text-primary"><i class="text-mednorm fas fa-check-square text-green"></i> No Set up fees</p>

                    
                    </div>
                </div>
                <br>

                <div class="pricing-select">
                    <select class='price-select-input text-primary'>
                        <option value='monthly' span class='text-primary'>Monthly</span></option>
                        <option value='semiannually' span class='text-primary'>6 Months</span></option>
                        <option value='annually' span class='text-primary'>12 Months</span></option>
                    </select>
                </div>
            </div>
            
            <br>
            <br>
            <p class="text-mednorm text-purple-fancy text-bold text-center text-primary">100/day connection request or  3,000/month connection request per campaign</p>
            <p class="text-mednorm text-purple-fancy text-bold text-center text-primary">500 to 700 contact details of new connections compiled in a CSV file
                </p>
            <p class="text-mednorm text-purple-fancy text-bold text-center text-primary">Custom auto-messaging to new connections (Optional)</p>
            <p class="text-mednorm text-purple-fancy text-bold text-center text-primary">Dedicated account manager</p>
            <p class="text-mednorm text-purple-fancy text-bold text-center text-primary">24/7 technical support</p>
            <p class="text-mednorm text-purple-fancy text-bold text-center text-primary">Inbox cleaner</p>

            <br>
            <button class="btn btn-wide btn-blue">Free Consultation</button>


        </div>

    </div>

    <br><br><br>

    <!-- Testimonials    -->

    <div class="testimonials">

        <div class="container">


            <div class="testimonial">
                <p class="text-primary text-mednorm"><i class="text-purple fas fa-quote-right"></i></p>

                <p class="text-primary testimonial-content text-grey text-normal text-center ">
                    For many years we have tried several ideas and systems in order to create an easy and cost
                    effective way to find high quality leads. With Lead Engine, we were able to work with the leads
                    that are actually interested in our services.
                </p>
                <p style='margin-bottom:5px' class="mt-auto text-primary text-bold text-normal">Tom Corvo, <span
                            class='text-purple'>CEO</span></p>
                <p class="text-primary margin-0 text-nano ">Magenic software company</p>
                <div style='margin-top:5px' class="stars-container">

                    <i class="fas text-purple fa-star"></i>
                    <i class="fas text-purple fa-star"></i>
                    <i class="fas text-purple fa-star"></i>
                    <i class="fas text-purple fa-star"></i>
                    <i class="fas text-purple fa-star"></i>

                </div>
            </div>

        </div>

    </div>
    <br>
    <br>

    @include('components.footer')
    <script src='{{asset('js/pricing_calculator.js')}}'></script>
</div>
