<?php 
$friend = [
    "Rayan" => 20,
    "ahmad" => 300 ,
    "youssef" => 95,
    "ilyas" => 350,
    "ali" => 400
];
$total_money = 0;

foreach($friend as $name => $amount){
    $total_money += $amount;
}
echo "The total money is : " . $total_money ."<br><br>"; ;

foreach($friend as $name => $amount){
    if ($amount >= 100){
        echo  $name . " has more than 100 dollars <br>" ;
    }
}

