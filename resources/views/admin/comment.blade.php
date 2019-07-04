@extends('layout_admin')
@section('content')

    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Comment Khách hàng</li>
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
                        <h3 class="box-title"> Tất cả các comment khách hàng </h3>
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

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>STT</th>
                                <th>Tên khách hàng </th>
                                <th>Sách comment </th>
                                <th>Nội dung comment</th>
                                <th>Chức năng</th>

                            </tr>
                            @foreach($comment as  $key => $v_comment)
                                <tr>
                                    <td>{{$key +1 }}</td>
                                    <td>{{$v_comment->name_customer}}</td>
                                    <td>{{$v_comment->name}}</td>
                                    <td>{{$v_comment->content}}</td>
                                    <td><a href="{{url('/delete-comment/'.$v_comment->id)}}" onclick="return confirm('Bạn có muốn xoá comment  của {{$v_comment->name_customer}} này này không ?')">
                                            <i class="fa fa-fw fa-trash-o"></i> Xoá</a>
                                    </td>
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
