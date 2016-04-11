<?php
include('connection.php');
session_start();
$id=$_SESSION['Id'];
$query = "select * from UserTable where Id='$id'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_row($result);
$firstName = $row[1];
$lastName = $row[2];
$emailAddress = $row[3];
$mobileNumber = $row[4];
$addressLineOne = $row[5];
$addressLineTwo = $row[6];
$city = $row[7];
$state = $row[8];
$country = $row[9];
$zipcode = $row[10];
?>

<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="mycs.css" type='text/css'>
        <!--<script type="text/javascript" src="js/jquery.js"></script>-->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">


        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">FORUM MANAGEMENT</a>
                    <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#"></a></li>
                            <li><a href="myprofile.php">My Profile</a></li>
                            <li  class="active"><a href="">View Profile</a></li>
                            <li><a href="changepassword.html">Change Password</a></li>
                            <li><a href="index.php?logout=1">Log Out</a></li>

                        </ul>
                        <form method="post"></form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container contentcontainer" id="topcontainer">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="toprow">
                    <!-- <h1 class="margintop">SIGN UP</h1>
                     <!--<p class="lead"> Your secret Diary</p>-->
                     <!--<p>some more information about the app.You can go into alittle more details if you want to.</p>-->

                    <p class="bold margintop"></p>
                    <form class="margintop" method="post">

                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">
                                    <label>First Name:</label>
                                    <input type="text" class="form-control" value="<?php echo $firstName; ?>" disabled>

                                </div>
                            </div>
                            <div class="col-md-6 col-offset-3">
                                <div class="form-group">

                                    <label for="LastNamesignup">LastName</label><br>
                                    <input type="text" name="LastNamesignup" id="lname" readonly="" oninvalid="validateLastName(this);"  oninput="validateLastName(this);"  required="required"  placeholder="enter ur  name"  class='form-control'>
                                    <span id="lastspan"></span>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="emailsignup">EmailAddress</label><br>
                                    <input type="email" name="emailsignup" id="mail"  readonly="" oninvalid="validateEmail(this);"  oninput="validateEmail(this);" required="required" placeholder="enter ur email"  class='form-control'>
                                    <span id="emailspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">

                                    <label for="MobileNumber">Mobile Number</label><br>
                                    <input type="text" name="MobileNumber" id="mobile"  readonly="" placeholder="enter ur mobilenumber"  class='form-control'>
                                    <span id="mobilespan"></span>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="AddressLine1">Address Line1</label><br>
                                    <input type="text" name="AddressLine1"  placeholder="enter ur email"  class='form-control'>
                                    <span id="emailspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">

                                    <label for="AddressLine2">Address Line2</label><br>
                                    <input type="text" name="AddressLine2" placeholder="enter ur mobilenumber"  class='form-control'>
                                    <span id="mobilespan"></span>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="City">City</label><br>
                                    <input type="text" name="City"  placeholder="enter ur email"  class='form-control'>
                                    <span id="emailspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">

                                    <label for="State">State</label><br>
                                    <input type="text" name="State" placeholder="enter ur mobilenumber"  class='form-control'>
                                    <span id="mobilespan"></span>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-3">

                                <div class="form-group">

                                    <label for="Country">Country</label><br>
                                    <input type="text" name="Country"  placeholder="enter ur Country"  class='form-control'>
                                    <span id="emailspan"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-offset-3">

                                    <label for="ZipCode">ZipCode</label><br>
                                    <input type="text" name="ZipCode" placeholder="enter ur ZipCode"  class='form-control'>
                                    <span id="mobilespan"></span>

                                </div>
                            </div>


                        </div>

                        <iframe width="300" height="300" src="map.php" class="pull-left"></iframe>


                        <input type="submit"  value="submit" class="btn btn-success btn-lg margintop" name='submit'>
                    </form>
                </div>

            </div>
        </div>
