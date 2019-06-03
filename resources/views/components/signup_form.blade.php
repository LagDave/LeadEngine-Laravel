

<div class="progress-container">
    <ul class="progressbar">
        <li class="text-primary text-grey active">Personal Information</li>
        <li class='text-primary text-grey active'>Payment Process</li>
        <li class='text-primary text-grey active'>Survey</li>
        <li class='text-primary text-grey '>Success</li>
    </ul>
</div>

<div style='clear:both; padding-top:50px;' class="container">
    <div class="form-container">
        <form onsubmit="showLoader()"  method='POST' action="{{route('signup.validateForm')}}" class="form">
            @csrf
            <p class="text-medium ">SIGN UP NOW</p>
            <br>

            {{--  --}}
            <div class="field">
                <label class='label'>Full Name</label>
                <input value="{{request()->session()->get('full_name') ?? old('name')}}" id='first_name' name='name' type="text" class="input" required>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class='label'>Email Address</label>
                    <input value="{{request()->session()->get('email') ?? old('email')}}" id='email' name='email' type="email" class="input" required>
                </div>
                <div class="field column">
                    <label class='label'>Mobile Number</label>
                    <input value="{{old('number')}}" id='number' name='number' type="number" class="input" required>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class='label'>Company Name</label>
                    <input value="{{old('company_name')}}" id='company_name' name='company_name' type="text" class="input" required>
                </div>

                {{--  --}}
                <div class="field column">
                    <label for="" class="label">Company Website URL</label>
                    <input value="{{old('website_url')}}" type="text" name='website_url' class="input">
                </div>
            </div>

            {{--  --}}
            <div class="field">
                <label for="" class="label">Full name of the LinkedIn account where the system will run</label>
                <input value="{{old('linkedin_account')}}" type="text" name='linkedin_account' class="input">
            </div>

            <!-- Onboarding Survey -->

            <div class="field">
                <label class='label'>Rank the top 3 Locations you're targeting</label>
                <textarea placeholder='Example: 1. Utah, 2. Florida, 3. Houston' name="top_3_locations" rows="5" class="textarea">{{old('top_3_locations')}}</textarea>
            </div>


            <div class="field">
                <label class="label">Target Industries (Choose as many as you like)</label>
                <button type='button' onclick='showIndustriesModal()' class="btn btn-blue">Click Here to Choose</button>
            </div>


            <div class="field">
                <div style='z-index:999999999999999' id='industries_modal' class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Industries List</p>
                            <button type='button' onclick='closeIndustriesModal()' class="delete" aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">

                            <div class="columns">


                                <!-- First part of modal -->
                                <div class="column">
                                    @include('components.first_part_industries')
                                </div>

                                <!-- Second side of modal -->
                                <div class="column">
                                    @include('components.second_part_industries')
                                </div>

                                <!-- Third part of modal -->
                                <div class="column">
                                    @include('components.third_part_industries')
                                </div>
                            </div>


                        </section>
                        <footer class="modal-card-foot">
                            <button type='button' onclick='closeIndustriesModal()' class="btn btn-blue btn-wide">Done</button>
                        </footer>
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="" class="label">Of your chosen industries, Rank the Top 3</label>
                <input type="text" name='top_3_industries' class="input">
            </div>
            
            <div class="field">
                <label for="" class="label">What exactly do you do in one sentence?</label>
                <textarea placeholder="(Ex. Lead Engine sends thousands of personalized LinkedIn messages for only $79 a month.)" name="what_exactly_customers_do" id="" rows="5" class="textarea"></textarea>
            </div>

            <div class="field">
                <label for="" class="label">Describe your ideal prospect</label>
                <input type="text" name='ideal_prospect' class="input">
            </div>

            <div class="field">
                <label for="" class="label">What is the biggest problem/pain point your company is solving for your clients?</label>
                <input type="text" name='biggest_problem' class="input">
            </div>

            <div class="field">
                <label for="" class="label">What are the consequences of potential clients not solving that pain?</label>
                <input type="text" name='consequences' class="input">
            </div>

            <div class="field">
                <label for="" class="label">Are you solving your clients' problem uniquely? If yes, how?</label>
                <input type="text" name='solving_problems' class="input">
            </div>

            <div class="field">
                <label class='label'>What differentiates you from competitors? Why would someone switch or choose you?</label>
                <input type="text" name='differentiates_competitors' class="input">
            </div>

            <div class="field">
                <label for="" class="label">Do you have any relevant links that would provide value to your prospects? If yes, please paste the link here.</label>
                <textarea placeholder='We always try to add as much value as we can to our messaging in order to generate a high response rate. Example: The Essential LinkedIn B2B Marketing Guide for 2019.' name="relevant_links" id="" rows="5" class="textarea"></textarea>
            </div>

            <div class="field">
                <label for="" class="label">Can you provide us with an example of your most successful cold outreach message(s)?</label>
                <textarea placeholder='(Just for reference, we will re-write based off our best practices)' name="successful_message" rows="5" class="textarea"></textarea>
            </div>

            <div class="field">
                <label for="" class="label">Do you have social proof (credibility) for us to incorporate in your outreach message? If yes, please provide it below and include any notable companies you've worked with.</label>
                <input type="text" name='social_proof' class="input">
            </div>

            <div class="field">
                <label for="" class="label">Do you have an irresistible offer you use to attract potential customers? If yes, what is it?</label>
                <textarea name="irresistible_offer"rows="5" class="textarea"></textarea>
            </div>

            <div class="field">
                <label for="" class="label">What is your preferred call to action?</label>
                <div class="select">
                    <select name="call_to_action">
                        <option value="schedule_a_call">Schedule a call</option>
                        <option value="schedule_a_demo">Schedule a demo</option>
                        <option value="direct_to_website">Direct them to your website</option>
                        <option value="request_phone_number">Request phone number</option>
                        <option value="just_building_rapport">Just building rapport</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label for="" class="label">Do you have a calendar link for prospects to book calls directly with you? If yes, please paste the link below before your onboarding call. If no, you don't need one.</label>
                <input type="text"name='calendar_link' placeholder="https://calendly.com/" class="input">
            </div>

            <div class="field">
                <label for="" class="label">How did you hear about us?</label>
                <div class="select">
                    <select name="how_did_client_hear_about_us">
                        <option value="google_ad">Google Ad</option>
                        <option value="referral">Referral</option>
                        <option value="linkedin">LinkedIn Cold Outreach</option>
                        <option value="facebook_ad">Facebook Ad</option>
                        <option value="linkedin_ad">LinkedIn Ad</option>
                    </select>
                </div>
            </div>

            <br>
            <button class="btn btn-blue btn-wide">SIGNUP</button>

            <div class="images-container">

                <img src="https://myprospectengine.com/images/seal.secure.png" alt="">
                <img src="https://myprospectengine.com/images/PayPal_logo.svg_.png" alt="">
                <img src="https://myprospectengine.com/images/credit-cards.png" alt="">

            </div>
        </form>

        <div class='text-container'>

            <img src="{{asset('images/wide_logo.png')}}">
            <br><br>
            <p style='margin:10px 0' class=" text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> No Setup Fees</p>
            <p style='margin:10px 0' class=" text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> No Cancellation Fees</p>
            <p style='margin:10px 0' class=" text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> Cancel Any Time</p>
            <p style='margin:10px 0' class=" text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> Secure Paypal Checkout</p>
            <p style='margin:10px 0' class=" text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> 30-Day Money-Back Guarantee</p>


        </div>
    </div>
</div>