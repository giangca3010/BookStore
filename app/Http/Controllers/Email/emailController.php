<?php

namespace App\Http\Controllers\Email;
//use App\Http\Requests\NameRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
class emailController extends Controller
{
    //
    public function index()
    {
        return view('admin.send_email');
    }

    public function send(Request $request)
    {
        $rules = [
            //
            'email' =>  'required',
            'name'  => 'required',
            'message' => 'required'

        ];
        $message = [
            'name.required'             => 'Trường name là trường bắt buộc phải nhập',
            'email.required'             => 'Trường email là trường bắt buộc phải nhập',
            'message.required'             => 'Trường message là trường bắt buộc phải nhập',
        ];
        $validator = Validator::make($request->all(),$rules ,$message);
        if ($validator -> fails()){
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        $data = array(
            'name'  => $request->name,
            'message' => $request->message
        );
        Mail::to('thanhvm.saf@gmail.com')->send( new SendEmail($data));
//        return back()->with('success','gui thanh cong');
        return response()->json(['success'=>'gui thanh cong','code'    => 1],200);


    }
}
