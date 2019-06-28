@extends('layout_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm nhân viên
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
        <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Thông tin nhân viên</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputname1">Tên nhân viên</label>
                                <input type="text" name="name" class="form-control" id="exampleInputname1" placeholder="Tên nhân viên">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputdiachi1">Địa Chỉ</label>
                                <input type="text" name="diachi" class="form-control" id="exampleInputdiachi1" placeholder="Địa Chỉ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputphone1">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputphone1" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPcannang1">Cân nặng</label>
                                <input type="text" name="cannang" class="form-control" id="exampleInputcannang1" placeholder="Cân nặng">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputchieucao1">Chiều cao</label>
                                <input type="text" name="chieucao" class="form-control" id="exampleInputchieucao1" placeholder="Chiều cao">
                            </div>
                            <div class="form-group">
                                <label for="editor1">Mô tả chi tiết</label>
                                <textarea id="editor1" name="editor1" >
                                            This is my textarea to be replaced with CKEditor.
                                        </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thêm ảnh</label>
                                <input type="file" class="input-file uniform_on" name="img" id="exampleInputFile">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="checkbox"> Check me out
                                </label>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->

        </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->

@endsection
