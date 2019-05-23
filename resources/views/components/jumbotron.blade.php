<!-- Jumbotron Component -->

<div class="jumbotron">
    <div class="container">
        <nav>
            <div class='brand'>

                <img src="{{asset('images/wide_logo_white.png')}}" alt="">

            </div>

            <div class='nav-items'>


                <a class='text-primary text-small nav-item' href="">Home</a>
                <a target='_blank' href='https://calendly.com/leadengine-support/15min'
                   class='text-primary text-small nav-item'>Schedule Call</a>
                <a onclick='showPricingPage()' class='text-primary text-small nav-item'>Pricing</a>
                <a onclick='showCaseStudyPage()' class='text-primary text-small nav-item'>Case Study</a>
                <a href='{{route('signup.index')}}' class='text-primary text-small nav-item'>Sign Up</a>
                <a href='https://calendly.com/leadengine-support/15min' class='text-primary text-small   nav-item' >Free Consultation</a>

            </div>
            <button class="hamburger btn btn-transparent"><i class="fas fa-bars"></i></button>

        </nav>
        

        {{-- Nav Items Mobile --}}
        @include('components.nav_items_mobile')


        <div class="jumbo-main-container">
            <div class="jumbo-text">
                <p class="jb-header text-medium text-primary text-white">
                    Automate your business with Linkedin -
                    LinkedIn Sales Navigator & Linkedin Recruiter ( Full & Lite )
                </p>
                <p style='color:yellow' class="jb-subheader text-dbl-line-height text-primary">
                    Send thousands of personalized messages to your dream clients or target audience - get positive responses straight to your inbox
                    <br><br>
                    Identifies your target audience and sends 3,000 connection request per month
                </p>


                <br>


                <p>
                    <button class="btn btn-white" onclick='showPricingPage()'>See Pricing</button>
                </p>
            </div><!-- Jumbo Text -->

            <div class="jumbo-image">
                <img src="{{asset('images/jumbotron_person.png')}}" alt="">
            </div><!-- Jumbo Image -->

        </div>
    </div>
</div>