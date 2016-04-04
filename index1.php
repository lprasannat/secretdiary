<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        include("submit.php");
        ?>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type='text/css' href="mycs.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Secret Diary</a>
                    <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse">


                    <form  class="navbar-form navbar-right" method="post">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email"   class="form-control" placeholder="email"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password"/>
                        </div>
                        <input type="submit" class="btn btn-success" value="LogIn"  name="login">
                    </form>
                </div>
            </div>
        </div>
        <div class="container contentcontainer" id="topcontainer">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="toprow">
                    <h1 class="margintop">Secret diary</h1>
                    <p class="lead"> Your secret Diary</p>
                    <!--<p>some more information about the app.You can go into alittle more details if you want to.</p>-->
                    <?php
                    if (isset($error)) {
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                    if (isset($message)) {
                        echo '<div class="alert alert-success">' . $message . '</div>';
                    }
                    ?>

                    <p class="bold margintop">Interested?Join our secret diary</p>
                    <form class="margintop" method="post">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="emailsignup" placeholder="enter ur mail"  value="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control"  name="passwordsignup" placeholder="enter ur password"  value=''>
                        </div>
                        <input type="submit"  value="SignUp" class="btn btn-success btn-lg margintop" name='signup'>


                    </form>
                </div>
            </div>

        </div>



        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--<script src="js/bootstrap.min.js"></script>-->
        <script>
            $(".contentcontainer").css("min-height", $(window).height());
        </script>

    </body>
</html>
