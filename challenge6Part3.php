<?php 
function isAdult($age){
    if ($age >= 18){
        return true ;
    }else{
        return false ;
    }

}

$age = 22;

if (isAdult($age) == true ){
    echo "Acess granted";
}else{
    echo "Acess Denied";
}
