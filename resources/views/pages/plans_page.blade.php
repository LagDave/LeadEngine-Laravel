@include('partials.top')

{{-- Navigation Bar --}}
@include('components.scroll_nav')
<br><br><br><br><br><br>

@include('components.nav_items_mobile')

{{-- Plan Component --}}
@include('components.plan_component')

{{-- Footer --}}
<br><br>
@include('components.footer')

{{-- Components --}}
    {{--Pricing Component--}}
    @include('components.pricing_component')
    {{-- Case Study Component --}}
    @include('components.case_study_component')

@include('partials.bottom')
{{-- Page Specific Scripts --}}
<script src="{{asset('js/static_navbar.js')}}"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src='{{asset('js/paypal_buttons.js')}}'></script>