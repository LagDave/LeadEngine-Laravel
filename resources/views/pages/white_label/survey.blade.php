@include('partials.top')
@include('components.scroll_nav')
@include('components.nav_items_mobile')

<br><br><br><br><br>
<div class="container">
    <p class="text-bold text-primary text-medium text-center">On-Boarding Survey</p>
    <p class="text-grey text-primary text-mednorm text-center text-dbl-line-height">This will help us identify your client’s ideal prospects and craft<br>the best messaging to increase their response rate.</p>
        
    <div style="max-width:700px;margin:0 auto; background:white; box-shadow: 0px 10px 15px rgba(0,0,0,.2); padding:20px; border-radius:10px;">
        <p class='text-primary text-dbl-line-height'>
            1. Please DOWNLOAD the word document below which contains the survey form for your client. 
        </p>
        <p class='text-primary text-dbl-line-height'>
            2. Have them fill up the survey and have them send it back to you. 
        </p>
        <p class='text-primary text-dbl-line-height'>
            3. Once you have the survey that your client answered, then email it to support@leadengine.live 
        </p>
        <p class="text-primary text-dbl-line-height">
            4. Once our support team receives the survey, we will contact your client within 24 hours and we are masked under your name/company
        </p>
        <br>
        <p class="text-center text-mednorm text-primary"><b>ON-BOARDING SURVEY</b></p>
        <p style='margin-top:40px;' class="text-center">
            <a onclick='redirectToSuccess()' target="_blank"  href="{{asset('downloads/onboarding_survey.docx')}}" class="btn btn-blue">DOWNLOAD</a>
        </p>
    </div>
</div>
<br><br>

@include('components.footer')
@include('partials.bottom')
<script src="{{asset('js/static_navbar.js')}}"></script>
<script>
    function redirectToSuccess(){
        window.location.href = "http://localhost:8000/white_label/sendMail";
    }
</script>