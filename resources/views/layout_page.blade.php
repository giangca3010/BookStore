<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('page/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('page/css/home.css')}}">
    <script src="{{asset('page/js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('page/js/bootstrap.js')}}"></script>
</head>
<body>

<!--	Header	-->
<div id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                <h1><a href="{{URL('/')}}"><img class="img-fluid" src="{{asset('page/images/logo.png')}}"></a></h1>
            </div>
            <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                <form class="form-inline">
                    <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                </form>
            </div>

            @if(session()->has('user'))
                <button  class="btn btn-success info">
                    <a style="color: white;text-decoration: none" href="{{url('/detail_user')}}">{{ session('user')->name_customer }}</a>
                </button>
                <button class="btn btn primary logout"><a href="{{ URL::route('logout') }}">Đăng xuất</a></button>

            @else
                <button type="button"  class="btn btn-danger register" data-toggle="modal" data-target="#register">
                    Đăng ký
                </button>
                &nbsp;
                <button type="button"  class="btn btn-danger login" data-toggle="modal" data-target="#login">
                    Đăng nhập
                </button>
            @endif
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
                <h2><a href="#"><img src="{{asset('page/images/logo-footer.png')}}"></a></h2>
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
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng ký</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('register')}}" method="post">
                    <div class="alert alert-danger error1 errorRegister" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p style="color:red; display:none;" class="error1 errorRegister"></p>
                    </div>
                    <div class="form-group">
                        <label for="name">Họ và Tên</label>
                        <input type="text" class="form-control" id="name">
                        <p style="color:red; display: none" class="error1 errorName"></p>
                        <p class="text-danger" id="name-lable"></p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                        <p style="color:red; display: none" class="error1 errorEmail"></p>
                        <p class="text-danger" id="email-label"></p>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input type="password" class="form-control" id="password">
                        <p style="color:red; display: none" class="error1 errorPassword"></p>
                        <p class="text-danger" id="pass-label"></p>

                    </div>
                    <div class="form-group">
                        <label for="pwd1">Nhập lại mật khẩu :</label>
                        <input type="password" class="form-control" id="repassword">
                        <p style="color:red; display: none" class="error1 errorConfirmPass"></p>
                        <p class="text-danger" id="repassword-lable"></p>

                    </div>
                    <div class="form-group" hidden>
                        <select  class="form-control" name="level" id="level">
                            <option value="1">Tai khoan thuong</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
                        <button id="btnRegister" type="button" class="btn btn-primary">Đăng ký</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--modal-login-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="alert alert-danger error errorLogin" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p style="color:red; display:none;" class="error errorLogin"></p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email1">
                        <p style="color:red; display: none" class="error errorEmail"></p>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="password1">
                        <p style="color:red; display: none" class="error errorPassword"></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="btnLogin" type="button" class="btn btn-primary">Đăng nhập</button>
                    </div>
                    @if(Session::has('error'))
                        <span class="" style="color: red;">{{Session::get('error')}}</span>
                    @endif
                </form>
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

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip1"]').tooltip();
    });
</script>
<script src="{{asset('js/book.js')}}"></script>
<script src="{{asset('js/login.js')}}"></script>
{{--<script src="/js/register.js"></script>--}}
</body>
</html>
