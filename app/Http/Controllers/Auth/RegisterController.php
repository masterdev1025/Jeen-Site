<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\PasswordResetToken;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\WebsiteFormTag;
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

    public function approve(Request $request){
        $email = $request->email;
        User::where([['email','=',$email]])->update(['userStatus' => 1]);
        $resetToken = PasswordResetToken::create( [
            'email' => $email,
            'token' => Hash::make( rand(1000, 9999) )
        ] );
        $tbl = '
            <div>
                <h3>Please set password via this link</h3>
                <a href = "https://beta21.jeen.com/password-reset?email='.$email.'&token='.$resetToken->token.'">https://beta21.jeen.com/password-reset?email='.$email.'&token='.$resetToken->token.'</a>
            </div>
        ';
        $personal = array(
            "personalizations" => array(
                array(
                    "to" => array(
                        array(
                            "email" => $email)
                    ),
                    "subject" => 'Reset Password',
                ),
            ),
            "from" => array("email" => "websupport@jeen.com","name" => "Reset Password"),
            "content" => array(array("type" => "text/html", "value" => $tbl))
        );
        $ch = curl_init();
        $personal = json_encode($personal, JSON_UNESCAPED_SLASHES);
        curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/v3/mail/send');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $personal);

        $headers = array();
        $headers[] = 'Authorization: Bearer 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';
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        // if (curl_errno($ch)) {
        //     echo 'Error:' . curl_error($ch);
        // }
        curl_close($ch);
        return response()->json([
            'error' => 0 , 'message' => 'Success'
        ]);
    }
    public function showRegistrationForm()
    {
        $companyTags    = WebsiteFormTag::where([['tagType','=','customerType'],['active','=',1]])->orderBy('sortBy','ASC')->get();
        $productUseTags = WebsiteFormTag::where([['tagType','=','productUse'],['active','=',1]])->orderBy('sortBy','ASC')->get();
        return view('auth.register', [
            'companyUse' => $companyTags,
            'productUse' => $productUseTags
        ]);
    }
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
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
        return redirect('/register')->with(['html' => '
        <div class="card mb-5 mt-4">
        <div class="card-body">
        <p class="lead mb-5 mt-4 text-center text-primary font-weight-bold">Thank you for registering!
        </p><p class="lead mb-5 mt-4 text-center text-dark ">Your information has been submitted for verification.<br>Most applications are reviewed within 24 hours.<br><br>For immediate assistance please call (973) 439-1401
        </p></div></div>
        ']);
    }
    protected function create(array $data)
    {

        $user =  User::create([
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
            'companyType' => !empty( $data['companyType'] ) ? $data['companyType'] : '',
            'companyProductUse' => !empty( $data['companyProductUse'] ) ? $data['companyProductUse'] : '',
            'password' => ''
        ]);

        return $user;
    }
}
