<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reward;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(Request $request) {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password salah'
            ], 401);
        }
        
        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'success' => true,
            'data' => [
                'user' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ],
            'message' => 'Login Succesfull'
        ];

        return response()->json($response, 200);

        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     $response = [
        //         'success' => true,
        //         'data' => $credentials,
        //         'message' => 'Login Succesful'
        //     ];

        //     return response()->json($response, 200);
        // }else {
        //     $response = [
        //         'success' => false,
        //         'data' => $credentials,
        //         'message' => 'Login Unsuccesful'
        //     ];
        //     return response()->json($response, 200);
        // }
   
        // return redirect("login")->withSuccess('Login details are not valid');
    }

    public function signUp(Request $request) {
        // $request->validate([
            
        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()){
            // $response = [
            //     'success' => true,
            //     'data' => $validator->errors(),
            //     'message' => 'Sign Up Failed'
            // ];

            // return response()->json($response, 200);
            return response()->json($validator->errors());
        }

            
        $user = User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'success' => true,
            'data' => [
                'user' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ],
            'message' => 'Sign Up Succesful'
        ];

        return response()->json($response, 200);
          
        // return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function logout(){
        Auth::user()->tokens()->delete();
        return response()->json([
            'success' => true,
            'data' => '',
            'message' => 'logout success'
        ]);
    }

    public function getUser(){
        
        $data = User::where('id', Auth::user()->id)->first();

        if ($data != null){
            $response = [
                'success' => true,
                'data' => $data,
                'message' => 'Getting User Data'
            ];
            return response()->json($response, 200);
        } else {
            $response = [
                'success' => false,
                'message' => 'No User found'
            ];
            return response()->json($response, 200);
        }
    }

    public function editProfile(Request $request){
        
        $name = $request->name;
        $email = $request->email;
        $old_password = $request->old_pass;
        $new_password = $request->new_pass;

        $user = User::where('id', Auth::user()->id)->first();


        if (!$name == ""){
            $user->name = $name;
            $user->save();
        }

        if (!$email == "" && Str::contains($email, ['@', '.com'])){
            $user->email = $email;
            $user->save();
        }else if (!$email == ""){
            return response()->json([
                'success' => false,
                'data' => '',
                'Message' => 'Email tidak ditemukan'
            ], 200);
        }
        
        // if (!$new_password == "" && Str::length($new_password) >= 8 && !$old_password == "" && Str::length($old_password) >= 8 ){
        //     if (Str::contains($old_password, $user->password)){
        //         $new_pass = Hash::make($new_password);
        //         $user->password = $new_pass;
        //         $user->save();
        //     } else {
        //         return response()->json([
        //             'success' => false,
        //             'data' => '',
        //             'Message' => 'Password lama salah'
        //         ], 200);
        //     }
        // } else if (!$new_password == "" && Str::length($new_password) < 8 ){
        //     return response()->json([
        //         'success' => false,
        //         'data' => '',
        //         'Message' => 'Password kurang dari 8 karakter'
        //     ], 200);
        // }

        if (!$new_password == "" || !$old_password == ""){
            if (Str::length($new_password) < 8 || Str::length($old_password < 8)) {
                return response()->json([
                    'success' => false,
                    'data' => "",
                    'Message' => 'Password harus 8 karakter'
                ], 200);
            } else {
                if (Hash::check($old_password, $user->password)){
                    $user->password = $new_password;
                    $user->save();
                } else {
                    return response()->json([
                        'success' => false,
                        'data' => "",
                        'Message' => 'Password lama tidak sesuai '
                    ], 200);
                }
            }
        }

        return response()->json([
            'success' => true,
            'data' => $user,
            'Message' => 'Edit berhasil'
        ], 200);

    }

    public function editProfilePic(Request $request) {
        $user = User::where('id', Auth::user()->id)->first();
        $image = Reward::where('id', $request->id)->first();

        $user->image = $image;
        $user->save();

        return response()->json([
            'success' => true,
            'data' => $user,
            'Message' => 'Edit berhasil'
        ], 200);
    }
    
}
