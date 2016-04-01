<html>
    <head>
        <?php
        include("login.php");
        ?>
    </head>
    <body>
        <form method="post">
            <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo addslashes($_POST['email']); ?>"/>
            <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo addslashes($_POST['password']); ?>"/>
            <input type="submit" name="submit" value="sign up">
        </form>
        <p>hai</p>
        <form method="post">
            <input type="email" name="loginemail" id="loginemail" value="<?php if (isset($_POST['loginemail'])) echo addslahes($_POST['loginemail']); ?>"/>
            <input type="password" name="loginpassword" value="<?php if (isset($_POST['loginpassword'])) echo addslashes($_POST['loginpassword']); ?>"/>
            <input type="submit" name="submit" value="log in">
        </form>
        <p>haihgh</p>
    </body></html>