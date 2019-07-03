(function($, window, document) {
    $(function () {
        var Register = $('#btnRegister');
        Register.on('click',function () {
            var name = $('#name');
            var email = $('#email');
            var password = $('#password');
            var repassword = $('#repassword');

            var NameLabel = $('#name-label');
            var EmailLabel = $('#email-label');
            var PassLabel = $('#pass-label');
            var RePassLabel = $('#repassword-lable');

            var ValFormSuccess = true;
            if (name.val().length === 0) {
                NameLabel.text('Không được để trống trường này');
                ValFormSuccess = false;
            }
            if (email.val().length ===0) {
                EmailLabel.text('Không được để trống trường này');
                ValFormSuccess = false;
            }
            if (password.val().length === 0){
                PassLabel.text('Không được để trống trường này');
                ValFormSuccess = false;
            }
            if (repassword.val().length === 0){
                RePassLabel.text('Không được để trống trường này');
                ValFormSuccess = false;
            }
            if ( ! ValFormSuccess) {
                return;
            }
            var data = {
                add_name : $('#name').val(),
                add_email : $('#email').val(),
                add_pass : $('#password').val(),
                add_level : $('#level').val()
            };
            let url = "/register";
            var newRegister = $.post(url,data);
            newRegister.then(function () {
                console.log(data);
                if ($.isEmptyObject(data.error)) {
                    printsuccessMsg(data.status);
                    $('#btnRegister').attr("disabled","disabled")
                    // setTimeout(function(){
                        window.location.href = "http://127.0.0.1:8000/";
                    // },2000 );

                    function printsuccessMsg () {
                        $(".print-success-msg").html('Dang ky thanh cong');
                        $(".print-success-msg").css('display','block');
                    }

                }
                // location.reload();
                // alert('thanhcong');
            });
        });
    });
    // Login



}(window.jQuery, window, document));