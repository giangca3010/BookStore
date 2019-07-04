<?php

namespace App\Http\Controllers\Logout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    //
    public function getSignOut() {
        session()->flush();
        return redirect('/');
    }
}
