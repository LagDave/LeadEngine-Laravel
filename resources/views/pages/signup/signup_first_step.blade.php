@include('partials.top')
{{-- Page Specific Stylesheets --}}
<link rel="stylesheet" href="{{asset('css/signup_process.css')}}">
<link rel="stylesheet" href="{{asset('css/form.css')}}">
<link rel="stylesheet" href="{{asset('css/loader.css')}}">

{{-- Navigation Bar --}}
@include('components.scroll_nav')
{{-- Mobile Navigation Items --}}
@include('components.nav_items_mobile')

<br><br><br><br><br>
<div class="progress-container">
    <ul class="progressbar">
      <li class="text-primary text-grey active">Sign up</li>
      <li class='text-primary text-grey '>Payment Process</li>
      <li class='text-primary text-grey '>Survey</li>
      <li class='text-primary text-grey '>Success</li>
    </ul>
  </div>
</div>

<div class="container">
    <div class="card">
        <p class="text-bold text-center text-primary">Personal Information</p>
        <hr>
        <p class="text-primary text-nano text-grey">Full Name:</p>
        
        <form onsubmit='showLoader()' method="POST" action="{{route('signup.personalInformation')}}">
            @csrf
            <input required name='full_name' class='text-primary' type="text">
            <p class="text-primary text-nano text-grey">Email Address:</p>
            <input name='email' required name='full_name' class='text-primary' type="email">
            <br><br>
            <button  class="btn btn-blue btn-sm btn-wide">PROCEED TO STEP 2</button>
        </form>

    </div>
</div>
<br><br>

@include('components.footer')

{{-- Components --}}
@include('components.pricing_component')
@include('components.case_study_component')


@include('components.loader')
@include('partials.bottom')
{{-- Page Specific Scripts --}}
<script src="{{asset('js/static_navbar.js')}}"></script>
<script src="{{asset('js/loader_summoner.js')}}"></script>
<script>
</script>