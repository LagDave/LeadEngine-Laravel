<!-- Scroll Nav Component -->

<div class="scroll-nav">
    <div class="container">

        <div class='brand'>

            <img src="{{asset('images/wide_logo.png')}}" alt="">

        </div>

        <div class='nav-items'>


            <a class='text-primary text-normal nav-item' href="{{route('home')}}">Home</a>
            <a target='_blank' href='https://calendly.com/leadengine-support/15min'
               class='text-primary text-normal nav-item'>Schedule Call</a>
            <a onclick='showPricingPage()' class='text-primary text-normal nav-item'>Pricing</a>
            <a onclick='showCaseStudyPage()' class='text-primary text-normal nav-item'>Case Study</a>
            <a href='{{route('signup.index')}}' class='text-primary text-normal nav-item'>Sign Up</a>

        </div>

        <div class='contacts'>

            <a href='http://web.leadengine.live/faq' class="btn btn-blue">Frequently Asked Questions</a>

        </div>

        <button class="hamburger btn btn-transparent"><i class="text-grey fas fa-bars"></i></button>

    </div>
</div>