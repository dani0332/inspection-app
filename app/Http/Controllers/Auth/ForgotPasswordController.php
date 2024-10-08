<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm()
    {
        return view('admin.auth.forgot_password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
//        $response = $this->broker()->sendResetLink(
//            $request->only('email')
//        );

        $user = User::where('email',$request->email)->first();

        //region update forgot password hash and update hash date
        $hash = $this->__generateUserHash($request->email);


        User::updateByEmail($request->email, [
            'forgot_password_hash' => $hash,
            'forgot_password_hash_date' => Carbon::now()
        ]);
        //endregion

        \Log::debug("sendResetLinkEmail".print_r([
            'request->all()' => $request->all(),
            'Auth::user()' => $user->toArray(),
            'route("password.reset")' =>  route("password.reset",['token' => $hash]),
                               ],1));

        $mail_params['USER_NAME'] = $user->first_name . ' ' . $user->last_name;
        $mail_params['CONFIRMATION_LINK'] = route("password.reset",['token' => $hash]) ;
        // $mail_params['USER_LINK'] = url('/user/login') ;
        $mail_params['APP_NAME'] = env('APP_NAME');
        $mail_params['APP_URL'] = dynamicBaseUrl('');

        // make forgot password url and implement its email configuration.
        $this->__sendMail('user_forgot_password', $request->email, $mail_params);


        return back()->with('status',"Email Sent");
//        return $response == Password::RESET_LINK_SENT
//            ? $this->sendResetLinkResponse($response)
//            : $this->sendResetLinkFailedResponse($request, $response);
    }
}
