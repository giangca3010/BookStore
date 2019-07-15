<!DOCTYPE html>
<html>
<head>
    <title>How Send an Email in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
        .has-error
        {
            border-color:#cc0000;
            background-color:#ffff99;
        }
    </style>
</head>
<body>
<br />
<br />
<br />

<div class="container box">
    <div class="alert alert-danger print-error-msg" style="display:none">
        {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
        <ul></ul>
    </div>
    <div class="alert alert-success print-error-msg1"style="display:none" >
        <ul></ul>
    </div>

    <form >
        {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
            {{--@if(Session::has('success'))--}}
                {{--<div class="alert alert-danger">--}}
                    {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                    {{--<strong>{{Session::get('success')}}--}}
                    {{--</strong>--}}
                {{--</div>--}}
            {{--@endif--}}

    {{csrf_field()}}
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" {{old('name')}} class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" {{old('email')}} class="form-control">
        </div>
        <div class="form-group">
            <label>message</label>
            <input type="text" name="message" {{old('message')}} class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" id="submit" name="submit" class="btn btn-danger">
        </div>


    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#submit").click(function(e){
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var message = $("input[name='message']").val();


            $.ajax({
                url: "/sendemail/send",
                type:'POST',
                data: {_token:_token, name:name, email:email, message:message},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        $('#submit').attr("disabled","disabled");
                        $(".print-error-msg").css('display','none');
                        printErrorMsg1(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                    // if (data.code === 1){
                    //     $('.print-error-msg1').css('display','block').html(data.success)
                    // }
                    // if(data.code !== 1){
                    //     $('.print-error-msg').css('display','block').html(data.error)
                    // }
                }
            });


        });
        function printErrorMsg1() {
            $(".print-error-msg1").html('Gửi email thành công');
            $(".print-error-msg1").css('display','block');
        }


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });


</script>
</body>
</html>