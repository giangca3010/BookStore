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
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Quyền hiện tại của khách hàng</th>
                                <th>Quyền yêu cầu của khách</th>
                                <th colspan="2">Chức năng</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Thanh Vm</td>
                                <td>a@gmail.com</td>
                                <td>tải free</td>
                                <td>Tải tất cả sách</td>
                                <td><a href="#"><i class="fa fa-fw fa-edit"></i> Sửa</a></td>
                                <!--<td><span class="label label-success">Approved</span></td>-->
                            </tr>
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
