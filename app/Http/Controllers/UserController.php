<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Utils\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Firebase\FirebaseUtils;

class UserController extends Controller
{

    public function createAndLogin(Request $request)
    {
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

                $user->createToken('ourAppToken-' . ($request->email))->plainTextToken;
                //dd("created token");

                return response()->json(
                    [
                        "status" => true,
                        "msg" => "User created successfully",
                        "token" => $user->createToken('ourAppToken-' . ($request->email))->plainTextToken,
                        "code" => 200,
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

    public function destroy(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return response()->json(
                [
                    "status" => false,
                    "message" => "success log out",

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

    public function deleteUser(Request $request)
    {
        $uuid = $request->header("uuid");

        try {
            if (!FirebaseUtils::existUser($uuid)) {
                return Messages::errorMessage("Invalid credentials", 400);
            }
        } catch (\Throwable $th) {
            return Messages::errorMessage($th->getMessage(), 400);
        }

        return response()->json(
            [
                "status" => true,
                "message" => "success",

            ],
            200
        );
    }
}
