@include('partials.top')
{{-- Page specific stylesheets --}}
<link rel="stylesheet" href="{{asset('css/success.css')}}">
<link rel="stylesheet" href="{{asset('css/signup_process_cancelled.css')}}">


@include('components.scroll_nav')
@include('components.nav_items_mobile')

<br><br><br><br><br><br>
<div class="progress-container">
    <ul class="progressbar">
      <li class="text-primary text-grey active">Personal Information</li>
      <li class='text-primary text-grey active'>Payment Process</li>
      <li class='text-primary text-grey active'>Survey</li>
      <li class='text-primary text-grey active'>Success</li>
    </ul>
  </div>
</div>




<br><br><br><br><br>
<div style='margin-top:30px;' class="container">
    <div class="success-container">

        <img style="width:150px" src="{{asset('images/sad.png')}}" alt="">
        <p class="text-primary text-medium text-center">
            <b>The payment was not successful!</b>
        </p>
        <p class="text-dbl-line-height text-primary text-normal text-center">
            Either it was because of our system or you cancelled the payment.
            <br>Anyways, you can always contact us at support@leadengine.live
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