<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => !empty($data['name']) ? $data['name'] : '',
            'email' => !empty($data['email']) ? $data['email'] : '',
            'userFirst' => !empty( $data['userFirst'] ) ? $data['userFirst'] : '',
            'userLast' => !empty( $data['userLast'] ) ? $data['userLast'] : '',
            'userPhone' => !empty( $data['userPhone'] ) ? $data['userPhone'] : '',
            'userPosition' => !empty( $data['userPosition'] ) ? $data['userPosition'] : '',
            'userAddress1' => !empty( $data['userAddress1'] ) ? $data['userAddress1'] : '',
            'userAddress2' => !empty( $data['userAddress2'] ) ? $data['userAddress2'] : '',
            'userCity' => !empty( $data['userCity'] ) ? $data['userCity'] : '',
            'userState'  => !empty( $data['userState'] ) ? $data['userState'] : '',
            'userPostal' => !empty( $data['userPostal'] ) ? $data['userPostal'] : '',
            'userCountry'  => !empty( $data['userCountry'] ) ? $data['userCountry'] : '',
            'registerDate' => date('Y-m-d H:i:s'),
            'approvalDate' => '',
            'userStatus'   => 0,
            'notes' => !empty( $data['notes'] ) ? $data['notes'] : '',
            'password' => Hash::make($data['password']),
        ]);
    }
}
