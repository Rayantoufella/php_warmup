<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Challenge 2</title>
    </head>
    <body>
        <h1>Challenge 2</h1>
        

        <form action="challenge2.php" method="POST">
            <label for="age">Enter your age : </label>
            <input type="number" name="age" placeholder="Enter your age" required><br><br>

            <input type="submit" value="Submit"><br><br>
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $age =$_POST["age"] ; 

            if( $age < 12){
                
                $price = 20 ;
                echo "The price is  : " . $price . "DH \n \n" ; 

            }else if ( $age >= 12 && $age < 18){
                $price = 30 ;
                echo "The price is : " . $price . "DH \n \n" ;
            }else if ( $age >= 60){
                $price = 30 ;
                echo "The price is : " . $price . "DH \n \n" ;
            }else{
                $price = 60 ;
                echo "The price is : " . $price . "DH \n \n" ;
            }

            if ($price == 20){
                echo " \n Special: Children's Menu included!";
            }
        }
        ?>
    </body>
</html>