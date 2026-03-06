<?php 
function manualReverce($text){
    $text1 = "" ;
    for($i= strlen($text)-1; $i >= 0 ; $i--){
        
        $text1 = $text1 . $text[$i] ;

    }
    return $text1 ;

}

echo manualReverce("rayan") ;  