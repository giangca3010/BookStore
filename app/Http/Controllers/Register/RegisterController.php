<?php

namespace App\Http\Controllers\Register;

use App\Http\Repository\RegisterModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
//        $rules = [
//            'name'  =>'required',
//            'email' =>'required|email|unique:users,email',
//            'pass' => 'required|min:6',
//            're-pass'=>'required|same:pass|min:6',
//        ];
//        $messages = [
//            'name'           =>'Tên là trường bắt buộc',
//            'email.required' => 'Email là trường bắt buộc',
//            'email.email'    => 'Email không đúng định dạng',
//            'pass.required'  => 'Mật khẩu là trường bắt buộc',
//            'pass.min'       => 'Mật khẩu phải chứa ít nhất 6 ký tự',
//            'email.unique'   => 'Email đã tồn tại',
//            're-pass.same'   => 'Mật khẩu không khớp'
//        ];
//        $validator = Validator::make($request->all(), $rules, $messages);
//
//        if ($validator->fails()) {
//            return response()->json([
//                'error' => true,
//                'message' => $validator->errors()
//            ], 200);
//        }


        $dataregister = [];
        $dataregister['name_customer'] = $request['add_name'];
        $dataregister['email'] = $request['add_email'];
        $dataregister['password'] = \Hash::make($request['add_pass']);
        $dataregister['level_customer'] = $request['add_level'];
        $addData = new RegisterModel();
        $addData -> adduser($dataregister);
        return Redirect('/');
//        return response()->json(['status' => 'dang ky tai khoan thanh cong',200]);









    }
}
