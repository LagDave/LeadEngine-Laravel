
<p style='margin:0 auto; max-width:500px'>
    <img style='width:100%;' src="http://web.leadengine.live/images/wide_logo.png" alt="">
</p>
<div style='clear:both; padding-top:50px;' class="container">
    <div class="form-container">
        <form onsubmit="showLoader()"  method='POST' action="{{route('signup.validateForm')}}" class="form">
            @csrf
            {{--  --}}
            <div class="field">
                <label class='label'>Full Name</label>
                <input value="{{request()->session()->get('full_name') ?? old('name')}}" id='first_name' name='name' type="text" class="input" required>
            </div>
            <div class="field">
                <label class='label'>Email Address</label>
                <input value="{{request()->session()->get('email') ?? old('email')}}" id='email' name='email' type="email" class="input" required>
            </div>
            <div class="field">
                <label class='label'>Auto messaging template for new connections (OPTIONAL):</label>
                <p class='text-small text-grey text-primary'>
                        (We can personalize your message by addressing the receiver by their first name, and the name of their company)<br><br>
                        Ex.<br>
                        
                        Hi {Receiver}<br>
                        
                        I hope everything is doing well with {name of their company}. I am in the business of (your message content…)<br><br>
                            
                </p>
                <label style='color:red' class="label">Compose your message</label>
                <textarea name="messaging_template" id="" rows="10" class='textarea'>
{Message Here}

---------------

*You can include your website link (OPTIONAL)
-
                
*You can include your calendar link (OPTIONAL)
-
                </textarea>
            </div>
            <div class="field">
                <label class='label'>Auto messaging template for new connections (OPTIONAL):</label>
                <p class='text-small text-grey text-primary'>
                        (We can personalize your email by addressing the receiver by their first name, and the name of their company)<br><br>
                        Ex.<br>
                        
                        Hi {Name}<br>
                        
                        I hope everything is doing well with {name of their company}. I am in the business of (your message content…)<br><br>
                            
                </p>
                <label style='color:red' class="label">Compose your message</label>
                <textarea name="email_template" id="" rows="10" class='textarea'>
{Message Here}

---------------

*You can include your website link (OPTIONAL)
-
                                        
*You can include your calendar link (OPTIONAL)
-
                </textarea>
            </div>
            <div class="field">
                <label class="label">Identify your target audience</label>
                <textarea placeholder='Ex. Realtors, Business owners of ______, Loan officers, Doctors, Software agency owners, Attorneys, Insurance agents, etc' name="target_audience" rows='5' class="textarea"></textarea>
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
                <label class='label'>Rank the top 3 Locations you're targeting</label>
                <textarea placeholder='Example: 1. Utah, 2. Florida, 3. Houston' name="top_3_locations" rows="5" class="textarea">{{old('top_3_locations')}}</textarea>
            </div>

            <p class="text-mednorm text-primary">Login Details for <ins class='text-bold'>LinkedIn</ins></p>
            <br>

            <div class="field">
                <label for="" class="label">Username</label>
                <input required type="text" name='linkedin_username' class="input">
            </div>
            <div class="field">
                <label for="" class="label">Password</label>
                <input required type="text" name='linkedin_password' class="input">
            </div>
            <div class="field">
                <label for="" class="label">How old is your LinkedIn Account?</label>
                <div class="select">
                    <select required name="linkedin_account_age" class="select">
                        <option value="less_than_one_year">Less than 1 year</option>
                        <option value="one_to_three_years">1 to 3 years</option>
                        <option value="above_three_years">Above 3 years</option>
                    </select>
                </div>
            </div>


            <p class="text-mednorm text-primary">Gmail <ins class='text-bold'>for PREMIUM users</ins></p>
            <br>

            <div class="field">
                <label for="" class="label">Username</label>
                <input type="text" name='gmail_username' class="input">
            </div>
            <div class="field">
                <label for="" class="label">Password</label>
                <input type="text" name='gmail_password' class="input">
            </div>

            <br>
            <button class="btn btn-blue btn-wide">SUBMIT</button>
        </form>
    </div>
    <br><br>
    <p style='max-width:700px;margin:0 auto' class="text-small text-primary text-center">

            <span style='color:red; font-weight:bold'>Note: Servers or computers don’t run 24/7 straight.</span> We may need to reach out to you from time to time to ask for the verification code to access your LinkedIn account. We might have to log out of your account on our end for a 10 min. MAINTENANCE. When we re-login, LinkedIn will probably ask for a verification code because your account is being accessed in a different location aside from your computer or mobile. A verification code will be sent on your email address from LinkedIn.
    
    
            Feel free to reach us at support@leadengine.live for any concerns.
            
    </p>
</div>

