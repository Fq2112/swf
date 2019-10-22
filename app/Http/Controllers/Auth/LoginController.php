<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Support\Facades\GlobalAuth;

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
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/scott.royce/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('pages.admins.auth');
    }

    /**
     * Perform login process for users & admins
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $user = User::where('username', $request->useremail)->orwhere('email', $request->useremail)->first();
        if(!is_null($user)){
            if (GlobalAuth::login(['email' => $user->email, 'password' => $request->password])) {
                if (session()->has('intended')) {
                    session()->forget('intended');
//                $this->redirectTo = session('intended');
                }

                return redirect()->route('admin.dashboard')->with('signed', 'You`re now signed in.');
            }
        }

        return back()->withInput($request->all())->with([
            'error' => 'Your email or password is incorrect.'
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        GlobalAuth::logout();
        return redirect()->route('show.login.form')->with('logout', 'You`re now signed out.');
    }
}
