<!-- Case Study Component -->
<div class="case_study_component">

    <div class="header">
        <div class="container">
            <img src="{{asset('images/wide_logo_white.png')}}" alt="">
            <button class=' close' onclick='hideCaseStudyPage()'><i class="fas fa-window-close"></i></button>
        </div>
    </div>

    <div class="container">

        <p class="text-montserrat text-center text-bold text-grey text-medium">CASE STUDY</p>
        <p class="text-montserrat text-grey text-mednorm text-center">This case study shows results from a
            LeadEngine lender client over a 30-day period.</p>
        <br>
        <div class="cs-con1">

            <div class="cs-con1-text">

                <p class="text-grey text-montserrat text-mednorm">Industry: <strong>Mortgage Lender</strong></p>
                <p class="text-grey text-montserrat text-mednorm">Prospect: <strong>Real Estate Agents</strong></p>
                <p class="text-grey text-montserrat text-mednorm">Market: <strong>Massachusets</strong></p>
                <p class="text-grey text-montserrat text-mednorm">Outreach: <strong>2,200</strong></p>
                <p class="text-grey text-montserrat text-mednorm">New Connections: <strong>459 (20%)</strong></p>
                <p class="text-grey text-montserrat text-mednorm">Email Responses: <strong>139 (31%)</strong></p>
                <p class="text-grey text-montserrat text-mednorm">Appointments: <strong>15 (11%)</strong></p>


            </div>

            <div class="cs-con1-img">

                <img src="{{asset('images/case_study.PNG')}}" alt="">

            </div>

        </div>
        <br><br>
        <div class="cs-con2">

            <p class="text-montserrat text-grey text-medium">Summary:</p>
            <p class="text-montserrat text-grey text-mednorm">
                Our lender client was able to book 15 appointments with new
                Realtors in the first 30-days. The entire outreach, connection and
                follow-up system ran for 90-days without the lender having to lift
                a finger, except engage with the Realtors and book the appointments!
                The ROI from one closed loan will exceed the annual cost of subscription.
                The anticipated ROI from 15 new Realtor appointments is exponential.
                The client has now expanded their campaign into other prospects such
                as Financial Planners, CPA’s and Divorce Attorneys.
            </p>

        </div>

    </div>

    <div class="testimonials">

        <p class="title text-medium text-center text-barlow">REVIEWS &amp; <span
                    class="text-blue">TESTIMONIALS</span>
        </p>


        <div class="container">


            <div class="testimonial">

                <img src="{{asset('images/person1.jpg')}}" class='testimonial-profile' alt="">
                <p class="text-mednorm"><i class="text-blue fas fa-quote-right"></i></p>

                <p class="text-grey text-normal text-center text-montserrat">
                    Recruiting agents has been a walk in the park. I used to have
                    virtual assistants doing the legwork for me and it’s expensive.
                    LeadEngine saved me thousands of dollars in so little time. Great job.
                </p>
                <p style='margin-bottom:5px' class="mt-auto text-barlow text-bold text-normal">Harold Clarke, <span
                            class='text-orange'>Realtor</span></p>
                <p class="margin-0 text-nano text-montserrat">Luxury Big Island</p>
                <div style='margin-top:5px' class="stars-container">

                    <i class="fas text-orange fa-star"></i>
                    <i class="fas text-orange fa-star"></i>
                    <i class="fas text-orange fa-star"></i>
                    <i class="fas text-orange fa-star"></i>
                    <i class="fas text-orange fa-star"></i>

                </div>
            </div>

            <div class="testimonial">

                <img src="{{asset('images/person3.jpg')}}" class='testimonial-profile' alt="">
                <p class="text-mednorm"><i class="text-blue fas fa-quote-right"></i></p>

                <p class="text-grey text-normal text-center text-montserrat">
                    Excellent service and results! I never thought that there would be a simple process like
                    LeadEngine.
                    I don’t need to
                    lift a finger to do cold calling anymore and just get rejected.
                </p>
                <p style='margin-bottom:5px' class="mt-auto text-barlow text-bold text-normal">Alena Griffey, <span
                            class='text-orange'>Mortgage Loan Officer</span></p>
                <p class="margin-0 text-nano text-montserrat">Trusted Home Loans</p>
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