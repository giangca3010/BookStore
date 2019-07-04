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

