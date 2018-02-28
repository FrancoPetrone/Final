<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request){
        $datos = $request->all();

        if(Auth::attempt(["nick" => $datos["nick"], "password" => $datos["password"]])){
            session(['User' => Auth::user()->nick]);
            session(['Error' => null]);
            session(['Level' => Auth::user()->nivel_id]);
            return redirect()->route('home');
        }else{
            return redirect()->to('/login')->withErrors(['error'=>'Revise el formulario'])->withInput();
        }
    }

    public function logout(Request $request){

        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->to('/login');
    }
}
