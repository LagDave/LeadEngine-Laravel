@include('partials.top')
{{-- Page specific stylesheets --}}
<link rel="stylesheet" href="{{asset('css/success.css')}}">
<link rel="stylesheet" href="{{asset('css/signup_process.css')}}">


@include('components.scroll_nav')
@include('components.nav_items_mobile')

<br><br><br><br><br><br>
<div class="progress-container">
    <ul class="progressbar">
      <li class="signup text-primary text-grey active">Sign up</li>
      <li class='signup text-primary text-grey active'>Payment Process</li>
      <li class='signup text-primary text-grey active'>Success</li>
    </ul>
  </div>
</div>




<br><br><br><br><br>
<div style='margin-top:30px;' class="container">
    <div class="success-container">

        <img style="width:150px" src="{{asset('images/success.png')}}" alt="">
        <p class="text-primary text-medium text-center">
            <b>Thank you for signing up!</b>
        </p>
        <p style='max-width:900px; margin:0 auto' class="text-dbl-line-height text-primary text-normal text-center">
            Thank you for your cooperation and your time! Your Dedicated Account Manager will give you a call in a few hours. For any concern, please contact us at support@leadengine.live
        </p>
        <p class="text-grey text-primary  text-small">
            <b>Reminders:</b> 
        </p>

        <p style='max-width:800px; margin:0 auto' class='text-grey text-dbl-line-height text-primary text-small'>
            <b>1. Your LinkedIn Username & Password</b>
            <br>
            Our automated system runs inside your LinkedIn account. To start the campaign, we must be able to get inside your account.
            Your credentials are secured and will not be shared with anyone. You will receive an email from our support team requesting for your username & password in your account.
        </p>
        <br>
        
        <p  style='max-width:800px; margin:0 auto' class='text-grey text-dbl-line-height text-primary text-small'>
            <b>2. PREMIUM Plan</b>
            <br>
            If you subscribed to the premium plan for email marketing automation, we would need a gmail account from you, existing or new.
        </p>
        </ol>
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