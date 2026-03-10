<!DOCTYPE html>
<head>
    <title>Challenge 7</title>

</head>
<body>
    <h1>Challenge  Formulaire </h1>
    <form action="Challenge7.php" method="post">

    
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"   placeholder="Enter your name" ><br><br>

        <label for="email">Email:</label>
        <input type="text"  name="email"  placeholder="Enter your email"><br><br>

        <label for="message">Message:</label><br>
        <input type="text" id="message" name="message" rows="40" cols="500" ><br><br>

        <input type="submit" value="Submit">

        <?php 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST["name"];
            $email = $_POST["email"] ; 

            function setrouve($email , $name){
                for($i = 0; $i < strlen($email); $i++){
                    if($email[$i] == "@"){
                        echo "Email est valide <br>";
                        return;
                    }
                    
                }
                echo "Email n'est pas valide de (Mr / Mme) " . $name . "<br>";
                return ; 
            }
            
            setrouve($email ,$name);


            
            
            





        }
        ?>
</boby>