<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;



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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){

        $title = 'Connexion';
        return view('auth.login', compact('title'));
    }

    public function authenticate(Request $request){
        // dd('ff');
        $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);

        $compte = User::where('email','=', $request->email)->first();

        if($compte){

            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){

                return redirect(route('dashboard'))->with('logined', 'Vous êtes connecté en tant que '. Auth::user()->name);

            }

            else{

                return back()->with('error', 'Mot de passe est incorrecte');
            }
        }
        else{

            // flashy()->warning('Pas de compte pour cette adresse E-mail');
            return back()->with('error', 'Nous n\'avons pas pu trouver un compte pour votre adresse E-mail');
        }
    }
}
