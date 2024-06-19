<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function createAndLogin(Request $request){
        try {
            $validateUser = Validator::make($request->all(), [
                "name" => "required",
                "email" => "required|email",
                "password" => "required",
            ]);

            if ($validateUser->fails()) {
                return response()->json(
                    [
                        "status" => false,
                        "message" => "validation error",
                        "errors" => $validateUser->errors(),
                    ],
                    401
                );
            }

            

            if (!auth()->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])) {
            

                $userID = User::insertGetId([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => bcrypt($request->password),
                ]);
                $user = User::where("id", "=", $userID)->first();

                $user->createToken('ourapptoken')->plainTextToken;
                //dd("created token");

                return response()->json(
                    [
                        "status" => true,
                        "msg" => "User created successfully",
                        "token" => $user->createToken('ourAppToken-'.($request->email))->plainTextToken,
                        "code"=>200,
                    ],
                    200,
                );

            } 

            $user = User::where("email", $request->email)->first();

            return response()->json(
                [
                    "status" => true,
                    "message" => "logged successfully",
                    "token" => $user->createToken("API TOKEN")->plainTextToken,
                ],
                200
            );


        } catch (\Throwable $th) {
            return response()->json(
                [
                    "status" => false,
                    "message" => $th->getMessage(),

                ],
                500
            );
        }
    }

}
