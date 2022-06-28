<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use ErrorException;
use Exception;
use App\Models\Regcode;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'regcode' => 'required|string|max:255|exists:regcodes,code',
            'email' => 'required|string|email|max:255|unique:users|exists:regcodes,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // $regcode =Str::random(5);
        // dd($regcode);
        // if(User::where('id','=',1)->first()->regcode == $request->regcode){.
        $validRegistrationbCode = Regcode::where('code', $request->regcode)->first()->is_valid;

if(!boolval($validRegistrationbCode)){
    return redirect()->back()->withErrors('This code has already been used by another user');
      
}


        Regcode::where('code', $request->regcode)->update([
            'is_valid' => false,
        ]);
        Auth::login($user = User::create([
            'name' => $request->name,
            'regcode' => $request->regcode,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));



        return redirect(RouteServiceProvider::HOME);
    }
}
