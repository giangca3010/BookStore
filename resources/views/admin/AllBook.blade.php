@extends('layout_admin')
@section('content')

    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tất cả công việc</li>
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
                        <h3 class="box-title"> Tất cả các công việc </h3>
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
                                <th>Tên cuốn sách</th>
                                <th>Hình ảnh cuốn sách</th>
                                <th>Mô tả cuốn sách</th>
                                <th>Nội dung cuốn sách</th>
                                <th>Trạng thái</th>     <!-- nổi bật hay không nổi bật -->
                                <th>Tải sách</th>       <!--file tải s -->
                                <th colspan="2">Chức năng</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Về nhà đi con</td>
                                <td>Hình ảnh</td>
                                <td>Cuốn sách nói về các con đi làm</td>
                                <td>Mô tả cuốn sách chi tiết ( ví dụ cho đọc 1 phần chương 1)</td>
                                <td>bán chạy</td>
                                <td><span class=" label label-success">Đã làm</span></td>
                                <td><a href="#"><i class="fa fa-fw fa-edit"></i> Sửa</a></td>
                                <td><a href="#"><i class="fa fa-fw fa-trash-o"></i> Xoá</a></td>
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
