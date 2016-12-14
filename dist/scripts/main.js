/**
 * Created by magicdrops on 12/13/2016.
 */
$(".navBars").click(function(){
   if($(this).hasClass("navOpen")){
       $(this).removeClass("navOpen");
       $("nav").removeClass("active");

       setTimeout(function(){
           $("nav").css("display", "none");
       }, 500);
   }
   else{
    $("nav").css("display", "block");
       $(this).addClass("navOpen");

       setTimeout(function(){
           $("nav").addClass("active");
       }, 100);
   }
});
