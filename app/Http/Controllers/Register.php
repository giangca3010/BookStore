<?php

namespace App\Http\Controllers;
use App\Http\Repository\RegisterModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;




class Register extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6',
            'repassword'=> 'required|min:6|same:password',

        ];
        $messages = [
            'name.required'=>'Tên là trường bắt buộc',
            'email.required'=>'Email là trườn bắt buộc',
            'email.email'   => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự',
            'repassword.required'=> 'Xác nhận mật khẩu là bắt buộc',
            'repassword.min' => 'Mật khẩu it nhất 6 kí tự',
            'repassword.same'=> 'Mật khẩu không khớp',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()){
            response()->json([
                'error' => true,
                'message' => $validator->errors()
            ],200);
        } else {
            $dataRegister = [];
            $dataRegister['name']     = $request->input('name');
            $dataRegister['email']     = $request->input('email');
            $dataRegister['password']  = \Hash::make($request->input('password')) ;
            $dataRegister['level_user']  = $request->input('level');

            $addData = new RegisterModel();
            $addData ->adduser($dataRegister);
            return response()->json([
                'error'=>false,
                'message'=>'success'
            ],200);
        }

    }

}
