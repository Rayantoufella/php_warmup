<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

    </head>
    <body>
        <form action="index.php" method="post">

            <label for="tea" >Enter the price of tea:</label><br><br>
            <input type="text" name="tea" placeholder="Enter the price of tea" required><br><br>

            <label for="student">are you student ? </label>
            <input type="checkbox" name="student" value="yes" ><br><br>

            <label for="count_tea">How many teas do you want?</label><br><br>
            <input type="number" name="count_tea" placeholder="Enter the number of teas" required><br><br>

            <input type="submit" value="Calculate">
     
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //Declaration du Variables .
            $tea_price = $_POST["tea"];
            $is_student = isset($_POST["student"]) && $_POST["student"] === "yes";
            $count_tea = $_POST["count_tea"];
            //=====================================

            $final_price = $tea_price * $count_tea;
            if ($is_student) {
                $final_priceS = $final_price * 0.8;
                

                if ($count_tea >= 5) {
    
                    $final_price1 = $final_priceS - $count_tea;
                    echo "The price of tea is :" . $final_price1 ;
                }else{
                    echo "The price of tea is: " . $final_priceS ;
                }
                
            }
            else {
                echo "The price of tea is: " . $tea_price * $count_tea ;
            }
        }
        ?>
</html>