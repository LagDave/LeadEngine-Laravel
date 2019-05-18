@include('partials.top')
{{-- Page specific stylesheets --}}
<link rel="stylesheet" href="{{asset('css/success.css')}}">


@include('components.scroll_nav')
@include('components.nav_items_mobile')

<br><br><br><br><br><br>
<div class="container">
    <div class="success-container">

        <img style="width:150px" src="{{asset('images/success.png')}}" alt="">
        <p class="text-roboto text-medium text-center">
            <b>Thank You For Signing up!</b>
        </p>
        <p class="text-dbl-line-height text-montserrat text-normal text-center">
            Your respective client success manager will be in touch within the next couple of hours.<br>
            For more questions, email us at support@leadengine.live    </p>
        <br>
        <a target="_blank" href="https://web.facebook.com/LeadEngineB2B/" class="btn btn-lg btn-blue">Visit and <i class="fas fa-thumbs-up"></i> our <i class="fab fa-facebook-square"></i> Page</a>
    </div>
</div>
<br><br><br>
@include('components.footer')

{{-- Components --}}
    {{-- Pricing Component --}}
    @include('components.pricing_component')
    {{-- Case Study Component --}}
    @include('components.case_study_component')

@include('partials.bottom')
{{-- Page specific scripts --}}
<script src="{{asset('js/static_navbar.js')}}"></script>