<?php
session_start();
$id=$_SESSION["Id"];
$query="select * from UserTable where Id='$id'";
$result=mysqli_query($link, $query);
$row=mysqli_fetch_row($result);
$firstName=$row[1];
$lastName=$row[2];
$emailAddress=$row[3];
$mobileNumber=$row[4];
$addressLineOne=$row[5];
$addressLineTwo=$row[6];
$city=$row[7];
$state=$row[8];
$country=$row[9];
$zipcode=$row[10];
if(isset($_POST["submit"])){
    if($_POST["submit"]=="SUBMIT"){
    $editAddressOne=$_POST["AddressLine1"];
    $editAddressTwo=$_POST["AddressLine2"];
    $editCity=$_POST["City"];
    $editState=$_POST["State"];
    $editCountry=$_POST["Country"];
    $editZipCode=$_POST["ZipCode"];
    $queryedit="update UserTable set AddressLine1='$editAddressOne', AddressLine2='$editAddressTwo', City='$editCity', State='$editState', Country='$editCountry', ZipCode='$editZipCode' where Id='$id'";
    $editResult=mysqli_query($link, $queryedit);
    if($editResult){
        
        $message="Successfully Updated the Profile";
    }
    else{
        $error="Profile could not be Updated Please try again";
    }
}}
?>