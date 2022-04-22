<?php
$N=10;
$sp=$N;
$star=1;
$counter=$N*2;
while($counter>-2){
    if($counter>$N){
        print(str_repeat("&nbsp&nbsp",$sp));
        print(str_repeat("*",$star)); 
        print("<br>");
        $sp--;
        $star+=2;
    }
    else if($counter==$N) {
        print(str_repeat("*",$N*2+1));
        print("<br>");
        $counter--;
    }
    else if($counter>-2 && $counter<$N){
        $star-=2;
        $sp++;
        print(str_repeat("&nbsp&nbsp",$sp));
        print(str_repeat("*",$star)); 
        print("<br>");
        }
    $counter--; 
}
?>