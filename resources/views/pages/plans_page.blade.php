@include('partials.top')
{{-- Page Specific stylesheets --}}
<link rel="stylesheet" href="{{asset('css/loader.css')}}">
<link rel="stylesheet" href="{{asset('css/signup_process.css')}}">



  


{{-- Navigation Bar --}}
@include('components.scroll_nav')
<br><br><br><br><br><br>

@include('components.nav_items_mobile')

<div class="progress-container">
    <ul class="progressbar">
      <li class="text-primary text-grey active">Sign up</li>
      <li class='text-primary text-grey active'>Payment Process</li>
      <li class='text-primary text-grey '>Survey</li>
      <li class='text-primary text-grey '>Success</li>
    </ul>
  </div>
</div>

<br><br><br><br><br>
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

@include('components.loader')

@include('partials.bottom')
{{-- Page Specific Scripts --}}
<script src="{{asset('js/static_navbar.js')}}"></script>
<script src="{{asset('js/loader_summoner.js')}}"></script>
<script src='{{asset('js/pricing_calculator.js')}}'></script>
