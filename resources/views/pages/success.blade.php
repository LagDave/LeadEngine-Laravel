@include('partials.top')
{{-- Page specific stylesheets --}}
<link rel="stylesheet" href="{{asset('css/success.css')}}">
<link rel="stylesheet" href="{{asset('css/signup_process.css')}}">


@include('components.scroll_nav')
@include('components.nav_items_mobile')

<br><br><br><br><br><br>
<div class="progress-container">
    <ul class="progressbar">
      <li class="text-primary text-grey active">Sign up</li>
      <li class='text-primary text-grey active'>Payment Process</li>
      <li class='text-primary text-grey active'>Survey</li>
      <li class='text-primary text-grey active'>Success</li>
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

        <p style='max-width:900px; margin:0 auto' class='text-grey text-dbl-line-height text-primary text-small'>
            <b>1. Your LinkedIn Username & Password</b>
            <br>
            Our automated system runs inside your LinkedIn account. To start the campaign, we must be able to get inside your account.
            Your credentials are secured and will not be shared with anyone. You will receive an email from our support team requesting for your username & password in your account.
        </p>
        <br>
        <p  style='max-width:900px; margin:0 auto' class='text-grey text-dbl-line-height text-primary text-small'>
            <b>2. Have your Sales Navigator Premium Service ready</b>
            <br>
            Your account must have this premium service in your LinkedIn account for the campaign to start. You can find that on the upper right part of your profile page in LinkedIn. It’s free for a month then becomes $79/month after. You can <a style='color:dodgerblue' href="https://business.linkedin.com/sales-solutions/compare-plans#1">CLICK HERE</a> to sign up for your Sales Navigator
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