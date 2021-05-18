<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PasswordResetToken;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Hash;
class PasswordResetController extends Controller
{
    //
    public function index(Request $request){
        $email = $request->email;
        $token = $request->token;
        if( !$email || !$token ){
            return redirect('/register');
        }
        if( PasswordResetToken::where([['email' ,'=', $email],['token','=',$token]])->count() == 0 )
        {
            return redirect('/register');
        }
        return view('auth.passwords.reset', [
            'email' => $email,
            'token' => $token
        ]);
    }

    public function passwordReset(Request $request){
        $email = $request->email;
        $token = $request->token;
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:4', 'confirmed']
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        User::where([['email','=',$email]])->update([
            'password' => Hash::make($request->password)
        ]);
        PasswordResetToken::where([['email' ,'=', $email],['token','=',$token]])->delete();
        return redirect('/login')->with(['message' => 'Successfuly changed password']);

    }
}
