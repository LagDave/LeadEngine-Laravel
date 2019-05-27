<!-- Jumbotron Component -->

<div class="jumbotron">
    <div class="container">
        <nav>
            <div class='brand'>

                <img src="{{asset('images/wide_logo_white.png')}}" alt="">

            </div>

            <div class='nav-items'>


                <a class='text-primary text-small nav-item' href="">Home</a>
                <a href='http://web.leadengine.live/faq' class='text-primary text-small   nav-item' >FAQ</a>
                <a onclick='showPricingPage()' class='text-primary text-small nav-item'>Pricing</a>
                <a onclick='showCaseStudyPage()' class='text-primary text-small nav-item'>Case Study</a>
                <a href='{{route('signup.index')}}' class='text-primary text-small nav-item'>Sign Up</a>
                <a style='border: 2px solid #aaa; font-size:.8em; padding:10px 0' href='https://calendly.com/leadengine-support/15min' class='text-primary text-small   nav-item' >Free Consultation</a>

            </div>
            <button class="hamburger btn btn-transparent"><i class="fas fa-bars"></i></button>

        </nav>
        

        {{-- Nav Items Mobile --}}
        @include('components.nav_items_mobile')


        <div class="jumbo-main-container">
            
            <div class="left-hand">
                <p class="text-primary text-medium text-white">Automate your business with LinkedIn - LinkedIn Sales Navigator & LinkedIn Recruiter.</p>
                <p class="text-white text-primary text-normal">LeadEngine finds your qualified prospects, composed tested outreach messages, and send thousands of personalized messages to your ideal
                    prospects every month - get positive responses straight to your inbox
                </p>
                <button class="btn btn-orange">Free Consultation</button>
                <div class="stars-container">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="jb-divider"><div></div></div>

            <div class="right-hand">
                <p class='text-primary text-medium text-white'>
                    Resell our Service, Under your Own Brand.
                </p>
                <button class="btn btn-orange">More Information</button>
                <div class="stars-container">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>
    </div>
</div>