$(document).ready(function(){
    $('#register-btn').click(function(){
        
        var data={
            username: $('#username').val(),
            password: $('#password').val(),
            email: $('#email').val(),
            fullname: $('#fullname').val()
        };

        $.ajax({
            url:'register.php',
            type: 'post',
            dataType: 'json',
            data: data,
            success: function(result)
            {
                if(result.hasOwnProperty('error') && result.error=='1')
                {
                    var html="";
                    $.each(result,function(key,item)
                    {
                        if(key != 'error')
                        {
                            html+='<li>'+item+'</li>';
                        }
                    }
                    );
                    $('.alert-danger').html(html).removeClass('d-none');
                    $('.alert-success').addClass('d-none');
                }
                else{
                    $('.alert-danger').addClass('d-none');
                    $('.alert-success').html('You have successfully signed up').removeClass('d-none');
                    setTimeout(function(){
                        $('#myModal').modal('d-none');
                    },5000);
                }
            }
        });
    });
    $('#myModal').on('hidden.bs.modal',function(){
        $('.alert-danger').addClass('d-none');
        $('.alert-success').addClass('d-none');
    });
});