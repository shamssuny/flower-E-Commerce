<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login()
    {
        $this->validate(request(),[
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt(['username'=>request('username'),'password'=>request('password')])){
            return redirect('auth/dashboard');
        }else{
            return redirect()->back()->with('LoginError','Credentials Does Not Match!');
        }
    }


    public function showProfile()
    {
        $admin = Admin::all()->first();
        return view('admin.profile',compact('admin'));
    }

    public function editProfile(Request $request)
    {
        $this->validate($request,[
            'full_name' => 'required',
            'email' => 'email|required',
            'picture' => 'image|mimes:jpg,jpeg,png|max:1024'
        ]);

        if($request->hasFile('picture')){
            $request->picture->move('img/admin/','admin.jpg');
        }

        $admin = Admin::all()->first();


        if($request->prev_password != null){
            $this->validate(request(),[
                'password' => 'min:8|confirmed'
            ]);
            if(Hash::check(request('prev_password'),$admin->password)==false){
                return redirect()->back()->with('updateError','Previous Password Not Matched!');
            }
            $admin->update([
                'full_name' => request('full_name'),
                'email' => request('email'),
                'password' => bcrypt(request('password'))
            ]);

            return redirect()->back()->with('updateSuccess','Update Successfull');
        }else{
            $admin->update([
                'full_name' => request('full_name'),
                'email' => request('email'),
            ]);
            return redirect()->back()->with('updateSuccess','Update Successfull');
        }


    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('auth/login');
    }
}
