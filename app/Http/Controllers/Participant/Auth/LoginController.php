<?php

namespace App\Http\Controllers\Participant\Auth;

use App\Http\Controllers\Controller;
use App\Participant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    protected $loginPage = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application's login form.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm(Request $request)
    {
        $uniqueLogin = ($request->has('unique_login')) ? $request->get('unique_login') : null;
        return view('participant.auth.login', compact('uniqueLogin'));
    }

    public function login(Request $request)
    {
        $uniqueLogin = ($request->has('unique_login')) ? $request->get('unique_login') : '';

        return Socialite::driver('google')
            ->with(['state' => $uniqueLogin])
            ->scopes(['profile','email'])
            ->redirect();
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->session()->flush();

        $request->session()->regenerate();
        if($request->has('redirect_url') && !empty($request->get('redirect_url'))) {
            return redirect($request->get('redirect_url'));
        }
        return redirect($this->redirectTo);
    }

    public function handleProviderCallback($provider)
    {
        if(empty($provider)) {
            abort(404, "Provider not known");
        }

        $user = Socialite::driver($provider)->stateless()->user();

        $participant = null;
        try {
            $participant = Participant::byEmail($user->email);
        } catch (ModelNotFoundException $notFoundException) {
            // User not known to the system, make account
            $participant = Participant::create(['email' => $user->email]);
        }


        Auth::guard('participant')->loginUsingId($participant->id);
        return redirect($this->redirectTo);
    }
}
