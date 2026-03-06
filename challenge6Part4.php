<?php 
function multiplyNumber($a, $b){
    if(is_numeric($a) && is_numeric($b)){
        return $a * $b ; 
    }else{
        return "Error: Invalid Input" ;
    }
}

echo multiplyNumber(5,10) . "<br>" ;
echo multiplyNumber(5,"apple") . "<br>" ;
