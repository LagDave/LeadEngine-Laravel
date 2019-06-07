@include('partials.top')
@include('components.scroll_nav')
@include('components.nav_items_mobile')

{{-- Page specific stylesheets --}}
<link rel="stylesheet" href="{{asset('css/signup_process.css')}}">
<link rel="stylesheet" href="{{asset('css/form.css')}}">

<br><br><br><br><br>
<p class="text-center text-mednorm text-primary">Steps on white labeling LeadEngine</p>
<br>
<div class="progress-container">
    <ul class="progressbar">
      <li class="text-primary text-grey active">Sign up</li>
      <li class='text-primary text-grey '>Payment Process</li>
      <li class='text-primary text-grey '>Onboarding Survey</li>
      <li class='text-primary text-grey '>Success</li>
    </ul>
  </div>
</div>

<div class="container">
    <div class="card">

        <p class="text-bold text-center text-primary">Sign up</p>
        <hr>

        
        <form onsubmit='showLoader()' method="POST" action="{{route('whiteLabel.signup')}}">
            @csrf
            <p class="text-primary text-nano text-grey">Your Full Name:</p>
            <input required placeholder="Not your client's name" required name='full_name' class='text-primary' type="text">
            <p class="text-primary text-nano text-grey">Your Email Address:</p>
            <input required placeholder="Not your client's email" name='email' required name='full_name' class='text-primary' type="email">
            <p class="text-primary text-nano text-grey">Name of your company:</p>
            <input required placeholder="What name will we represent you for your client" name='company' required name='full_name' class='text-primary' type="text">
            <p class="text-primary text-nano text-grey">Mobile Number:</p>
            <input required placeholder="Required" name='mobile_number' required class='text-primary' type="text">
            <p class="text-primary text-nano text-grey">Client's Name:</p>
            <input required placeholder="Required" name='client_name' required class='text-primary' type="text">

            <br><br>
            <button  class="btn btn-blue btn-sm btn-wide">PROCEED TO STEP 2</button>
        </form>

    </div>
</div>
<br><br>
    


@include('components.pricing_component')
@include('components.case_study_component')

@include('components.footer')

@include('partials.bottom')
<script src="{{asset('js/static_navbar.js')}}"></script>