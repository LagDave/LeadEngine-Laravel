<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    public function index(){
        return view('pages/signup_form_page');
    }

    public function validateForm(Request $request){

//        Validate form data
        $data = $request->validate([
            'first_name' => 'required',
            'last_name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'company_name'=>'required',
            'billing_address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zipcode'=>'required'
        ]);

//        Convert Industries to string
        $industries = '';
        if(sizeof($request->all()['industries_list']) > 0){
            foreach($request->all()['industries_list'] as $industry){
                $industry = ucwords(str_replace('_', ' ', $industry));
                $industries .= $industry.', ';
            }
        }
//        Save to session
        session([
            'first_name' => $request->all()['first_name'],
            'last_name'=>$request->all()['last_name'],
            'email'=>$request->all()['email'],
            'number'=>$request->all()['number'],
            'company_name'=>$request->all()['company_name'],
            'billing_address'=>$request->all()['billing_address'],
            'city'=>$request->all()['city'],
            'state'=>$request->all()['state'],
            'zipcode'=>$request->all()['zipcode'],

            'top_3_locations'=>$request->all()['top_3_locations'],
            'industries'=>$industries,
            'target_titles'=>$request->all()['target_titles'],
            'summary'=>$request->all()['summary'],
            'industry_facts'=>$request->all()['industry_facts']
        ]);

//        redirect to pricing page
        return redirect(route('signup.plans'));
    }

    public function plans(){
        return view('pages/plans_page');
    }

    public function sendMail(){
        $to_name = 'rdavephp';
        $to_email = 'rdavephp@gmail.com';
        $data = array();

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

}
