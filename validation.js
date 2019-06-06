$(document).ready(function(){
    $(".ok").click(function(e){
        e.preventDefault();
        var login=$("#login").val();
        $(".error").remove();
        var reLog=/\S/;
        var validLogin=reLog.test($("#login").val());
        if(login.length<1 || !validLogin)
        {
            $('#login').after('<span class="error">This field is required</span>');
        }


            if($("#password").val()=="")
            {
              $('#password').after('<span class="error">This field is required</span>');
            }
            if( $("#repassword").val()=="")
            {
              $('#repassword').after('<span class="error">This field is required</span>');
            }



        if($("#password").val()!=$("#repassword").val())
        {

            $('#password').after('<span class="error">This field is required</span>');

        }

        var regEx = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
              var validEmail = regEx.test($('#email').val());
              if (!validEmail){
                $('#email').after('<span class="error">Enter a valid email</span>');
              }
        }

    );
    });
