<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
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
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://jeeninv.com/website/userdata",
            CURLOPT_RETURNTRANSFER => true,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode([
                'name' => $request->name ? $request->name : '',
                'email' => $request->email ? $request->email : '',
                'userFirst' => $request->userFirst ? $request->userFirst : '',
                'userLast' => $request->userLast ? $request->userLast : '',
                'userPhone' => $request->userPhone ? $request->userPhone : '',
                'userPosition' => $request->userPosition ? $request->userPosition : '',
                'userAddress1' => $request->userAddress1 ? $request->userAddress1 : '',
                'userAddress2' => $request->userAddress2 ? $request->userAddress2 : '',
                'userCity' => $request->userCity ? $request->userCity : '',
                'userState' => $request->userState ? $request->userState : '',
                'userPostal' => $request->userPostal ? $request->userPostal : '',
                'userCountry' => $request->userCountry ? $request->userCountry : '',
                'userCountry' => $request->userCountry ? $request->userCountry : ''
            ]),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $rr = json_decode($response, true);
        event(new Registered($user = $this->create($request->all())));
        return redirect('/login');
    }
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
