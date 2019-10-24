$(document).ready(function(){
    $('#carnet').on('blur',function(){
        $('#result-username').html('<img src="images/loader.gif"/>').fadeOut(1000);

        var NoCarnet = $(this).val();
        var datastring = 'carnet='+NoCarnet;

        $.ajax({
            type: "POST",
            url: "validaciones.php",
            data: datastring,
            success: function(data){
                $('#result-username').fadeIn(1000).html(data);
            }
        });
    });


});
