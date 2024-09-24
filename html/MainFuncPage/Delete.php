<?php
	// Start the session
	session_start();
?>



<?php
        //echo "Fname = $Fname\n"; 
        $servername = "localhost";
        $dbname = "mlpp";
        $username = "root";
        $password = "admin123";
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql2 = "DELETE FROM mlpp_accounts WHERE Email = '" . $_SESSION["EMAIL"] . "'"; 

        
        if ($conn->query($sql2) === TRUE) {
            
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        $conn->close();
?>

<?php
	session_unset();
	session_destroy();
?>


<html>
<head>
<title>Account Deleted  </title>
    <link rel="stylesheet" type="text/css" href="Delete.css">
	
</head>
<body>
    <center>
        <div class="loginbox">
        <h1>You have successfully deleted your account </h1> 
            <h2>You may go to the sign up page to make a new account</h2>
            
            <form action="../SignUp/signup-page.php">
        <input type="submit" name="" value="Sign Up">
    
    </form>
   

    </div>
    </center>
    </body>
</html>

