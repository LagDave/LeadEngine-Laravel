@include('partials.top')

{{-- Page Specific Stylesheets --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
<link rel="stylesheet" href="{{asset('css/form.css')}}">
<link rel="stylesheet" href="{{asset('css/signup_process.css')}}">
<link rel="stylesheet" href="{{asset('css/loader.css')}}">


{{-- Navigation Bar --}}
@include('components.scroll_nav')
{{-- Mobile Navigation Items --}}
@include('components.nav_items_mobile')


{{-- Form --}}
<br><br><br><br><br> {{-- This is to give space between the navigation bar and the signup form --}}


@include('components.signup_form')
<br> {{-- This is to give space between the signup form and the footer --}}

{{-- Footer --}}
@include('components.footer')
{{-- Components --}}
@include('components.pricing_component')
@include('components.case_study_component')

{{-- Loader --}}
@include('components.loader')

@include('partials.bottom')

{{-- Page Specific Scripts --}}
<script src="{{asset('js/static_navbar.js')}}"></script>
<script src="{{asset('js/industries_modal_summoner.js')}}"></script>
<script src="{{asset('js/loader_summoner.js')}}"></script>