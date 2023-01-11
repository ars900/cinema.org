$("#login").click(function (){
    var username = $('#username').val();
    var pass = $('#pass').val();


    $.ajax({
        url:'login',
        method:'post',
        data:{'username': username,pass:pass},
    }).done(function(res) {
            if(res.length < 24){
                window.location.assign("http://cinema.org/admin/home");
            }
                else{
                    $("#admin_empty").text(res);
                }
     });
})

