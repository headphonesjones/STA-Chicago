/**
 * Created by magicdrops on 12/13/2016.
 */
$(".navBars").click(function(){
   if($(this).hasClass("navOpen")){
       $(this).removeClass("navOpen");
       $("nav").removeClass("active");
       $("body").css("overflow","auto");

       setTimeout(function(){
           $("nav").css("display", "none");
       }, 500);
   }
   else{
    $("nav").css("display", "block");
       $(this).addClass("navOpen");

       setTimeout(function(){
           $("nav").addClass("active");
           $("body").css("overflow","hidden");
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

$(document).ready(function () {
    if(window.location.href.indexOf("my-account") > -1) {
        $(".membershipNav ul li a").removeClass("active");
        $("#myAccountNavItem a").addClass("active");
    }
    if(window.location.href.indexOf("member-directory") > -1) {
        $(".membershipNav ul li a").removeClass("active");
        $("#memberDirectoryNavItem a").addClass("active");
    }
    if(window.location.href.indexOf("event-videos") > -1) {
        $(".membershipNav ul li a").removeClass("active");
        $("#eventVideosNavItem a").addClass("active");
    }
    if(window.location.href.indexOf("member-newsletter") > -1) {
        $(".membershipNav ul li a").removeClass("active");
        $("#memberNewsletterNavItem a").addClass("active");
    }
    if(window.location.href.indexOf("operations-manual") > -1) {
        $(".membershipNav ul li a").removeClass("active");
        $("#operationsManualNavItem a").addClass("active");
    }
    if(window.location.href.indexOf("board-members") > -1) {
        $(".membershipNav ul li a").removeClass("active");
        $("#boardMembersNavItem a").addClass("active");
    }
});
