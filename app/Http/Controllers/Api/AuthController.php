<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiRespose;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // public function register(Request $request)

    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'email', 'max:255', 'unique:' . User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ], [], [
    //         'name' => 'Name',
    //         'email' => 'Email',
    //         'password' => 'Password',
    //     ]);

    //     if ($validator->fails()) {
    //         return ApiRespose::sendResponse(422, 'Register Validation Errors', $validator->messages()->all());
    //     }

    //     $doctor = Doctor::create([

    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),

    //     ]);

    //     $data['token'] = $doctor->createToken('APIcourse')->plainTextToken;
    //     $data['name'] = $doctor->name;
    //     $data['email'] = $doctor->email;

    //     return ApiRespose::sendResponse(201, 'User Account Created Successfully', $data);
    // }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ], [], [
            'email' => __('lang.email'),
            'password' => __('lang.password'),
        ]);

        if ($validator->fails()) {
            return ApiRespose::sendResponse(422, 'Login Validation Errors', $validator->errors());
        }

        // تعديل guard للأطباء
        if (Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $doctor = Auth::guard('doctor')->user(); // استخدام حارس الأطباء
            $data['token'] =  $doctor->createToken('MyAuthApp')->plainTextToken;
            $data['name'] =  $doctor->name;
            $data['email'] =  $doctor->email;
            return ApiRespose::sendResponse(200, 'Login Successfully', $data);
        } else {
            return ApiRespose::sendResponse(401, 'These credentials don\'t exist', null);
        }
    }

    public function logout(Request $request)
    {

        $delete = $request->user()->currentAccessToken()->delete();
        if ($delete) {

            return ApiRespose::sendResponse(200, 'Logged Out Successfully', []);
        }
    }
}
