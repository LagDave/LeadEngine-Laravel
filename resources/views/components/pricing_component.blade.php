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
                    <p style='background:linear-gradient(45deg, purple 50%, darkblue );; margin:0; border-radius:5px 5px 0 0; padding:30px 0;' class="text-white pricing-title text-mednorm text-primary text-center">STANDARD</p>

                    <div class="pricing-stats-table">
                        <table style='margin-top:30px;'>
                            <tr>
                                <td class='text-center text-primary text-grey'>100/day connection request or a total of 3,000/month</td>
                            </tr>
                            
                            <tr>
                                <td class='text-center text-primary text-grey'>500 to 700 contact details of new connections compiled in a CSV file  </td>
                            </tr>
                            
                            <tr>
                                <td class='text-center text-primary text-grey'>Custom auto-messaging to new Connections (OPTIONAL)</td>
                            </tr>
                        
                            <tr>
                                <td class='text-center text-primary text-grey'>Dedicated account manager</td>
                            </tr>
                        
                            <tr>
                                <td class='text-center text-primary text-grey'>24/7 technical support</td>
                            </tr>
                        
                            <tr>
                                <td class='text-center text-primary text-grey'>Inbox cleaner</td>
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
                    <p style='background:linear-gradient(45deg, purple 50%, darkblue );; margin:0; border-radius:5px 5px 0 0; padding:30px 0;' class="text-white pricing-title text-mednorm text-primary text-center">PREMIUM</p>

                    <div class="pricing-stats-table">
                        <table  style='margin-top:30px;width:100%;'>
                            <tr>
                                <td class='text-center text-primary text-grey'>All Features of Standard Plan</td>
                            </tr>
                            
                            <tr>
                                <td class='text-center text-medium text-bold text-primary'>+</td>
                            </tr>
                            
                            <tr>
                                <td class='text-center text-primary text-grey'>Email Marketing Campaign</td>
                            </tr>
                        
                            <tr>
                                <td class='text-center text-primary text-grey'>Follow up automation</td>
                            </tr>
                        
                            <tr>
                                <td class='text-center text-primary text-grey'>Custom Email Template</td>
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
