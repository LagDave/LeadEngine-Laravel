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


<div class="modal is-clipped" id='confirmation_modal'>
    
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Do you really need to fill out this form?</p>
            <button onclick="closeConfirmationModal()" class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <p style='color:red' class="text-small text-primary">
                NOTE: If you are just looking to capture lead details and integrate it to your outside campaign, then NO NEED TO FILL UP THIS FORM.
            </p>
            <p style='color:red;margin-top:20px;' class="text-small text-primary">
                This form is just for clients who want to use the auto send messages to new connections.
            </p>
            <p style='color:red;margin-top:20px;' class="text-small text-primary">
                Do you really need to fill out this form?
            </p>
        </section>
            <footer class="modal-card-foot">
            <button onclick='closeConfirmationModal()' class="button is-success">Yes, I need to Fill it out.</button>
            <a onclick='showLoader()' href="{{route('signup.sendMail')}}" class='button is-danger'>Nope, I don't think so.</a>
        </footer>
    </div>
</div>
{{-- Page Specific Scripts --}}
<script src="{{asset('js/static_navbar.js')}}"></script>
<script src="{{asset('js/industries_modal_summoner.js')}}"></script>
<script src="{{asset('js/loader_summoner.js')}}"></script>
<script>
    $('#confirmation_modal').addClass('is-active');
    function closeConfirmationModal(){
        $('#confirmation_modal').removeClass('is-active');
    }
</script>