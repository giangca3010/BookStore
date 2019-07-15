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
                                <label for="text1" style="font-weight: bold; font-size: 25px">Tên cuốn sách</label>
                                <span>
                                    @if ($errors->has('name'))
                                        <span class="error" style="color: red;">{{ $errors->first('name') }}</span>
                                    @endif
                                </span>
                                <input type="text" name="name" class="form-control" id="text1" placeholder="Tên cuốn sách" value="{{ old('name')}}" >
                            </div>
                            <div class="form-group">
                                <label for="text2" style="font-weight: bold; font-size: 25px">URl</label>
                                <span>
                                    @if ($errors->has('link'))
                                        <span class="error" style="color: red;">{{ $errors->first('link') }}</span>
                                    @endif
                                </span>
                                <input type="text" name="link" class="form-control" id="text2" {{old('link')}}>
                            </div>
                            <div class="form-group">
                                <label for="text2" style="font-weight: bold; font-size: 25px">Giá</label>
                                <span>
                                    @if ($errors->has('link'))
                                        <span class="error" style="color: red;">{{ $errors->first('link') }}</span>
                                    @endif
                                </span>
                                <input type="number" name="price" class="form-control" id="text3" {{old('link')}}>
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
    <script>
        // $("body").on("keyup", function() {
        //     $("#text2").val(
        //         $('#text1').val()
        //     );
        // });
        $(document).ready(function(){

            $("#text1").change(function(){
                var bla = $('#text1').val()
                var str1 = bla.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
                var str2 = str1.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
                var str3 = str2.replace(/ì|í|ị|ỉ|ĩ/g, "i");
                var str4 = str3.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
                var str5 = str4.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
                var str6 = str5.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
                var str7 = str6.replace(/đ/g, "d");
                var str8 = str7.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g, " ");
                var inhoa = str8.toLowerCase()
                var res = inhoa.replace(/ /g, "-");
                $('#text2').val(res)
            });
        });
    </script>
@endsection
