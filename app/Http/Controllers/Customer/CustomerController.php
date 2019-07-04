<?php

namespace App\Http\Controllers\Customer;

use App\Http\Repository\CustomerModel;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
class CustomerController extends Controller
{
    //
    public function getCustomer( Request $request)
    {

        $value = $request->session()->get('user');
        $valueId = $value->id;
        $customerModel = new CustomerModel();
        $customerId = $customerModel->getCustomer($valueId);
//        dd($customerId);
        return view('page.detail_user',['valueId' => $valueId,'customerId'=>$customerId ]);
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
