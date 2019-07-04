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
{{--        @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--        @endif--}}
        <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Thông tin cuốn sách</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="{{url('CreateBook')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputname1" style="font-weight: bold; font-size: 25px">Tên cuốn sách</label>
                                <span>
                                    @if ($errors->has('name'))
                                        <span class="error" style="color: red;">{{ $errors->first('name') }}</span>
                                    @endif
                                </span>
                                <input type="text" name="name" class="form-control" id="exampleInputname1" placeholder="Tên cuốn sách" value="{{ old('name')}}" >
                            </div>
                            <div class="form-group">
                                <label for="editor1" style="font-weight: bold; font-size: 25px">Mô tả cuốn sách</label>
                                <span>
                                    @if ($errors->has('description'))
                                        <span class="error" style="color: red;">{{ $errors->first('description') }}</span>
                                    @endif
                                </span>
                                <textarea id="editor1" name="description" >{{ old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="editor2" style="font-weight: bold; font-size: 25px">Nội dung cuốn sách</label>
                                <span>
                                    @if ($errors->has('content'))
                                        <span class="error" style="color: red;">{{ $errors->first('content') }}</span>
                                    @endif
                                </span>
                                <textarea id="editor2" name="content" >{{ old('content')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPcannang1" style="font-weight: bold; font-size: 25px">Trạng thái</label>
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="status" value="1" checked>
                                        <span> Nổi bật </span>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label class="radio inline">
                                        <input type="radio" name="status" value="2">
                                        <span> Sách mới </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile" style="font-weight: bold; font-size: 25px">Upload fiel sách</label>
                                <span>
                                    @if ($errors->has('fileBook'))
                                        <span class="error" style="color: red;" >{{ $errors->first('fileBook') }}</span>
                                    @endif
                                </span>
                                <input type="file" class="input-file uniform_on" name="fileBook" id="exampleInputFile" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile" style="font-weight: bold; font-size: 25px">Hình ảnh cuốn sách</label>
                                <span>
                                    @if ($errors->has('thumbnail'))
                                        <span class="error" style="color: red;">{{ $errors->first('thumbnail') }}</span>
                                    @endif
                                </span>
                                <input type="file" class="input-file uniform_on" name="thumbnail" multiple id="exampleInputFile">
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
