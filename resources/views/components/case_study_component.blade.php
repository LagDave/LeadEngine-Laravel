<!-- Case Study Component -->
<div class="case_study_component">

    <div class="header">
        <div class="container">
            <img src="{{asset('images/wide_logo_white.png')}}" alt="">
            <button class=' close' onclick='hideCaseStudyPage()'><i class="fas fa-window-close"></i></button>
        </div>
    </div>

    <div class="container">

        <div class="bambee-case-study">
            <img src="/images/bambee1.png" alt="">
            <img src="/images/bambee3.png" alt="">
            <img src="/images/bambee2.png" alt="">
        </div>

        <div class="testimonials">

            <p class="text-primary title text-medium text-center ">REVIEWS &amp; <span
                        class="text-purple">TESTIMONIALS</span>
            </p>


            <div class="container">


                <div class="testimonial">

                    <img src="{{asset('images/person1.jpg')}}" class='testimonial-profile' alt="">
                    <p class="text-mednorm"><i class="text-purple fas fa-quote-right"></i></p>

                    <p class="text-primary text-grey text-normal text-center ">
                        Recruiting agents has been a walk in the park. I used to have
                        virtual assistants doing the legwork for me and it’s expensive.
                        LeadEngine saved me thousands of dollars in so little time. Great job.
                    </p>
                    <p style='margin-bottom:5px' class="mt-auto text-primary text-bold text-normal">Harold Clarke, <span
                                class='text-purple'>Realtor</span></p>
                    <p class="text-primary margin-0 text-nano ">Luxury Big Island</p>
                    <div style='margin-top:5px' class="stars-container">

                        <i class="fas text-purple fa-star"></i>
                        <i class="fas text-purple fa-star"></i>
                        <i class="fas text-purple fa-star"></i>
                        <i class="fas text-purple fa-star"></i>
                        <i class="fas text-purple fa-star"></i>

                    </div>
                </div>

                <div class="testimonial">

                    <img src="{{asset('images/person3.jpg')}}" class='testimonial-profile' alt="">
                    <p class="text-primary text-mednorm"><i class="text-purple fas fa-quote-right"></i></p>

                    <p class="text-primary text-grey text-normal text-center ">
                        Excellent service and results! I never thought that there would be a simple process like
                        LeadEngine.
                        I don’t need to
                        lift a finger to do cold calling anymore and just get rejected.
                    </p>
                    <p style='margin-bottom:5px' class="mt-auto text-primary text-bold text-normal">Alena Griffey, <span
                                class='text-purple'>Mortgage Loan Officer</span></p>
                        <p class="text-primary margin-0 text-nano ">Trusted Home Loans</p>
                        <div style='margin-top:5px' class="stars-container">

                            <i class="text-purple fas fa-star"></i>
                            <i class="text-purple fas fa-star"></i>
                            <i class="text-purple fas fa-star"></i>
                            <i class="text-purple fas fa-star"></i>
                        <i class="text-purple fas fa-star"></i>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>

   @include('components.footer')


</div>