@include('partials.top')
{{-- Page specific stylesheets --}}
<link rel="stylesheet" href="{{asset('css/success.css')}}">


@include('components.scroll_nav')
@include('components.nav_items_mobile')

<br><br><br><br><br><br>
<div class="container">
    <div class="success-container">

        <img style="width:150px" src="{{asset('images/success.png')}}" alt="">
        <p class="text-primary text-medium text-center">
            <b>Thank you for signing up!</b>
        </p>
        <p class="text-dbl-line-height text-primary text-normal text-center">
            Pick a date & time to schedule our On-boarding session!
        </p>
        <br>
        <a href='https://calendly.com/leadengine-support/15min' class="btn btn-blue">Schedule On-Boarding Session</a>

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