<?php

namespace App\Http\Controllers\Shipping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class shippingController extends Controller
{
    //
    public function saveShipping(Request $request)
    {
        $data = array();
        $data['customer_id'] =$request->rowId;
        $data['shipping_name'] = $request->name;
        $data['shipping_address'] = $request->mail;
        $data['shipping_phone'] = $request->phone;
        $data['shipping_email'] = $request->add;
        DB::table('shipping')->insert($data);
        return Redirect()->back();

    }
}
