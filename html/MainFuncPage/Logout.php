<?php
session_start();
?>

<html>
<head>
<title>Logout </title>
    <link rel="stylesheet" type="text/css" href="Logout.css">
	
</head>

<?php
	session_unset();
	session_destroy();
?>

<body>
    <center>
        <div class="loginbox">
        <h1>You have successfully logged out </h1> 
   
    <form action="../Login/login-page.php">
        <input type="submit" name="" value="Login">
    
    </form>
    </div>
    </center>
    </body>
</html>

