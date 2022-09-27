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

<?php
    if(isset($_GET['first'])){
        $first = $_GET['first'];
        echo '<input type="text" name="first" placeholder="First Name" value ="'.$first.'" >';
    }
    else{
        echo '<input type="text" name="first" placeholder="First Name">';
    }

    if(isset($_GET['last'])){
        $last = $_GET['last'];
        echo '<input type="text" name="last" placeholder="Last Name" value ="'.$last.'" >';
    }
    else{
        echo '<input type="text" name="last" placeholder="Last Name">';
    }


?>
    <input type="text" name="email" placeholder="E-mail">
    <br><br>

<?php

if(isset($_GET['uid'])){
    $uid = $_GET['uid'];
    echo '<input type="text" name="uid" placeholder="Username" value ="'.$uid.'" >';
}
else{
    echo '<input type="text" name="uid" placeholder="Last Name">';
}

?>
    <input type="password" name="pwd" placeholder="Password">
    <br> <br>
    <button type="submit" name="submit">Sign Up</button>   
</form>

<?php
/*
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
*/

if(!isset($_GET['signup'])){
    exit();
}
else{
    $signupCheck= $_GET['signup'];

    if($signupCheck= "empty"){
        echo"You did not fill in all the field!";
        exit();
    }

    elseif($signupCheck= "char"){
        echo"You used invalid character!";
        exit();
    }

    elseif($signupCheck= "email"){
        echo"You used invalid email!";
        exit();
    }

    elseif($signupCheck= "success"){
        echo"You have signed up successfully!";
        exit();
    }
   
}



?>

</body>
</html>