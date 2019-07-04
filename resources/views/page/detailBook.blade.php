@extends('layout_page')
@section('content')
<div class="row">
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
<hr>
        <!--	List Product	-->
        <div id="product">


            <div id="product-head" class="row">
                @foreach($Detailbook as $key => $BookDetail)
                @endforeach
{{--                <input type="hidden" name="id" id="id" value="{{$BookDetail->id}}">--}}
                <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
                    <img style="width: 100%;" src="{{URL::to($BookDetail->thumbnail)}}">
                </div>
                <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
                    <h1>{{$BookDetail->name}}</h1>
                    <ul>
                        <li><span></span> 12 Tháng</li>
                        <li><span>Đi kèm:</span> Hộp, sách, sạc, cáp, tai nghe</li>
                        <li><span>Tình trạng:</span> Máy Mới 100%</li>
                        <li><span>Khuyến Mại:</span> Dán Màn Hình 3 lớp</li>
                        <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                        <li id="price-number">22.990.000đ</li>
                        <li id="status">Còn hàng</li>
                    </ul>
                    <div id="add-cart"><a href="{{URL::to($BookDetail->file)}}" target="_blank">Tải xuống</a></div>
                </div>
            </div>
            <div id="product-body" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>Mô tả về sách</h3>
                    {!! $BookDetail->content !!}
                </div>
            </div>

            <!--	Comment	-->
            <div id="comment" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>Bình luận sản phẩm</h3>
                    <form method="post">
                        <div class="form-group">
                            <label>Tên:</label>
                            <input name="comm_name" required type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input name="comm_mail" required type="email" class="form-control" id="pwd">
                        </div>
                        <div class="form-group">
                            <label>Nội dung:</label>
                            <textarea name="comm_details" required rows="8" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="sbm" class="btn btn-primary">Gửi</button>
                    </form>
                </div>
            </div>
            <!--	End Comment	-->

            <!--	Comments List	-->
            <div id="comments-list" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="comment-item">
                        <ul>
                            <li><b>Nguyễn Văn A</b></li>
                            <li>2018-01-03 20:40:10</li>
                            <li>
                                <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="comment-item">
                        <ul>
                            <li><b>Nguyễn Văn A</b></li>
                            <li>2018-01-03 20:40:10</li>
                            <li>
                                <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="comment-item">
                        <ul>
                            <li><b>Nguyễn Văn A</b></li>
                            <li>2018-01-03 20:40:10</li>
                            <li>
                                <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="comment-item">
                        <ul>
                            <li><b>Nguyễn Văn A</b></li>
                            <li>2018-01-03 20:40:10</li>
                            <li>
                                <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="comment-item">
                        <ul>
                            <li><b>Nguyễn Văn A</b></li>
                            <li>2018-01-03 20:40:10</li>
                            <li>
                                <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--	End Comments List	-->
        </div>
        <!--	End Product	-->
        <div id="pagination">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
            </ul>
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
