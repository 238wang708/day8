<?php
$b=52;
$arr=array();
for ($i=1;;$i++) { 
    
    if(a($i)==1){
     $arr[].=$i;
    }
    if(count($arr)==$b){
        break;
    }
}echo $arr[$b-1];

function a($sum){
    $num=$sum;
    if($sum==1){
        return $sum;
    }
    while ($sum%2==0) {
        $sum=$sum/2; 
    }
    while ($sum%3==0) {
        $sum=$sum/3;
    }
    while ($sum%5==0) {
        $sum=$sum/5;
    }
    return $sum;
}

 
 

?>