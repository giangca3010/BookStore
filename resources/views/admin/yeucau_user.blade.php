@extends('layout_admin')
@section('content')

    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Yêu cầu người dùng</li>
        </ol>
        <br>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <?php
                $message = Session::get('message1');
                if ($message){
                    echo "<p style='color: red'>$message</p>";
                    Session::put('message1',null);
                }
                ?>
                <div class="box">

                    <div class="box-header">
                        <h3 class="box-title"> Tất cả các Yêu cầu người dùng </h3>
                        <div class="box-tools">
                            <div class="input-group">
                                <input type="text" name="table_search" class="form-control input-sm pull-right"
                                       style="width: 150px;" placeholder="Search"/>
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->


                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>STT</th>
                                <th>Tên khách hàng yêu cầu</th>
                                <th>Nâng cấp tài khoản vip cho kh</th>
                                <th>Chức năng</th>
                            </tr>
                            @foreach($requestCustomer as $key => $v_yeucau)

                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$v_yeucau->name_customer}}</td>
                                    <td>
                                        <form action="{{url('/update-account')}}" method="post">
                                            <input name="CustomerId" type="text" value="{{$v_yeucau->customer_id}}" hidden>
                                            <input type="submit" class="btn btn-danger" id="submit" value="Tài khoản vip">
                                        </form>

                                    </td>

                                    <td><a href="{{URL::to('/deleteCustomer/'.$v_yeucau->id)}}"
                                           onclick="return confirm('Bạn có muốn xoá yêu cầu này này không ?')"><i
                                                    class="fa fa-fw fa-trash-o"></i> Xoá</a></td>
                                </tr>

                            @endforeach
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>

        <!-- top row -->


    </section><!-- /.content -->
@endsection
