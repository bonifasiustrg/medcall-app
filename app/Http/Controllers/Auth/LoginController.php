<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return '/admin/home'; // Change this to the admin route
        } elseif ($user->role == 'pasien') {
            return '/home'; // Change this to the pasien route
        }

        return $this->redirectTo;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            'roles' => 'required|string|in:pasien,admin', // Adjust as needed
        ]);
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password') + ['role' => $request->input('roles')];
    }

    protected function attemptLogin(Request $request)
    {
        return Auth::attempt($this->credentials($request));
    }
}
