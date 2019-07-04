@extends('layout_page')
@section('content')
    @foreach($customerId as $v_user)
        <div class="row">
            <div id="main" class="col-lg-12 col-md-12 col-sm-12">
                <h1 style="color: brown;font-weight: bold" class="text-center">Thông tin chi tiết khách hàng</h1>
                <hr>
                <h2 style="color:brown;">Tên : {{$v_user->name_customer}}</h2>
                <hr>
                <p>Tình trạng tài khoản :  @if(1 === $v_user->level_customer)
                        <span style="color: white" class="badge badge-success">Tài khoản thường</span>
                    @else
                        <span class="badge badge-warning"> Tài khoản vip </span>
                    @endif</p>
                <hr>
                @if(1 === $v_user->level_customer)
                    <form action="{{url('/create_request')}}" method="post">
                        {{csrf_field()}}
                        Nâng cấp tài khoản :
                        <select name="tk">
                            <option value="2">Tài khoản vip</option>
                        </select>
                        <input type="submit" class="btn btn-danger" id="submit" value="Đồng ý nâng cấp">
                    </form>
                @endif
                <hr>

             <?php
                $message = Session::get('message');
                if ($message){
                    echo "<p style='color: red' >$message</p>";
                    Session::put('message',null);
                }
                ?>
            </div>
    @endforeach

@endsection