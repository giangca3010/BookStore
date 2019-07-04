<?php

namespace App\Http\Controllers\Customer;

use App\Http\Repository\CustomerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
class CustomerController extends Controller
{
    //
    public function getCustomer()
    {
//        dd(session('user')->id);
        $userId = 1;
        $customerModel = new CustomerModel();
        $customerId = $customerModel->getCustomer($userId);
//        dd($customerId);
        return view('page.detail_user',['customerId' => $customerId]);
    }
    public function updateCustomer(Request $request)
    {

        $userId = $request->input('CustomerId');
        $userModel = new CustomerModel();
        $userModel->updateCustomer($userId);
        Session::put('message1','nang cap thành công');
        return Redirect('yeucau_user');
    }
}
