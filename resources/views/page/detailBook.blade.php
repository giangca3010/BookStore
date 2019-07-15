@extends('layout_page')
@section('content')
<div class="row">
    @foreach($Detailbook as $key => $BookDetail)
    @endforeach
    <div id="main" class="col-lg-8 col-md-12 col-sm-12">
        <!--	Slider	-->
{{--        <div id="slide" class="carousel slide" data-ride="carousel">--}}

{{--            <!-- Indicators -->--}}
{{--            <ul class="carousel-indicators">--}}
{{--                <li data-target="#slide" data-slide-to="0" class="active"></li>--}}
{{--                <li data-target="#slide" data-slide-to="1"></li>--}}
{{--                <li data-target="#slide" data-slide-to="2"></li>--}}
{{--                <li data-target="#slide" data-slide-to="3"></li>--}}
{{--                <li data-target="#slide" data-slide-to="4"></li>--}}
{{--                <li data-target="#slide" data-slide-to="5"></li>--}}
{{--            </ul>--}}

{{--            <!-- The slideshow -->--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img src="{{asset('page/images/slide-1.png')}}" alt="Vietpro Academy">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="{{asset('page/images/slide-2.png')}}" alt="Vietpro Academy">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="{{asset('page/images/slide-3.png')}}" alt="Vietpro Academy">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="{{asset('page/images/slide-4.png')}}" alt="Vietpro Academy">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="{{asset('page/images/slide-5.png')}}" alt="Vietpro Academy">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="{{asset('page/images/slide-6.png')}}" alt="Vietpro Academy">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Left and right controls -->--}}
{{--            <a class="carousel-control-prev" href="#slide" data-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon"></span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#slide" data-slide="next">--}}
{{--                <span class="carousel-control-next-icon"></span>--}}
{{--            </a>--}}

{{--        </div>--}}
        <!--	End Slider	-->
{{--<hr>--}}
        <!--	List Product	-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/detailBook/'.$BookDetail->id)}}">{{$BookDetail->name}}</a></li>
            </ol>
        </nav>
        <div id="product">
            <div id="product-head" class="row">
                <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
                    <img style="width: 100%;" src="{{URL::to($BookDetail->thumbnail)}}">
                </div>
                <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
                    <h1>{{$BookDetail->name}}</h1>
                    {!! $BookDetail->description !!}
                    <p>Giá Bán: <span style="color: red;font-weight: bold;font-size: 20px">{{number_format($BookDetail->price),2}} đ</span></p>
                    @if((session()->get('user')))
                    <form action="{{url('/add-to-cart')}}" method="post">
                        {{csrf_field()}}
                        Số lượng :<input type="number" style="width: 60px" value="1" name="qty">
                        <input type="hidden" name="bookId" value="{{$BookDetail->id}}">
                        <input type="submit" class="btn btn-danger" value="Mua Sách">
                    </form>
                    @elseif(!(session()->get('user')))
                        <span class="btn btn-danger">Bạn cần đăng nhập tài khoản để được mua sách</span>
                        @endif
                    <hr>

                    {{--@if(!(session()->get('user')) || (session()->get('user')->level_customer == 1) )--}}
                    {{--<div class="btn btn-danger">Bạn cần nâng cấp tài khoản để tải sách</div>--}}
                        {{--@else--}}
                        {{--<div id="add-cart"><a href="{{URL::to($BookDetail->file)}}" target="_blank"> Tải xuống</a></div>--}}
                    {{--@endif--}}
                    @if(!(session()->get('user')))
                        <p class="btn btn-danger"><i class="glyphicon glyphicon-download-alt" style="font-size: 18px;color: white"></i>&nbsp; Bạn chưa có tài khoản nên không tải được sách</p>
                    @elseif((session()->get('user')->level_customer == 1))
                        <p class="btn btn-danger"><i class="glyphicon glyphicon-download-alt" style="font-size: 18px;color: white"></i>&nbsp; Bạn cần nâng cấp tài khoản để tải sách</p>
                        @elseif((session()->get('user')->level_customer == 2))
                        <a href="{{URL::to($BookDetail->file)}}" target="_blank">
                            <p class="btn btn-danger"><i class="glyphicon glyphicon-download-alt" style="font-size: 18px;color: white"></i>&nbsp; Tải sách</p>
                        </a>
                    @endif
                </div>
            </div>
            <div  id="product-body" class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>Mô tả về sách</h3>
                    {!! $BookDetail->content !!}
                </div>
            </div>
            <!--	Comment	-->
            <div id="comment" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    @if(Session::has('comment'))

                        <p class="alert alert-success">
                            {{Session::get('comment')}}
                        </p>
                    @endif
                    <h3>Bình luận sản phẩm</h3>
                    <form method="post" action="{{url('/insert-comment')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="hidden" name="link" id="link" value="{{$BookDetail->link}}">
                            {{--@dd($BookDetail->link)--}}
                            <input type="hidden" name="id_book" id="id" value="{{$BookDetail->id}}">
                            <label>Nội dung:</label>
                            <textarea name="comm_details" id="editor3"  required rows="8" class="form-control"></textarea>
                        </div>
                        @if(session()->has('user'))

                            <input type="submit" value="Gửi comment" name="sbm" class="btn btn-primary">
                        @else
                            {{--<input data-toggle="tooltip1" title="Vui lòng đăng nhập để được comment"  value="Gửi comment" name="sbm" class="btn btn-primary disabled">--}}
                            <p  class="btn btn-primary">Vui lòng đăng nhập để được gửi comment</p>
                        @endif
                    </form>
                </div>
            </div>
            <!--	End Comment	-->

            <!--	Comments List	-->
            @foreach($comment as $v_comment)

            <div class="item" style="display: flex;padding: 20px">
                    <img style="height: 50px; margin-right: 20px " src="{{asset('admin/img/anh.png')}}" alt="user image" class="offline"/>
                <p class="message">
                    <a href="#" class="name">
                        <small class="text-muted pull-right"></small>
                        {{$v_comment->name_customer}}
                    </a>&nbsp;
                    : {!! $v_comment->content !!}
                </p>
            </div><!-- /.item -->
            @endforeach

            {{--<div id="comments-list" class="row">--}}
                {{--<div class="col-lg-12 col-md-12 col-sm-12">--}}
                    {{--<div class="comment-item">--}}
                        {{--<ul>--}}
                            {{--<li><b>{{$v_comment->name_customer}}</b></li>--}}
                            {{--<li>--}}
                                {{--<p>{{$v_comment->content}}</p>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!--	End Comments List	-->
        <!--	End Product	-->
    </div>
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

    @endsection
