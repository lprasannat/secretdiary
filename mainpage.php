<?php
include ('connection.php');
session_start();
$session = $_SESSION["id"];
$query = "select * from uses where id='$session'";
$resultlogin = mysqli_query($link, $query);
$row1 = mysqli_fetch_array($resultlogin);
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
                <div class="navbar-header pull-left">
                    <a class="navbar-brand" href="#">Secret Diary</a>


                </div>
                <div class="pull-right">

                    <ul class="navbar-nav nav pull-right">
                        <li><a href="index1.php?logout=1">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container contentcontainer" id="topcontainer">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="toprow">
                    <textarea class=" containertext form-control"><?php echo $row1['diary']; ?></textarea>
                </div>
            </div>

        </div>



        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--<script src="js/bootstrap.min.js"></script>-->
        <script>
            $(".contentcontainer").css("height", $(window).height());
            $(".containertext").css("height", $(window).height() - 120);
            $("textarea").keyup(function () {
                $.post("updatediary.php", {diary: $("textarea").val()});
            });

        </script>

    </body>
</html>
