<?php

/*session_start();
 if ($_GET['logout'] == 1 AND $_SESSION['id']) {
  session_destroy();
  $message = "you have been successfully logged out!";
  } */
include("connection.php");

if (isset($_POST["login"])) {

    if ($_POST["login"] == "LogIn") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "select * from AdminTable where AdminEmail='$email' and AdminPassword='$password'";
        $resultlogin = mysqli_query($link, $query);
        if (mysqli_num_rows($resultlogin) == 1) {
            header("Location:adminmainpage.php");
            exit;
        }

        $value = "select * from UserTable where EmailId='$email' and Password='$password'";
        $result = mysqli_query($link, $value);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['EmailId'] = $email;
            header("Location:usermainpage.php");
            exit;
        } else {
            header("Location:index.php");
        }
        /* $AdminEmail = mysqli_real_escape_string($link, $_POST['email']);

          $AdminPassword = mysqli_real_escape_string($link, $_POST['password']);
          if (($AdminEmail = 'lakshmi.nadella@karmanya.co.in') && ($AdminPassword = "Lakshmi@123")) {
          session_unset();
          $_SESSION['id'] = 1;
          print_r($_SESSION);
          header("Location:adminmainpage.php");
          exit;
          } else {
          $email = $_POST["email"];
          $password = $_POST["password"];
          $query = "select * from UserTable where EmailId='$email' and Password='$password'";
          $resultlogin = mysqli_query($link, $query);
          $row1 = mysqli_fetch_array($resultlogin);
          if (!$row1) {

          $error = "Login Failed check the credentials ";
          } else {
          $_SESSION["id"] = $row1["id"];
          $message = "Login Successful";

          header("Location:usermainpage.php");
          }
          } */
    }
}

if (isset($_POST["signup"])) {
    if ($_POST["signup"] == "SignUp") {
        $error = "";
        $message = "";
        if (!$_POST['emailsignup'])
            $error.="please enter the email id <br/>";
        else if (!(filter_var($_POST['emailsignup'], FILTER_VALIDATE_EMAIL)))
            $error.="please enter valid email id <br/>";


        if (!$_POST['passwordsignup'])
            $error.="please enter the password <br/>";
        else {


            if (strlen($_POST['passwordsignup']) < 8)
                $error.="the length of pssword must be atleast 8 characters<br/>";
            if (!preg_match('`[A-Z]`', $_POST['passwordsignup']))
                $error.="password should contain atleast one Captial Letter <br/>";
        }if (!$_POST['ConfirmPassword'])
            $error.="please enter the confirm password <br/>";


        else {
            if (($_POST['passwordsignup']) != $_POST['ConfirmPassword']) {
                $error.="please enter correct password<br>";
            }
            if (!preg_match('`[A-Z]`', $_POST['ConfirmPassword']))
                $error.="password should contain atleast one Captial Letter <br/>";
        }
        if (!$_POST['MobileNumber'])
            $error.="please enter mobilenumber <br/>";

        else {
            if (strlen($_POST['MobileNumber']) != 10) {

                $error.="please enter a valid mobile number<br/>";
            }
            if (!is_numeric($_POST['MobileNumber'])) {
                $error.="please enter only numbers";
            }
        }
        if ($error)
            $error = "there were errors in your signup details<br/>" . $error;
        else {
            $emailsignup = $_POST["emailsignup"];
            $passwordsignup = $_POST["passwordsignup"];
            $ConfirmPassword = $_POST["ConfirmPassword"];
            $FirstName = $_POST['FirstNamesignup'];
            $LastName = $_POST['LastNamesignup'];
            $MobileNumber = $_POST['MobileNumber'];
            if (!($_POST["emailsignup"] == "" && !($_POST["passwordsignup"]))) {
                $queryselect = "select * from UserTable where EmailId='$emailsignup' and Password='$passwordsignup'";
                $resultselect = mysqli_query($link, $queryselect);
                $values = mysqli_num_rows($resultselect);
                if ($values) {
                    $error = "email already registered";
                } else {
                    $query1 = "insert into UserTable(FirstName,LastName,EmailId,Password,ConfirmPassword,MobileNumber) values ('$FirstName','$LastName','$emailsignup','$passwordsignup','$ConfirmPassword','$MobileNumber')";
                    $resultsignup = mysqli_query($link, $query1);

                    mysqli_query($link, $query1);
                    $message.="you were successfully signed!";
                    //$_SESSION['id'] = mysqli_insert_id($link);
                    // print_r($_SESSION);
                    //header("Location:mainpage.php");
                }
            } /* else {
              $error = "Please enter Email and password to sign Up";
              }
              if (!(isset($resultsignup))) {
              $error = "Unable to sign up <br>" . $error;
              } else if (!($error)) {
              $message = "Sign up successful " . "Please login to use your secret diary";
             */
        }
    }
}
?>