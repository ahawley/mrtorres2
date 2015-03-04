<?php
$test = 1;
$image;
date_default_timezone_set("America/New_York");
$timer = date("h:i:sa");
if(date("G")>=5 && date("G")<11){
    $time = "morning";
}
else if(date("G")<16 && date("G")>=11){
    $time = "day";
}
else if(date("G")<20 && date("G")>=16){
    $time = "evening";
}
else{
    $time = "night";
}
?>