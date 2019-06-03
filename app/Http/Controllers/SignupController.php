<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    // public function __construct(){
    //     $this->middleware('registered')->except(['index', 'validateForm']);
    // }
    public function index(){
        return view('pages/signup/signup_first_step');
    }

    public function sendMail(Request $request){

        $session_data = $request->session()->get('data');
        unset($session_data['_token']);
        $to_name = 'Daniel Bautista';
        $to_email = 'le.kevin.sutton@gmail.com'; // LE.kevin.sutton@gmail.com
        $data = [
            'data'=>$session_data
        ];

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('A new client has Signed Up!');
            $message->from('laggy80@gmail.com','Laggy80');
        });

        return redirect(route('signup.success'));
    }

    public function success(Request $request){
        return view('pages/success');
        $request->session()->flush();
    }





    
    public function personalInformation(Request $request){
        session([
            'full_name'=>$request->all()['full_name'],
            'email'=>$request->all()['email']
        ]);

        return redirect(route('signup.plans'));
    }
    public function surveyPage(){
        return view('pages.signup.signup_form_page');
    }

    public function validateForm(Request $request){
    session([
        'data'=>$request->all()
    ]);
    return redirect(route('signup.sendMail'));

    // //        Validate form data
    //         $data = $request->validate([
    //             'full_name' => 'required',
    //             'email'=>'required',
    //             'number'=>'required'
    //         ]);
    
    //         $industries = '';
    // //        Convert Industries to string
    //         if(isset($request->all()['industries_list'])){
    //             if(sizeof($request->all()['industries_list']) > 0){
    //                 foreach($request->all()['industries_list'] as $industry){
    //                     $industry = ucwords(str_replace('_', ' ', $industry));
    //                     $industries .= $industry.', ';
    //                 }
    //             }
    //         }
            
    
    //        Save to session
            // session([
            //     'is_registered'=> '',
            //     'first_name' => $request->all()['first_name'],
            //     'last_name'=>$request->all()['last_name'],
            //     'email'=>$request->all()['email'],
            //     'number'=>$request->all()['number'],
            //     'company_name'=>$request->all()['company_name'],
    
            //     'top_3_locations'=>$request->all()['top_3_locations'],
            //     'industries'=>$industries,
            //     'target_titles'=>$request->all()['target_titles'],
            //     'summary'=>$request->all()['summary'],
            //     'industry_facts'=>$request->all()['industry_facts']
            // ]);
    
    //        redirect to pricing page
            
        }
        

}
