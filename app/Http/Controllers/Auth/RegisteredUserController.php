<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegCode as MailRegCode;
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
use Illuminate\Support\Facades\Mail;

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

        if (!boolval($validRegistrationbCode)) {
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

    public function generateRegCode()
    {

        return view('Auth.generatecode');
    }

    public function getRegCode(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email:rfc,dns|max:255|unique:users',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        // checfk if the email already exist in the regCode table  
        $emailExist = Regcode::where('email', $request->input('email'))->exists();

        if ($emailExist) {
            return redirect()->back()->withErrors('You have already generated code with this email');
        }
        // Generate random string of eight(8) characters
        $regcode = Str::random(8);

        //    Make the input email and generated registration code to array
        $data = [
            'title' => 'Registration code',
            "regCode" => $regcode,
            "email" => $request->input('email')
        ];
        // send registration code to the users email.
        Mail::to($request->input('email'))->send(new MailRegCode($data));
        // Create a new registration code in the data in the regcode table
        $regCode = new Regcode();
        $regCode->code = $regcode;
        $regCode->email = $request->input('email');
        $regCode->save();

        return redirect()->back()->withStatus('Hello!, Kindly check your email for the generated code thanks.');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
