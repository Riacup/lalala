<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Str;

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

//     use AuthenticatesUsers;

//     /**
//      * Where to redirect users after login.
//      *
//      * @var string
//      */
//     protected $redirectTo = RouteServiceProvider::HOME;

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//     }

//     public function login(Request $request)
//     {
//         // $this->validateLogin($request);

//         // if($this->attemptLogin($request)){
//         //     $user = $this->guard()->user();
//         //     $tokenResult = $user->createToken('Personal Access Token');
//         //     $token = $tokenResult->token;

//         //     return response()->json([
//         //         'data' => $user->toArray(),
//         //         'token' => [
//         //             'access_token' => $tokenResult->accessToken,
//         //             'token_type' => 'Bearer',
//         //             'expires_at' => Carbon::parse(
//         //                 $tokenResult->token->expires_at
//         //             )->toDateTimeString()
//         //         ]
//         //     ]);
//         // }
//         // return $this->sendFailedLoginResponse($request);
//         $request->validate([
//             'email' => 'required|string|email',
//             'password' => 'required|string',
// //            'remember_me' => 'boolean'
//         ]);
//         $credentials = request(['email', 'password']);
//         if(!Auth::attempt($credentials))
//             return response()->json([
//                 'message' => 'Unauthorized'
//             ], 401);
//         $user = $request->user();
//         $tokenResult = $user->createToken('Personal Access Token');
//         $token = $tokenResult->token;
//         if ($request->remember_me)
//             $token->expires_at = Carbon::now()->addWeeks(1);
//         $token->save();
//         $status = "Success";
//         $msg = "Login Sukses";
//         $data = Auth::user();
//         return response()->json([
//             'status' => $status,
//             'message' => $msg,
//             'data' => $data,
//             'token' => [
//                 'access_token' => $tokenResult->accessToken,
//                 'token_type' => 'Bearer',
//                 'expires_at' => Carbon::parse(
//                     $tokenResult->token->expires_at
//                 )->toDateTimeString()
//             ]
//         ]);
//     }

//     public function logout(Request $request)
//     {
//         $user = Auth::guard('api')->user();

//         if($user){
//             $user->api_token = null;
//             $user->save();
//         }

//         return response()->json(['data' => 'User logged out.'], 200);
//     }
}
