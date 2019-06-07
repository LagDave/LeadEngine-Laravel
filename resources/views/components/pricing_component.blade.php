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
                <p class="text-grey text-bold text-medium text-center text-primary">PRICING</p>
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
            
            <p class='text-dbl-line-height text-normal' style='max-width:600px; margin:0 auto'><span class="text-green"><i class="fas fa-check-circle"></i></span> <span class="text-grey text-primary"> 100/day connection request or  3,000/month connection request per campaign</span></p>
            <br>
            <p class='text-dbl-line-height text-normal' style='max-width:600px; margin:0 auto'><span class="text-green"><i class="fas fa-check-circle"></i></span> <span class="text-grey text-primary">500 to 700 contact details of new connections compiled in a CSV file</span></p>
            <br>
            <p class='text-dbl-line-height text-normal' style='max-width:600px; margin:0 auto'><span class="text-green"><i class="fas fa-check-circle"></i></span> <span class="text-grey text-primary">Custom auto-messaging to new connections (Optional)</span></p>
            <br>
            <p class='text-dbl-line-height text-normal' style='max-width:600px; margin:0 auto'><span class="text-green"><i class="fas fa-check-circle"></i></span> <span class="text-grey text-primary">Dedicated account manager</span></p>
            <br>
            <p class='text-dbl-line-height text-normal' style='max-width:600px; margin:0 auto'><span class="text-green"><i class="fas fa-check-circle"></i></span> <span class="text-grey text-primary">24/7 technical support</span></p>
            <br>
            <p class='text-dbl-line-height text-normal' style='max-width:600px; margin:0 auto'><span class="text-green"><i class="fas fa-check-circle"></i></span> <span class="text-grey text-primary">Inbox cleaner</span></p>

            <br>
            <p class="text-center">
                <button class="btn btn-blue">Free Consultation</button>
            </p>


        </div>

    </div>

    <br><br><br>
    <br>
    <br>

    @include('components.footer')
    <script src='{{asset('js/pricing_calculator.js')}}'></script>
</div>
