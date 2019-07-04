@extends('layout_admin')
@section('content')

    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tất cả sách</li>
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
                        <h3 class="box-title"> Tất cả các sách </h3>
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

                    @if(Session::has('delete'))

                        <p class="alert alert-success">
                            {{Session::get('delete')}}
                        </p>
                    @endif

                    <div class="box-body table-responsive" style="overflow-x:auto;">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Tên cuốn sách</th>
                                <th>Hình ảnh cuốn sách</th>
                                <th>Mô tả cuốn sách</th>
                                <th>Nội dung cuốn sách</th>
                                <th>Trạng thái</th>              <!-- nổi bật hay không nổi bật -->
                                <th>Link lưu trữ sách</th>       <!--Link lưu trữ sách -->
                                <th colspan="2">Chức năng</th>
                            </tr>

                            @foreach($books as $key => $book)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$book->name}}</td>
                                    <td><img style="width: 150px;" src="{{URL::to($book->thumbnail)}}" alt=""></td>
                                    <td>
                                        {{$book->description}}
                                    </td>
                                    <td>
                                        {{$book->content}}
                                    </td>
                                    <td>
                                        @if(1 === $book->status) Nổi bật @else Sách mới  @endif
                                    </td>
                                    <td>{{$book->file}}</td>
                                    <td>
                                        <a href="{{URL::to('editBook/'.$book->id)}}"
                                            onclick="return confirm('Bạn có muốn chỉnh sửa thông tin cuốn sách {{$book->name}} này không ?')">
                                            <i class="fa fa-fw fa-edit"></i> Sửa
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{URL::to('/delete/'.$book->id)}}"
                                           onclick="return confirm('Bạn có muốn xoá sách {{$book->name}} này không ?')">
                                            <i class="fa fa-fw fa-trash-o"></i> Xoá
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $books->appends($_GET)->links() }}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@endsection
