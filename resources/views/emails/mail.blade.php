<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Client Mail</title>
</head>
<body>

    <h3>A new client has signed up: {{request()->session()->get('email')}}</h3>
    <hr>
    <i>All information below have to have a value otherwise, email developer at rdavephp@gmail.com</i>
    <br><br>
    <p>Name: <b>{{request()->session()->get('first_name')}} {{request()->session()->get('last_name')}}</b></p>
    <p>Email: <b>{{request()->session()->get('email')}}</b></p>
    <p>Phone Number: <b>{{request()->session()->get('number')}}</b></p>
    <p>Company Name: <b>{{request()->session()->get('company_name')}}</b></p>
    <p>Billing Address: <b>{{request()->session()->get('billing_address')}}</b></p>
    <p>City: <b>{{request()->session()->get('city')}}</b></p>
    <p>State: <b>{{request()->session()->get('state')}}</b></p>
    <p>Zipcode: <b>{{request()->session()->get('zipcode')}}</b></p>
    <hr>
    <i>Onboarding Survey Answers ( If there is no corresponding value, please contact the registered client)</i>
    <br><br>
    <p>Top 3 Target Locations: <b>{{request()->session()->get('top_3_locations')}}</b></p>
    <p>Target Industries: <b>{{request()->session()->get('industries')}}</b></p>
    <p>Target Titles: <b>{{request()->session()->get('target_titles')}}</b></p>
    <p>Company Summary: <b>{{request()->session()->get('summary')}}</b></p>
    <p>Industry Facts: <b>{{request()->session()->get('industry_facts')}}</b></p>


</body>
</html>