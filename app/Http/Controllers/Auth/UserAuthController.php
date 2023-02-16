<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(),[
                'firstName' => 'required|max:255',
                'lastName' => 'required|max:255',
                'gender' => 'required|max:255',
                'phone' => 'required|max:20',
                'user_type' => 'required|max:20',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'confirm_password' => 'required|same:new_password'
            ]);

            if($validator->fails()){
                return response()->json($validator->errors(), 422);
            }

            $user = new User();
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->gender = $request->input('gender');
            $user->phone = $request->input('phone');
            $user->user_type = $request->input('user_type');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));

            $user->save();

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
               $user = User::where('email', $request->email)->first();
               $access_token = $user->createToken($request->input('email'))->accessToken;
               User::where('email', $request->input('email'))->update(['access_token' => $access_token]);
               $message = 'User Successfully Registered';
               return response()->json(['message' => $message, 'access_token' => $access_token], 201);
            }
            else{
                $message = 'Oops something went wrong!';
                return response()->json(['message' => $message], 422);
            }
        }

    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            $user = User::where('email', $request->email)->first();
            $access_token = $user->createToken($request->input('email'))->accessToken;
            User::where('email', $request->input('email'))->update(['access_token' => $access_token]);
            $message = 'User Successfully Logged in';
            return response()->json(['message' => $message, 'access_token' => $access_token], 201);
        }
        else{
            $message = 'email or password is wrong.';
            return response()->json(['message' => $message], 422);
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
            return response()->json([
                'message' => 'Successfully logged out'
            ]);
        }
        else{
            return response()->json([
                'message' => 'Please log in first'
            ]);
        }
    }
}
