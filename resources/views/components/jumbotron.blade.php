<!-- Jumbotron Component -->

<div class="jumbotron">
    <div class="container">
        <nav>
            <div class='brand'>

                <img src="{{asset('images/wide_logo_white.png')}}" alt="">

            </div>

            <div class='nav-items'>


                <a class='text-primary text-normal nav-item' href="">Home</a>
                <a target='_blank' href='https://calendly.com/leadengine-support/15min'
                   class='text-primary text-normal nav-item'>Schedule Call</a>
                <a onclick='showPricingPage()' class='text-primary text-normal nav-item'>Pricing</a>
                <a onclick='showCaseStudyPage()' class='text-primary text-normal nav-item'>Case Study</a>
                <a href='{{route('signup.index')}}' class='text-primary text-normal nav-item'>Sign Up</a>
                <a href='https://calendly.com/leadengine-support/15min' class='text-primary nav-item' >Free Consultation</a>

            </div>
            <button class="hamburger btn btn-transparent"><i class="fas fa-bars"></i></button>

        </nav>
        

        {{-- Nav Items Mobile --}}
        @include('components.nav_items_mobile')


        <div class="jumbo-main-container">
            <div class="jumbo-text">
                <p class="text-primary text-bigmed text-white">
                    The Most Powerful B2B Lead Gen on the market
                </p>
                <p class="text-dbl-line-height text-primary text-mednorm text-white">
                    The success of your business depends on your leads and your ability to get them excited about your brand. Leads can come in from a variety of sources with unique requirements, and your primary focus should be on creating a good relationship with them. 
                </p>
                <br>
                <p>
                    <a href= 'https://calendly.com/leadengine-support/15min' class="btn btn-white">Free Consultation</a>
                </p>
            </div><!-- Jumbo Text -->

            <div class="jumbo-image">
                <img src="{{asset('images/jumbotron_person.png')}}" alt="">
            </div><!-- Jumbo Image -->

        </div>
    </div>
</div>