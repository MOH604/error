<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="sign-error.php" method="POST">
    <input type="text" name="first" placeholder="First Name">
    <br><br>
    <input type="text" name="last" placeholder="Last Name">
    <br><br>
    <input type="text" name="email" placeholder="E-mail">
    <br><br>
    <input type="text" name="uid" placeholder="Username">
    <br> <br>
    <input type="password" name="pwd" placeholder="Password">
    <br> <br>
    <button type="submit" name="submit">Sign Up</button>   
</form>

<?php

$fullurl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullurl, "signup=empty") == true){
    echo"You did not fill in all the field!";
    exit();
}
elseif(strpos($fullurl, "signup=char") == true){
    echo"You used invalid character!";
    exit();
}
elseif(strpos($fullurl, "signup=invalidemail") == true){
    echo"You used an invalid email!";
    exit();
}
elseif(strpos($fullurl, "signup=success") == true){
    echo"You have signed up successfully!";
    exit();
}



?>

</body>
</html>