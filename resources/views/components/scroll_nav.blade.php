<!-- Scroll Nav Component -->

<div class="scroll-nav">
    <div class="container">

        <div class='brand'>

            <img src="{{asset('images/wide_logo.png')}}" alt="">

        </div>

        <div class='nav-items'>


            <a class='text-primary text-normal nav-item' href="{{route('home')}}">Home</a>
            <a onclick='showPricingPage()' class='text-primary text-normal nav-item'>Pricing</a>
            <a onclick='showCaseStudyPage()' class='text-primary text-normal nav-item'>Case Study</a>
            <a class='text-primary text-normal nav-item' href="{{route('resell')}}">Resell</a>

        </div>

        <div class='contacts'>

            <a href='https://calendly.com/leadengine-support/15min' class="btn btn-blue">Free Consultation</a>

        </div>

        <button class="hamburger btn btn-transparent"><i class="text-grey fas fa-bars"></i></button>

    </div>
</div>