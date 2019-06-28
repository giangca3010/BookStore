<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>

<!--	Header	-->
<div id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                <h1><a href="#"><img class="img-fluid" src="images/logo.png"></a></h1>
            </div>
            <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                <form class="form-inline">
                    <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                <a class="mt-4 mr-2" href="#">giỏ hàng</a><span class="mt-3">8</span>
            </div>
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
    <div class="container">
       @yield('content')
    </div>
</div>
<!--	End Body	-->

<div id="footer-top">
    <div class="container">
        <div class="row">
            <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                <h2><a href="#"><img src="images/logo-footer.png"></a></h2>
                <p>
                    Vietpro Academy thành lập năm 2009. Chúng tôi đào tạo chuyên sâu trong 2 lĩnh vực là Lập trình Website & Mobile nhằm cung cấp cho thị trường CNTT Việt Nam những lập trình viên thực sự chất lượng, có khả năng làm việc độc lập, cũng như Team Work ở mọi môi trường đòi hỏi sự chuyên nghiệp cao.
                </p>
            </div>
            <div id="address" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Địa chỉ</h3>
                <p>B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
                <p>Số 25 Ngõ 178/71 - Tây Sơn Đống Đa - Hà Nội</p>
            </div>
            <div id="service" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Dịch vụ</h3>
                <p>Bảo hành rơi vỡ, ngấm nước Care Diamond</p>
                <p>Bảo hành Care X60 rơi vỡ ngấm nước vẫn Đổi mới</p>
            </div>
            <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Hotline</h3>
                <p>Phone Sale: (+84) 0988 550 553</p>
                <p>Email: vietpro.edu.vn@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<!--	Footer	-->
<div id="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p>
                    2018 © Vietpro Academy. All rights reserved. Developed by Vietpro Software.
                </p>
            </div>
        </div>
    </div>
</div>
<!--	End Footer	-->













</body>
</html>