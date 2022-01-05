<?php 
error_reporting(-1);
// Два  натуральных  числа  называют  дружественными,  если  каждое  из них равно сумме всех делителей друга. 
//Найти все пары дружественных чисел, лежащих в диапазоне от N до M.
$n = 1;
$m = 1000;
$check = 0;
for($i = $n; $i <= $m; $i++){
    if($n <= isfriendlynumber($i) && isfriendlynumber($i) <= $m){
        if($i == $check){
            continue;
        }else{
            echo($i." - ".isfriendlynumber($i)."<br>");
            $check = isfriendlynumber($i);
        }
    }
}

    
  
function isfriendlynumber($n){
    $res = 0;
    $res2 = 0;
    for($i = 1; $i < $n; $i++){
        if($n % $i == 0){
            $num = $i;
            $res = $res + $num;
        }
    }
    for($i = 1; $i < $res; $i++){
        if($res % $i == 0){
            $num = $i;
            $res2 = $res2 + $num;
        }
    }
    if($res != $n){
        if($res2 == $n){
            return $res;
        }else{
            return false;
        }
    }
   
}

