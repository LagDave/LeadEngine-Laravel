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

            <br>
            <div class="price-and-calculator-container">
                <p class="text-mednorm text-center">
                    <span class="text-bold text-medium text-primary price">
                        <sup style='font-size:.6em'>$ </sup>
                        <span class="price-value"> 79</span>
                        <span class="cent"> .99</span>
                    </span>
                </p>
                <p class="text-mednorm text-bold text-purple text-center comment"></p>
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

            <table>
                <tr>
                    <td>
                        <p class="text-primary text-small text-bold">Daily Connection Request</p>
                        <p class="text-primary text-small">LeadEngine’s premium use is making connections In Linkedin</p>
                    </td>
                    <td>
                        <p class="pricing-attribute text-bold text-primary text-small">3,000 connection request per month</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-primary text-small text-bold">Daily InMails (up to)</p>
                        <p class="text-primary text-small">LeadEnginge increases your standard InMail limit to reach more connections!</p>
                    </td>
                    <td>
                        <p class="pricing-attribute text-bold text-primary text-small">150 Daily Inmails to 2nd and 3rd Connections</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-primary text-small text-bold">Drip Campaign inside LinkedIn</p>
                        <p class="text-primary text-small">Automates sending messages to new contacts until they Respond</p>
                    </td>
                    <td>
                        <p class="pricing-attribute text-bold text-primary text-small">2 touch messages every month</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-primary text-small text-bold">Enriched Lead Sheet</p>
                        <p class="text-primary text-small">See your leads grow continuously as connections are made
                            Sheet includes details such as Emails, Phone #, 
                            Company name, Background, interest, and lot more 
                            about your new connections
                          </p>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-primary text-small text-bold">Dedicated Account Manager</p>
                        <p class="text-primary text-small">Get to have a personal point-of-contact person whenever
                            You would change anything or if you have questions.                          
                          </p>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-primary text-small text-bold">Script Creation</p>
                        <p class="text-primary text-small">We work with you to evaluate your solution to your target clients
                            So we can compose messages for each touchpoint
                            Make sure to identify your ‘call-to-action’	                      
                          </p>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-primary text-small text-bold">Technical Support</p>
                        <p class="text-primary text-small">24/7 support team ready to assist you with your concerns	                      
                          </p>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-primary text-small text-bold">Inbox Cleaner</p>
                        <p class="text-primary text-small">Once LeadEngine gets cranking, your Inbox will be busy. 
                            We ensure your productivity by cleaning up your Inbox daily, 
                             keeping only the most relevant leads.  
                                                    
                          </p>
                    </td>
                    <td>
                    </td>
                </tr>
            </table>

            <br>
            <button class="btn btn-wide btn-blue">Free Consultation</button>


        </div>

    </div>

    <script>
        $('.price-select-input').change(function(){
            if(this.value == 'monthly'){
                $('.price-value').html('79')
                $('.cent').html('.99')
            }else if(this.value == 'semiannually'){
                $('.price-value').html('420')
                $('.cent').html('.00')
                $('.comment').html('12% Discount!')
            }else if(this.value == 'annually'){
                $('.price-value').html('756')
                $('.cent').html('.00')
                $('.comment').html('20% Discount!')
            }
        })
    </script>

    <br><br><br>

    <div class="how-to-get-started">
        <div class="container">
            <div class="text">
                <p class="text-primary text-big text-bold">
                    How to get started
                </p>
                <p style='line-height: 40px' class="text-primary text-mednorm">
                    Choose one of our standard packages above or ask us to customize features especially for your
                    business. Your success and ROI is only limited by your ability to follow up with the leads
                    you'll
                    get!
                </p>
            </div>
            <div class="image">
                <img src="{{asset('images/pricing-image.PNG')}}">
            </div>
        </div>
    </div>

    <br><br><br>

    <!-- Testimonials    -->

    <div class="testimonials">

        <div class="container">


            <div class="testimonial">

                <img src="{{asset('images/person3.png')}}" class='testimonial-profile' alt="">
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

    @include('components.footer')
</div>
