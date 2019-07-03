<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function postLogin(Request $request) {

        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
            // return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email    = $request->input('email');
            $password = $request->input('password');
            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                return response()->json([
                    'error' => false,
                    'message' => 'success'
                ], 200);

            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return response()->json([
                    'error' => true,
                    'message' => $errors
                ], 200);
//                 return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
}

