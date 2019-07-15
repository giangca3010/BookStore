@extends('layout_page')
@section('content')
<div class="row">
    <div id="main" class="col-lg-8 col-md-12 col-sm-12">
        <div id="slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#slide" data-slide-to="0" class="active"></li>
                <li data-target="#slide" data-slide-to="1"></li>
                <li data-target="#slide" data-slide-to="2"></li>
                <li data-target="#slide" data-slide-to="3"></li>
                <li data-target="#slide" data-slide-to="4"></li>
                <li data-target="#slide" data-slide-to="5"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img height="300px" src="{{asset('page/images/sach1.jpg')}}" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img height="300px" src="{{asset('page/images/sach2.jpg')}}" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img height="300px" src="{{asset('page/images/sach3.jpg')}}" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img height="300px" src="{{asset('page/images/sach2.jpg')}}" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img height="300px" src="{{asset('page/images/sach5.jpg')}}" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img height="300px" src="{{asset('page/images/sach5.jpg')}}" alt="Vietpro Academy">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

        <!--	Feature Product	-->
        <div class="products">
            <h3>Sản phẩm nổi bật</h3>
            <div class="product-list card-deck">
                @foreach($ViewBookHighlights as $key => $bookHightLights)
                    <div class="product-item card text-center">
                        <input type="hidden" name="id" id="id" value="{{$bookHightLights->name}}">
                        <a href="{{URL::to('/product/'.$bookHightLights->id. '/'.$bookHightLights->link)}}"><img style="width: 150px;" src="{{URL::to($bookHightLights->thumbnail)}}" alt=""></a>
                        <h4><a href="#">{{$bookHightLights->name}}</a></h4>
                        {{--<span><i class="glyphicon glyphicon-shopping-cart">{{$bookHightLights->price}}</i></span>--}}
                        <p>Giá Bán: <span style="color: red;font-weight: bold;font-size: 20px">{{number_format($bookHightLights->price),2}} đ</span></p>
                    </div>
                @endforeach
            </div>
        </div>
        <!--	End Feature Product	-->


        <!--	Latest Product	-->
        <div class="products">
            <h3>Sản phẩm mới</h3>
            <div class="product-list card-deck">
                @foreach($ViewNewBook as $key => $NewBook)
                <div class="product-item card text-center">
                    <a href="{{URL::to('/product/'.$NewBook->id .'/'.$NewBook->link)}}"><img style="width: 150px;" src="{{URL::to($NewBook->thumbnail)}}" alt=""></a>
                    <h4><a href="#">{{$NewBook->name}}</a></h4>
                    <p>Giá Bán: <span style="color: red;font-weight: bold;font-size: 20px">{{number_format($NewBook->price),2}} đ</span></p>
                </div>
                @endforeach
            </div>
        </div>
        <!--	End Latest Product	-->

    </div>

    <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
        <div id="banner">
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="page/images/banner-1.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="page/images/banner-2.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="page/images/banner-3.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="page/images/banner-4.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="page/images/banner-5.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="page/images/banner-6.png"></a>
            </div>
        </div>
    </div>
</div>
    @endsection
