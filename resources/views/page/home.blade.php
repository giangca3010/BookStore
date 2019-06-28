@extends('layout_admin')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <nav>
            <div id="menu" class="collapse navbar-collapse">
                <ul>
                    <li class="menu-item"><a href="#">iPhone</a></li>
                    <li class="menu-item"><a href="#">Samsung</a></li>
                    <li class="menu-item"><a href="#">HTC</a></li>
                    <li class="menu-item"><a href="#">Nokia</a></li>
                    <li class="menu-item"><a href="#">Sony</a></li>
                    <li class="menu-item"><a href="#">Blackberry</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="row">
    <div id="main" class="col-lg-8 col-md-12 col-sm-12">
        <!--	Slider	-->
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
                    <img src="images/slide-1.png" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img src="images/slide-2.png" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img src="images/slide-3.png" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img src="images/slide-4.png" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img src="images/slide-5.png" alt="Vietpro Academy">
                </div>
                <div class="carousel-item">
                    <img src="images/slide-6.png" alt="Vietpro Academy">
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
        <!--	End Slider	-->

        <!--	Feature Product	-->
        <div class="products">
            <h3>Sản phẩm nổi bật</h3>
            <div class="product-list card-deck">
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-1.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-2.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-3.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
            </div>
            <div class="product-list card-deck">
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-4.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-5.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-6.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
            </div>
        </div>
        <!--	End Feature Product	-->


        <!--	Latest Product	-->
        <div class="products">
            <h3>Sản phẩm mới</h3>
            <div class="product-list card-deck">
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-7.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-8.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-9.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
            </div>
            <div class="product-list card-deck">
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-10.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-11.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
                <div class="product-item card text-center">
                    <a href="#"><img src="images/product-12.png"></a>
                    <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                    <p>Giá Bán: <span>32.990.000đ</span></p>
                </div>
            </div>
        </div>
        <!--	End Latest Product	-->

    </div>

    <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
        <div id="banner">
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="images/banner-1.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="images/banner-2.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="images/banner-3.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="images/banner-4.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="images/banner-5.png"></a>
            </div>
            <div class="banner-item">
                <a href="#"><img class="img-fluid" src="images/banner-6.png"></a>
            </div>
        </div>
    </div>
</div>
    @endsection