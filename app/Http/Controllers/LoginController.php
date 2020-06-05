<?php

namespace App\Http\Controllers;
use Session;
use App\Admin;
use App\Restpassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //show login page
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $this->validate(request(),[
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['username'=>request('username'),'password'=>request('password')])){
            if(Session::get('cartList')!=null){
                return redirect('/cart/checkout');
            }
            return redirect('/');
        }else{
            return redirect()->back()->with('LoginError','Credentials Does Not Match!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showReset()
    {
        return view('resetPassword');
    }

    public function sendReset()
    {
        $this->validate(request(),[
            'email' => 'required'
        ]);

        $getHost = request()->getHttpHost();

        if(Restpassword::where('email',request('email'))->count() > 0){
            Restpassword::where('email',request('email'))->delete();
        }

        if(User::where('email',request('email'))->count() == 1){
            $token = sha1(rand());
            $reset = new Restpassword();
            $reset->email = request('email');
            $reset->token = $token;
            $reset->save();

            $generateResetLink = $getHost.'/changePassword?email='.request('email').'&token='.$token;
            //mail function
            mail(request('email'),'Reset Password','Your Password Reset link:\n'.$generateResetLink);
//            dd($generateResetLink);
            return redirect()->back()->with('resetSuccess','An Reset Link has sent to mail!');
        }elseif(Admin::where('email',request('email'))->count() == 1){
            $token = sha1(rand());
            $reset = new Restpassword();
            $reset->email = request('email');
            $reset->token = $token;
            $reset->save();

            $generateResetLink = $getHost.'/changePassword?email='.request('email').'&token='.$token;
            //mail function
            mail(request('email'),'Reset Password','Your Password Reset link:\n'.$generateResetLink);
            dd($generateResetLink);
        }else{
            return redirect()->back()->with('resetError','Email Not Found!');
        }
    }


    public function showResetField()
    {
        if(!empty($_GET['email']) || !empty($_GET['token'])){

            $email = $_GET['email'];
            $token = $_GET['token'];
            if(Restpassword::where('email',$email)->where('token',$token)->count() == 1){

                return view('confirmReset');

            }else{
                return redirect('/resetPassword')->with('resetError','Invalid Request');
            }

        }else{
            return redirect('/resetPassword')->with('resetError','Invalid Request');
        }
    }


    public function changePass()
    {
        $this->validate(request(),[
            'password' => 'required|min:8|confirmed'
        ]);
        $email = $_GET['email'];
        $token = $_GET['token'];

        if(User::where('email',$email)->count() == 1){
            $getUser = User::where('email',$email)->first();
            $getUser->password = bcrypt(request('password'));
            $getUser->save();

            Restpassword::where('email',$email)->where('token',$token)->delete();
            return redirect('/login')->with('LoginSuccess','Reset Success Login to continue');
        }elseif(Admin::where('email',$email)->count() ==1){
            $getUser = Admin::where('email',$email)->first();
            $getUser->password = bcrypt(request('password'));
            $getUser->save();

            Restpassword::where('email',$email)->where('token',$token)->delete();
            return redirect('/auth/login')->with('LoginSuccess','Reset Success Login to continue');
        }else{
            return redirect('/resetPassword')->with('resetError','User Not Found!');
        }
    }
}
