<!-- Testimonials -->
<link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>

<p class="title text-medium text-primary text-center text-primary ">REVIEWS &amp; <span class="">TESTIMONIALS</span>
</p>
<div class="testimonials">

    <div class="container">

        <div class='testimonial'>
            <p class="text-mednorm text-primary"><i class="text-purple fas fa-quote-right"></i></p>

            <p class="text-grey text-primary text-normal text-primary text-center text-primary  text-dbl text-primary-line-height">
                I’m exceedingly pleased with the results so far, it looks like I should get 4 clients from the first month.
            </p>
            <p style='margin-bottom: 5px' class="mt-auto  text-bold text-primary text-normal text-primary">John Weaver,<span class='text-purple'> CEO</span></p>
        </div>
        
        <div class='testimonial'>
            <p class="text-mednorm text-primary"><i class="text-purple fas fa-quote-right"></i></p>

            <p class="text-grey text-primary text-normal text-primary text-center text-primary  text-dbl text-primary-line-height">
                    In the first week, I have had 9 folks I'd call as "leads" and 5 other them engaged enough to have my place them in my CRM as a deal. I am pretty jazzed.            </p>
            <p style='margin-bottom: 5px' class="mt-auto  text-bold text-primary text-normal text-primary"> Alex Belding,<span class='text-purple'> Co-Founder</span></p>
        </div>

        <div class='testimonial'>
            <p class="text-mednorm text-primary"><i class="text-purple fas fa-quote-right"></i></p>

            <p class="text-grey text-primary text-normal text-primary text-center text-primary  text-dbl text-primary-line-height">
                    I wanted to check in regarding the outreach for Richmond, VA, and Stamford, CT areas. I think it's been overwhelmingly successful. I cannot keep up with the messages.            </p>
            <p style='margin-bottom: 5px' class="mt-auto  text-bold text-primary text-normal text-primary">Rob Rauschenberg,<span class='text-purple'> CFO</span></p>
        </div>

        <div class='testimonial'>
            <p class="text-mednorm text-primary"><i class="text-purple fas fa-quote-right"></i></p>

            <p class="text-grey text-primary text-normal text-primary text-center text-primary  text-dbl text-primary-line-height">
                    I've recommended your service to an entrepreneur organization with chapters all over the world. I made the announcement at a global event in China last week.            </p>
            <p style='margin-bottom: 5px' class="mt-auto  text-bold text-primary text-normal text-primary">Rhiannon Anderson,<span class='text-purple'> CMO</span></p>
        </div>

        <div class='testimonial'>
            <p class="text-mednorm text-primary"><i class="text-purple fas fa-quote-right"></i></p>

            <p class="text-grey text-primary text-normal text-primary text-center text-primary  text-dbl text-primary-line-height">
                    Since the launch, we average a few leads a week that has directly asked for information or referred me to someone else. Yes, the program appears to work.            </p>
            <p style='margin-bottom: 5px' class="mt-auto  text-bold text-primary text-normal text-primary">Michael Antonelli,<span class='text-purple'> President</span></p>
        </div>
        <div class='testimonial'>
                <p class="text-mednorm text-primary"><i class="text-purple fas fa-quote-right"></i></p>
    
                <p class="text-grey text-primary text-normal text-primary text-center text-primary  text-dbl text-primary-line-height">
                        I am starting to get a ton of responses, this is pretty slick!  Do you have a reporting dashboard or something I can use to make sure nothing slips through the cracks?            </p>
                <p style='margin-bottom: 5px' class="mt-auto  text-bold text-primary text-normal text-primary">Ryan Reisert,<span class='text-purple'> CEO & Founder</span></p>
            </div>


    </div>

</div>

<script>
$(document).ready(function(){
    $('.testimonials .container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 840,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
</script>