new WOW().init();
$(document).ready(function(){
  $(".dropdown2").click(function(){
    $(".menu").toggleClass("showMenu");
      $(".menu > li").click(function(){
        $(".dropdown2 > p").html($(this).html());
          $(".menu").removeClass("showMenu");
      });
  });
  
});