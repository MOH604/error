<<?php

if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    //check of inputs are empty
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
        header('Location:error.php?signup=empty');
        exit();
    }
    else{
        //check if characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
            header('Location:error.php?signup=char');
            exit();
        }
        else{
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header('Location:error.php?signup=email&first=first&last=last&uid=uid');
            }
            else{
                header('Location:error.php?signup=success');
                exit();
            }
        }
    }    
}
else{
    header('Location:error.php?signup=error');
    exit();
}
