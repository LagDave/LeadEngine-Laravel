<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WhiteLabelController extends Controller
{
    public function index(){
        return view('pages.white_label.index');
    }
    public function signup(Request $request){
        $data = $request->validate([
            'full_name'=>'required',
            'email'=>'required',
            'company'=>'required',
            'mobile_number'=>'required',
            'client_name'=>'required',
        ]);

        session([
            'data'=>$data
        ]);
        return redirect(route('whiteLabel.payment'));
    }
    public function payment(){
        return view('pages.white_label.payment');
    }
    public function survey(){
        return view('pages.white_label.survey');
    }
    public function sendMail(Request $request){
        $session_data = $request->session()->get('data');

        unset($session_data['_token']);
        $to_name = 'Daniel Bautista';
        $to_email = 'LE.kevin.sutton@gmail.com'; // LE.kevin.sutton@gmail.com
        $data = [
            'data'=>$session_data,
        ];

        Mail::send('emails.white_label_mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('New Successful White Label Signup!');
            $message->from('laggy80@gmail.com','Laggy80');
        });
        $request->session()->flush();

        return redirect(route('whiteLabel.success'));
    }
    public function success(){
        return view('pages.white_label.success');
    }
}
