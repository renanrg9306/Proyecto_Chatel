require(['jquery'], function($) {
  $(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 200){
            $('#scroll').fadeIn();
        }else{
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
  });
});