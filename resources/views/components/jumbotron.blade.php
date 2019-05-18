<!-- Jumbotron Component -->

<div class="jumbotron">
    <div class="container">
        <nav>
            <div class='brand'>

                <img src="{{asset('images/wide_logo_white.png')}}" alt="">

            </div>

            <div class='nav-items'>


                <a class='text-montserrat text-normal nav-item' href="">Home</a>
                <a target='_blank' href='https://calendly.com/leadengine-support/15min'
                   class='text-montserrat text-normal nav-item'>Schedule Call</a>
                <a onclick='showPricingPage()' class='text-montserrat text-normal nav-item'>Pricing</a>
                <a onclick='showCaseStudyPage()' class='text-montserrat text-normal nav-item'>Case Study</a>
                <a href='{{route('signup.index')}}' class='text-montserrat text-normal nav-item'>Sign Up</a>

            </div>

            <div class='contacts'>

                <a href='https://calendly.com/leadengine-support/15min' class="btn btn-blue">Free Consultation</a>

            </div>

            <button class="hamburger btn btn-transparent"><i class="fas fa-bars"></i></button>

        </nav>

        {{-- Nav Items Mobile --}}
        @include('components.nav_items_mobile')


        <div class="jumbo-main-container">
            <p style="opacity:.9" class="text-roboto text-center text-big text-bold">
                Building Relationships, <br>
                one conversation at a time.
            </p>
            <a href='#how-leadengine-works' class="btn btn-blue btn-big">How it works</a>
        </div>
    </div>
</div>