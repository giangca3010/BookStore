@extends('layout_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm cuốn sách
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
                        <h3 class="box-title">Thông tin cuốn sách</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputname1">Tên cuốn sách</label>
                                <input type="text" name="name" class="form-control" id="exampleInputname1" placeholder="Tên nhân viên">
                            </div>
                            <div class="form-group">
                                <label for="editor1">Mô tả cuốn sách</label>
                                <textarea id="editor1" name="editor1" >
                                            Đây là chỗ nhập mô tả cuốn sách.
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="editor2">Nội dung cuốn sách</label>
                                <textarea id="editor2" name="editor2" >
                                            Đây là chỗ nhập nội dung cuốn sách.
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPcannang1">Trạng thái</label>
                                <input type="text" name="cannang" class="form-control" id="exampleInputcannang1" placeholder="Cân nặng">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload fiel sách</label>
                                <input type="file" class="input-file uniform_on" name="img" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh cuốn sách</label>
                                <input type="file" class="input-file uniform_on" name="img" id="exampleInputFile">
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
