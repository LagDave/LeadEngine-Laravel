@include('partials.top')
{{-- Page Specific Stylsheets --}}
{{-- This is used to overrid the default jumbotron styling --}}

<link rel="stylesheet" href="{{asset('css/resell.css')}}">


@include('components/scroll_nav')
@include('components/nav_items_mobile')

<div class="jumbotron">
    <div class="container">
        <nav>
            <div class='brand'>

                <img src="{{asset('images/wide_logo_white.png')}}" alt="">

            </div>

            <div class='nav-items'>


                <a class='text-primary text-small nav-item' href="{{route('home')}}">Home</a>
                <a href='http://web.leadengine.live/faq' class='text-primary text-small   nav-item' >FAQ</a>
                <a onclick='showPricingPage()' class='text-primary text-small nav-item'>Pricing</a>
                <a onclick='showCaseStudyPage()' class='text-primary text-small nav-item'>Case Study</a>
                <a href='{{route('signup.index')}}' class='text-primary text-small nav-item'>Sign Up</a>
                <a href='{{route('resell')}}' class='text-primary text-small nav-item'>Resell</a>
                <a style='border: 2px solid #aaa; font-size:.8em; padding:10px 0' href='https://calendly.com/leadengine-support/15min' class='text-primary text-small   nav-item' >Free Consultation</a>

            </div>
            <button class="hamburger btn btn-transparent"><i class="fas fa-bars"></i></button>

        </nav>
        

        {{-- Nav Items Mobile --}}
        @include('components.nav_items_mobile')


        <div class="jumbo-main-container">
            
            <br><br>
            <p class="text-center text-primary text-bigmed jumbo-head">Your Brand. Our Solution.</p>
            <p class="text-center text-primary text-grey text-mednorm jumbo-subhead">Take the whole team of LeadEngine and it’s<br>done-for-you-solution for your business.</p>

        </div>
    </div>
</div>

<div class='resell-component2'>
    <div class="container">
        <p class="text-medium text-center text-primary"><b>Rebrand. Resell</b></p>
        <p style='max-width:700px; margin:0 auto' class="text-dbl-line-height text-normal text-primary text-grey">LeadEngine provides a quality lead generation service and it’s also the lowest price lead gen service compared to others that charge $200 to $700 per month. Our quality service will stay at $79/month. Here are some things to think about:</p>

        <br><br>
        <div class="resell-component2-things">
            <div>
                <p class="text-mednorm text-primary text-bold">Have it your way</p>
                <p class="text-primary text-normal text-grey text-dbl-line-height">You can create your own brand and market the service in your own terms. Set your own price or additional set up fees, it’s your call.</p>
            </div>

            <div>
                <p class="text-mednorm text-primary text-bold">Full Assistance</p>
                <p class="text-primary text-normal text-grey text-dbl-line-height">Our support team and customer service team is here to back you up and handle all your client's accounts, inquiries, or change request in their campaigns. They can contact support anytime through email. We will provide a general email address to you that you can give to your clients whenever they wish to contact our support team. Don't worry, we will use a general support email address because we understand that you have a brand on your own.</p>
            </div>

            <div>
                <p class="text-mednorm text-primary text-bold">Dedicated Manager</p>
                <p class="text-primary text-normal text-grey text-dbl-line-height">You will have a point-of-contact person to guide you all the way.</p>    
            </div>
        </div>
    </div>
</div>

<br><br><br>
<div class="resell-reminders">
    <div class="container">
        <p class="text-medium text-center text-primary"><b>Remind your clients on these requirements</b></p>
        <br><br>
        <p style='max-width:900px; margin:0 auto' class="text-normal text-bold text-primary">Your Clients LinkedIn account Login Credentials</p>
        <br>
        <p style='max-width:900px; margin:0 auto; color:#555' class="text-dbl-line-height text-normal text-primary">- Our automated system runs inside the client’s LinkedIn account. Log-in details are required for LeadEngine to start the campaign. You are required to have your client's log-in details and email it to support@leadengine.live</p>
        
        <br><br>
        <p style='max-width:900px; margin:0 auto' class="text-normal text-bold text-primary">Sales Navigator Premium Service</p>
        <br>
        <p style='max-width:900px; margin:0 auto; color:#555' class="text-dbl-line-height text-normal text-primary">- Your client account must have a Sales Navigator premium service on his/her account before the campaign starts. You can find that on the upper right part of the profile page in LinkedIn. It’s free for a month then becomes $79/month after.</p>
    </div>
</div>

<div class="free-consultation">
    <div class="container">
        <p class="text-primary text-center  text-medium">Schedule your Strategy Session</p>
        <br>
        <p class="text-primary text-center">
            <a href='https://calendly.com/leadengine-support/15min' class="btn btn-white">Let's get started</a>
        </p>
    </div>
</div>

    {{-- Components --}}
    @include('components.pricing_component')
    @include('components.case_study_component')
@include('components.footer')


@include('partials.bottom')