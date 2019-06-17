@include('partials.top')
{{-- Page specific stylesheets --}}
<link rel="stylesheet" href="{{asset('css/success.css')}}">
<link rel="stylesheet" href="{{asset('css/signup_process.css')}}">


@include('components.scroll_nav')
@include('components.nav_items_mobile')

<br><br><br><br><br><br>
<div style='margin-top:30px;' class="container">
    <div class="success-container">

        <img style="width:150px" src="{{asset('images/success.png')}}" alt="">
        <p class="text-primary text-medium text-center">
            <b>Thank you! Your dedicated account manager will be in touch in a while. </b>
        </p>
        <p style='max-width:900px; margin:0 auto' class="text-dbl-line-height text-primary text-normal text-center">
            For any concern, please contact our support team at support@leadengine.live
        </p>

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