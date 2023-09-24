<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Apps;
use App\Models\UserModel;
use App\Helpers\AppHelpers;
use App\Models\User;
  
class AuthController extends Controller
{
    public function __construct()
    {
        $this->user     = new UserModel();
    }
    
    public function indexRender()
    {
        return view('auth/login');
    }

    public function loginHandle(Request $request)
    {
        $input = $request->all();
        
        $request->validate([
            'username'  => 'required',
            'password'  => 'required',
        ]);
        $data = [
            'username'  => $input['username'],
            'password'  => $input['password'],
        ];
      
        if (Auth::attempt($data)) 
        {
            $user = $this->user->getByUsername($input['username']);
            
            // Session::put('school_token', $user->school_token);
            Session::put('user_id', $user->id);
            Session::put('role_id', $user->role_id);
            Session::put('name', $user->name);
            Session::put('username', $user->username);
            Session::put('email', $user->email);
            // Session::put('apps_id', $id);
          
            return redirect('/portal/dashboard');
        }
        else 
        {
            return redirect()->route('login')->with('failed', 'Incorrect Email or Password');
        }
    }
    // public function appsHandler($id)
    // {
    //     $id = base64_decode($id);
    //     $apps = Apps::find($id);
    //     if (!empty($apps)) {
    //         Session::put('apps_id', $id);
    //         Session::put('hcode', $apps->hcode);
    //         return Redirect::to($apps->hcode);
    //     }
    //     return Redirect()->back();//->with('success', 'your message,here');
    // }
    public function logoutRender()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');

    }
}