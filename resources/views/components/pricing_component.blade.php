<div class="pricing_component">

    <div class="header">
        <div class="container">
            <img src="{{asset('images/wide_logo_white.png')}}" alt="">
            <button class='close' onclick='hidePricingPage()'><i class="fas fa-window-close"></i></button>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="pricing2-container">
            <div></div>
            <div class='pricing'>
                <p class="margin-0 text-primary text-center text-normal">BASIC</p>
                <p class="margin-0 text-primary text-center text-medium">$89.99/Month</p>
                <br>
                <div class="stats-table">

                    <p class="text-center text-primary text-normal">500 Prospects Per Month</p>
                    <p class="text-center text-primary text-normal">2 Touch Message Campaign</p>
                    <p class="text-center text-primary text-normal">Enriched CSV file of new connections</p>
                    <p class="text-center text-primary text-normal">Dedicated Account Manager</p>
                    <p class="text-center text-primary text-normal">Full Tech Support</p>
                    <p class="text-center text-primary text-normal">Monthly Report</p>


                </div>
                <p style='margin-top:auto' class="text-center">
                    <a href="https://calendly.com/leadengine-support/15min" class="btn btn-blue">Schedule a free
                        consultation</a>
                </p>
            </div>

            <div class='pricing'>
                <p class="margin-0 text-primary text-center text-normal">PRO</p>
                <p class="margin-0 text-primary text-center text-medium">149/Month</p>
                <br>
                <div class="stats-table">

                    <p class="text-bold text-center text-primary text-normal">Email Campaign with 99.9%
                        deliverability to
                        Prospect’s Inbox</p>
                    <p class="text-bold text-center text-primary text-normal">90 Day Follow up</p>
                    <p class="text-center text-primary text-normal">500 Prospects Per Month</p>
                    <p class="text-center text-primary text-normal">2 Touch Message Campaign</p>
                    <p class="text-center text-primary text-normal">Enriched CSV file of new connections</p>
                    <p class="text-center text-primary text-normal">Dedicated Account Manager</p>
                    <p class="text-center text-primary text-normal">Full Tech Support</p>
                    <p class="text-center text-primary text-normal">Monthly Report</p>


                </div>
                <p style='margin-top:auto' class="text-center">
                    <a href="https://calendly.com/leadengine-support/15min" class="btn btn-blue">Schedule a free
                        consultation</a>
                </p>
            </div>
            <div></div>
        </div>
    </div>

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
                <p class="text-mednorm"><i class="text-blue fas fa-quote-right"></i></p>

                <p class="testimonial-content text-grey text-normal text-center text-primary">
                    For many years we have tried several ideas and systems in order to create an easy and cost
                    effective way to find high quality leads. With Lead Engine, we were able to work with the leads
                    that are actually interested in our services.
                </p>
                <p style='margin-bottom:5px' class="mt-auto text-primary text-bold text-normal">Tom Corvo, <span
                            class='text-orange'>CEO</span></p>
                <p class="margin-0 text-nano text-primary">Magenic software company</p>
                <div style='margin-top:5px' class="stars-container">

                    <i class="fas text-orange fa-star"></i>
                    <i class="fas text-orange fa-star"></i>
                    <i class="fas text-orange fa-star"></i>
                    <i class="fas text-orange fa-star"></i>
                    <i class="fas text-orange fa-star"></i>

                </div>
            </div>

        </div>

    </div>

    <br>

    @include('components.footer')
</div>
