
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SECRET DAIRY</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .navbar-brand
            {
                font-size:25px;
            }

            #topContainer
            {
                background-image: url("bt_img.jpg");
                height:100px;
                width: 100%;
                background-size: cover;
            }


            #content
            {
                color:pink;
                margin-top:100px;
            }
            .center{
                text-align: center;

            }
            #content h1{
                font-size: 300%;
                color: darkblue;
            }
            .marginTop{
                margin: 30px;
            }
            #footer
            {
                background-color: black;
                padding-top:70px;
                width:100%;
            }
            .marginBottom{
                margin: 30px;
            }


            .appstoreImage {
                width:250px;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-default">

            <div class="container">

                <div class="navbar-header">

                    <a href="" class="navbar-brand">Secert Dairy</a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>


                    </button>

                </div>

                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav">

                        <li class="active"><a href="#home">Home</a></li>

                        <li><a href="#about">About</a></li>

                        <li><a href="#download">Download</a></li>

                    </ul>


                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="EmailId"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="password"/>
                        </div>
                        <button class="btn btn-success" >Log in</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="container contentContainer" id="topContainer">

            <div class="row">
                <div class="col-md-6 col-md-offset-3 " id="content">
                    <h1 class="center">Secret Dairy</h1> 
                    <p class="lead">With You wherever you go!</p>
                    <form class="marginTop">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" placeholder="Email Id"/>
                        </div>
                        <input type="submit" class="btn btn-success marginTop"/>
                    </form>


                </div>

            </div>
        </div>
       
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>

            $(".contentContainer").css("min-height", $(window).height());
        </script>
    </body>
</html>
