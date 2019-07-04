<?php

namespace App\Http\Controllers\Login;

use App\Http\Repository\LoginModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;


class LoginController extends Controller
{
    public function postLogin(Request $request) {
//        $rules = [
//            'email' =>'required|email',
//            'password' => 'required|min:6'
//        ];
//        $messages = [
//            'email.required' => 'Email là trường bắt buộc',
//            'email.email' => 'Email không đúng định dạng',
//            'password.required' => 'Mật khẩu là trường bắt buộc',
//            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
//        ];
//        $validator = Validator::make($request->all(), $rules, $messages);
//
//        if ($validator->fails()) {
//            return response()->json([
//                'error' => true,
//                'message' => $validator->errors()
//            ], 200);
//            // return redirect()->back()->withErrors($validator)->withInput();
//        } else {
//            $email    = $request->input('email');
//            $password = $request->input('password');
//            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
//                return response()->json([
//                    'error' => false,
//                    'message' => 'success'
//                ], 200);
//
//            } else {
//                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
//                return response()->json([
//                    'error' => true,
//                    'message' => $errors
//                ], 200);
////                 return redirect()->back()->withInput()->withErrors($errors);
//            }
//        }

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
                }else{
                    $rawData = [];
                    $rawData['email']     = $request['email'];
                    $login = new LoginModel();
                    $user = $login ->getUserByEmail($rawData['email']);
                    $isLoginSuccess = Hash::check($request['password'], $user->password);
                    if($isLoginSuccess == true){
                        session(['user' => $user]);
                        return Redirect('/detail_user');
                    }else {
                        return redirect('/register')->with( Session::flash('error','Mật khẩu của bạn không đúng'));
                    }
                }


    }
}

