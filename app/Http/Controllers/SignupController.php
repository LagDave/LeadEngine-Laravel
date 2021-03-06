<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{

    public function index(){
        return view('pages/signup/signup_first_step');
    }
    public function personalInformation(Request $request){
        session([
            'full_name'=>$request->all()['full_name'],
            'email'=>$request->all()['email']
        ]);

        return redirect(route('signup.plans'));
    }

    public function plans(){
        return view('pages.plans_page');
    }

    public function surveyPage(){
        return view('pages.signup.signup_form_page');
    }

    public function validateForm(Request $request){
        session([
            'data'=>$request->all()
        ]);
        
        return redirect(route('signup.sendMail'));
    }
    

    public function sendMail(Request $request){

        $session_data = $request->session()->get('data');
        $to_name = 'Daniel Bautista';
        $to_email = 'LE.kevin.sutton@gmail.com'; //LE.kevin.sutton@gmail.com
        $data = [
            'data'=>$session_data
        ];

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Data from Onboarding Survey Received!');
            $message->from('laggy80@gmail.com','Laggy80');
        });

        return redirect(route('onboarding_survey.success'));
    }


    
    public function success(Request $request){
        $request->session()->flush();
        return view('pages/success');
        
    }
    public function cancel(){
        return view('pages/cancel');
        $request->session()->flush();
    }
    public function onboardingSurveySuccess(Request $request){
        $request->session()->flush();
        return view('pages/onboarding_survey_success');
    }

}
