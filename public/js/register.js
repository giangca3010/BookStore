$(function() {
    $('#btnRegister').click(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'url' : '/register',
            'data': {
                'name' : $('#name').val(),
                'email' : $('#email').val(),
                'password' : $('#password').val(),
                'level' : $('#level').val()
            },
            'type' : 'POST',
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.name != undefined) {
                        $('.errorName').show().text(data.message.name[0]);
                    }
                    if (data.message.email != undefined) {
                        $('.errorEmail').show().text(data.message.email[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.repassword != undefined) {
                        $('.errorConfirmPass').show().text(data.message.repassword[0]);
                    }
                    if (data.message.errorRegister != undefined) {
                        $('.errorRegister').show().text(data.message.errorRegister[0]);
                    }
                } else {
                    var domain = window.location.hostname;
                    window.location.href = "/detail_user"
                }
            }
        });
    })
});
