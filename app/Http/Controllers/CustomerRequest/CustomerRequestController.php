<?php

namespace App\Http\Controllers\CustomerRequest;

use App\Http\Repository\CustomerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
class CustomerRequestController extends Controller
{
    //
    public function insertRequestCustomer(Request $request )
    {
//        $userLogin = request()->user; //thong tin toan user login
//        $userId    = $userLogin->id; //lay thong tin ID cua login
//        dd($userId);
//        $customer_id = 1;
        $value = $request->session()->get('user');
        $valueId = $value->id;
        $rawData = array();
        $rawData['customer_id'] = $valueId;
        $yeucauModel = new CustomerRequest();
        $yeucau = $yeucauModel->insertRequestCustomer($rawData );
        Session::put('message','Gửi yêu cầu thành công chúng tôi sẽ cấp quyền cho bạn sớm nhất');
        return redirect('/detail_user');

    }

    public function allRequestCustomer()
    {
        $requestCustomerModel = new CustomerRequest();
        $requestCustomer = $requestCustomerModel->getCustomerRequest();
//        dd($RequestCustomer);
        return view('admin.yeucau_user',['requestCustomer' => $requestCustomer]);
    }
    public function deleteCustomer($customer)
    {
//        dd($customer1);
        $customerModel = new CustomerRequest();
        $customerModel -> deletecustomer($customer);
        return Redirect('/yeucau_user');
    }
}
