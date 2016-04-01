<?php
session_start();
error_reporting(0);
include("connection.php");
if (isset($_POST['submit']) == "sign up") {
    $error = "";

    if (!$_POST['email'])
        $error.= "<br>please enter email";
    else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $error.="<br>please enter a valid email";
    if (!$_POST['password'])
        $error.="<br>please enter ur password";
    else {
        if (strlen($_POST['password']) < 8)
            $error.="<br>please enter 8 characters";
        if (!preg_match('`[A-Z]`', $_POST['password']))
            $error.="please enter atleast one caps";
    }
    if ($error)
        echo "there were errors in ur file" . $error;
    else {

        $query = "SELECT * FROM uses WHERE email='" . mysqli_real_escape_string($link, $_POST['email']) . "'";
        $result = mysqli_query($link, $query);
        $results = mysqli_num_rows($result);
        if ($results)
            echo "that email already exists.Do u want to login?";
        else {

            $test = ($_POST['email'] . $_POST['password']);
            $msg = mysqli_real_escape_string($link, $_POST['email']);
            $query = "INSERT INTO `uses`(email,password) VALUES('$msg','$test')";
            if (mysqli_query($link, $query))
                echo "u have been signed up";
            $_SESSION['id'] = mysqli_insert_id($link);
            print_r($_SESSION);
        }
    }
}

if (isset($_POST['submit']) == "log in") {
    //$y=$_POST['loginpassword'];echo $y;
    $query = "SELECT * FROM uses WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);print_r($row);
    if($row){
        $_SESSION['id']=$row['id'];
        //redirect to login page
        print_r($_SESSION);
    }else{
        echo "could not find user with that email and password.Please try again";
    }
    
}
?>