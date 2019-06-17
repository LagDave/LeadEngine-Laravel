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
            
            <div class="pricing-wrapper">
                <div class="price-and-calculator-container">
                    <p style='background:#48CFAF; margin:0; border-radius:5px 5px 0 0; padding:10px 0;' class="text-white pricing-title text-mednorm text-primary text-center">STANDARD</p>

                    <div class="pricing-stats-table">
                        <table style='width:100%; margin-top:10px;'>
                            <tr>
                                <td class='text-primary text-small text-grey'><p>100/day connection request or<br>a total of 3,000/month</p></td>
                            </tr>
                            
                            <tr>
                                <td class='text-primary text-small text-grey'><p>500 to 700 contact details of new<br>connections compiled in a CSV file  </p></td>
                            </tr>
                            
                            <tr>
                                <td class='text-primary text-small text-grey'><p>Custom auto-messaging to new<br>connections (OPTIONAL)</p></td>
                            </tr>
                        
                            <tr>
                                <td class='text-primary text-small text-grey'><p>Dedicated account manager</p></td>
                            </tr>
                        
                            <tr>
                                <td class='text-primary text-small text-grey'><p>24/7 technical support</p></td>
                            </tr>
                        
                            <tr>
                                <td class='text-primary text-small text-grey'><p>Inbox cleaner</p></td>
                            </tr>
                        </table>
                        
                    </div>
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

                    </div>

                    <div class="pricing-select">
                        <select class='price-select-input text-primary'>
                            <option value='monthly' span class='text-primary'>Monthly</span></option>
                            <option value='semiannually' span class='text-primary'>6 Months</span></option>
                            <option value='annually' span class='text-primary'>12 Months</span></option>
                        </select>
                    </div>
                </div>

                <div class="price-and-calculator-container">
                    <p style='background:#EF5563; margin:0; border-radius:5px 5px 0 0; padding:10px 0;' class="text-white pricing-title text-mednorm text-primary text-center">PREMIUM</p>

                    <div class="pricing-stats-table">
                        <table  style='margin-top:10px;width:100%;'>
                            <tr>
                                <td class='text-primary text-grey text-small'><p>All Features of Standard Plan</p></td>
                            </tr>
                            
                            <tr>
                                <td class='text-medium text-bold text-primary'><p>+</p></td>
                            </tr>
                            
                            <tr>
                                <td class='text-primary text-grey text-small'><p>Email Marketing Campaign</p></td>
                            </tr>
                        
                            <tr>
                                <td class='text-primary text-grey text-small'><p>Follow up automation</p></td>
                            </tr>
                        
                            <tr>
                                <td class='text-primary text-grey text-small'><p>Custom Email Template</p></td>
                            </tr>
                        </table>
                        
                    </div>

                    <div class="price-text-container">

                        <div class="pricing-text">
                            <p class="text-mednorm text-center">
                                <span class="text-grey text-bold text-medium text-primary price">
                                    <sup style='font-size:.6em'>$ </sup>
                                    <span class=""> 214</span><span class="">.00</span>
                                </span>
                            </p>
                            <p class="text-mednorm text-primary text-bold text-purple text-center"></p>
                        </div>

                    </div>

                    <div class="pricing-select">
                        <select style="background:#999;" disabled class='price-select-input text-primary'>
                            <option value='monthly' span class='text-primary'>Monthly</span></option>
                            <option value='semiannually' span class='text-primary'>6 Months</span></option>
                            <option value='annually' span class='text-primary'>12 Months</span></option>
                        </select>
                    </div>
                </div>
            </div>
            
            <br><br>
            <p class="text-center">
                <button style='width:60%;' class="btn btn-blue">Free Consultation</button>
            </p>


        </div>

    </div>

    <br><br><br>
    <br>
    <br>

    @include('components.footer')
    <script src='{{asset('js/pricing_calculator.js')}}'></script>
</div>
