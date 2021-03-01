<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\JWT;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if (User::isEmailTaken($request->email)) {
            return response()->json([
                "api_message" => "email has been taken",
            ],400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            "api_message" => "Success : Registration successful !",
            "data" => $user
        ],201);
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    "api_message" => "Failed : Wrong email / password ",
                ],400);
            }
        } catch (JWTException $e) {
            return response()->json([
                "message" => "invalid token",
                "data" => null
            ]);
        }

        return response()->json([
            "message" => "success",
            "data" => compact('token')
        ],200);

    }

    public function update(Request $request){
        $user = User::where('id',Auth::user()->id)->first();
        if(!$user){
            return response()->json([
                "api_message" => "Failed : cant find id ",
            ],400);
        }
        if($request->has('name')){
            $user->name = $request->name;
        }
        if($request->has('email')){
            if(User::isEmailTaken($request->email)){
                return response()->json([
                    "api_message" => "Failed : Email taken ",
                ],400);
            }else{
                $user->email = $request->email;
            }
        }
        $user->save();
        return response()->json([
            "api_message" => "success : user data updated ","data" => $user
        ],200);
    }

    public function getUserDetail($user_id){
        $user = User::where('id',$user_id)->first();
        return response()->json([
            "api_message" => "success : Getting user detail ...","data" => $user
        ],200);
    }
}
