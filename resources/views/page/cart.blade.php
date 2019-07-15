@extends('layout_page')
@section('content')


    <!--	Body	-->
    <div id="body">
        <div class="container">
            <div class="row">
                <div id="main" class="col-lg-8 col-md-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
                            <li class="breadcrumb-item active" aria-current="page"><a>Cart</a></li>
                        </ol>
                    </nav>
                    <!--	Slider	-->
                    <!--	End Slider	-->

                    <!--	Cart	-->
                    <div id="my-cart">
                        <div class="row">
                            <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Thông tin sản phẩm</div>
                            <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Tùy chọn</div>
                            <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Giá</div>
                        </div>
                            <div class="cart-item row">
                                @foreach($content as $v_content)

                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="{{URL::to($v_content->options->image)}}">
                                    <h4>{{$v_content->name}}</h4>
                                </div>

                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <form action="{{url('/update_cart')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="number" id="quantity" name="qty" class="form-control form-blue quantity" value="{{$v_content->qty}}" min="1">
                                        <input type="hidden" name="rowId" value="{{$v_content->rowId}}">
                                        <input type="submit" name="submit" value="update" class="btn btn-danger">
                                    </form>
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>{{number_format($v_content->price * $v_content->qty)}} đ</b><a href="{{URL::to('/delete-cart/'.$v_content->rowId)}}">Xóa</a></div>
                                @endforeach

                            </div>
                            <div class="row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    {{--<button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ hàng</button>--}}
                                </div>
                                <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</b></div>
                            </div>

                    </div>
                    <!--	End Cart	-->

                    <!--	Customer Info	-->
                    <div id="customer">
                        <form method="post" action="{{URL::to('/add-shipping')}}">
                            <div class="row">
                                <?php
                                    $bien = session()->get('user')->level_customer;
                                ?>
                                <input type="hidden" name="rowId" value="{{$bien}}">
                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control" required>
                                </div>
                                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                    <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="add" class="form-control" required>
                                    <input type="submit" name="submit" class="btn btn-primary">
                                </div>

                            </div>
                        </form>
                        <div class="row">
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Mua ngay</b>
                                    <span>Giao hàng tận nơi siêu tốc</span>
                                </a>
                            </div>
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Trả góp Online</b>
                                    <span>Vui lòng call (+84) 0988 550 553</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--	End Customer Info	-->

                </div>

                <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
                    <div id="banner">
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="{{asset('page/images/banner-1.png')}}"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="{{asset('page/images/banner-2.png')}}"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="{{asset('page/images/banner-3.png')}}"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="{{asset('page/images/banner-4.png')}}"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="{{asset('page/images/banner-5.png')}}"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="{{asset('page/images/banner-6.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--	End Body	-->

@endsection