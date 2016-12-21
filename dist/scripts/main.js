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

// https://github.com/nathancahill/skeleton-tabs

$(function() {
    $('ul.tab-nav li a.button').click(function() {
        var href = $(this).attr('href');

        $('li a.active.button', $(this).parent().parent()).removeClass('active');
        $(this).addClass('active');

        $('.tab-pane.active', $(href).parent()).removeClass('active');
        $(href).addClass('active');

        return false;
    });
});
