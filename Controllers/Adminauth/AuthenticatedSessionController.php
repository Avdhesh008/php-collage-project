<?php

namespace App\Http\Controllers\Adminauth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Adminauth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
          $userid=Auth::guard('admin')->id();
          $userData=Admin::where('id',$userid)->first();
          if($userData->role==0)
          {           
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);

          }elseif($userData->role==1)
          {
            return redirect('/hr/dashboard');
          }
          elseif($userData->role==2)
          {
            return redirect('/tlsales/dashboard');            
          }
          elseif($userData->role==3)
          {
            return redirect('/tlresearch/dashboard');            
          }
          elseif($userData->role==4)
          {
            return redirect('/sales/dashboard');            
          }         
          elseif($userData->role==5)
          {
            return redirect('/research/dashboard');            
          }
          elseif($userData->role==6)
          {
            return redirect('/email/dashboard');            
          }  
          
        
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
       
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login');
    }

    public function changePassword(Request $request)
    {
        $validator=\Validator::make($request->all(),[
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:new_password',
        ]);
        if($validator->fails())
        {
            // return response()->json(['validation_errors'=>$validator->messages()],);
            return back()->withErrors($validator->messages()->first());
        }
        else
        {
            
            $input=$request->all();
             $user= Admin::all();
            $userid=Auth::guard('admin')->id();
            $userData=$user->where('id',$userid)->first();
         
           
            if ((Hash::check(request('old_password'), $userData->password)) == false) {
                return back()->withError("Check your old password.");
              
            } else if ((Hash::check(request('new_password'), $userData->password)) == true) {
                
                return back()->withError("Please enter a password which is not similar then current password.");
            } else {
                Admin::where('id', $userid)->update(['password' => Hash::make($input['new_password'])]);
                return redirect('admin/login')->withSuccess("Password updated successfully.");

            }
           
        }

    }
}
