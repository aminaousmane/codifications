<?php

namespace App\Http\Controllers\AuthAgent;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\ListePositionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:agent')->except('logout');
    }
    public function showLoginForm()
    {
        return view('authAgent.login');
    }
    public function login(Request $request)
    {
        $credentiel =[ 
            'email'=> $request->email,
            'password'=> $request->password
        ];
        if(Auth::guard('agent')->attempt($credentiel,$request->member))
            {
                 $admin =DB::table('agents')->selectRaw('agents.admin,agents.email')->where('email',$request->email)->where('admin',1)->first();
                if($admin)
                    return redirect()->intended(route('Agentindex'));
                else
                    return redirect()->intended(route('agent.home'));

            }
            return redirect()->back()->withInput($request->only('email','remember'));
    }
}
