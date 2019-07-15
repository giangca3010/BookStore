<?php

namespace App\Http\Controllers\Cart;

use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class cartController extends Controller
{
    //
    public function add_to_cart(Request $request)
    {
        $qty = $request->qty;
        $product_id = $request->bookId;
        $product_info = DB::table('books')
            ->where('id' ,$product_id)
            ->first()
        ;
//        dd($product_info);
        $data['qty'] = $qty;
        $data['id']  = $product_info->id;
        $data['name']  = $product_info->name;
        $data['weight'] =1;
        $data['price']  = $product_info->price;
        $data['options']['image']  = $product_info->thumbnail;
        \Gloudemans\Shoppingcart\Facades\Cart::add($data);
        return Redirect::to('/show_cart');

    }

    public function show_cart()
    {
        $content = \Gloudemans\Shoppingcart\Facades\Cart::content();
//        dd($content);
        return view('page.cart' ,['content'=>$content]);
    }

    public function delete_cart($rowId)
    {
        \Gloudemans\Shoppingcart\Facades\Cart::update($rowId,0);
        return Redirect()->back();
    }

    public function update_cart(Request $request )
    {
        $qty = $request->qty;
        $rowId = $request->rowId;
//        dd($rowId);
        \Gloudemans\Shoppingcart\Facades\Cart::update($rowId,$qty);
        return Redirect()->back();

    }
}
