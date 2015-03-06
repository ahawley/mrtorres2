$(document).ready(function(){
    var height = screen.height;
    var half = height/2;
    var ans = half-200;
    $(".main").css("top", (half-ans)/2);
    var width = screen.width;
    var wHalf = width/2;
    var wAns = wHalf-400;
    $(".main").css("left", (wAns));
});