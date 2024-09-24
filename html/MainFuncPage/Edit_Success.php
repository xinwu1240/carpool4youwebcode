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

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        if (!trim($_REQUEST['Fname'] ?? '')) {
			header("Location: ErrorSign.php");
					//exit();
		}

if (!trim($_REQUEST['Lname'] ?? '')) {
    header("Location: Edit_Fail.php");
            //exit();
}



if (!trim($_REQUEST['Password'] ?? '')) {
    header("Location: Edit_Fail.php");
            //exit();
}

if (!trim($_REQUEST['PNumber'] ?? '')) {
    header("Location: Edit_Fail.php");
            //exit();
}





        $Fname = $_REQUEST['Fname'];
        $Lname = $_REQUEST['Lname'];

        $Password = $_REQUEST['Password'];
        $City = $_REQUEST['city'];
        $PNumber = $_REQUEST['PNumber'];
        //$Sjid = $_REQUEST['Sjid'];
        //$SJP = $_REQUEST['SJP'];
        //$abc = $_REQUEST['abc'];
        //$abc = $_REQUEST['PNumber2'];

        
        //original: $Notes = $_REQUEST['Notes'];
        $Notes1 = substr($_REQUEST['Notes'], 0, 50);
        $Notes = str_replace("'", "''", $Notes1);
		//$Sjid = $_REQUEST['Sjid'];

		

        //$sql = "INSERT INTO mlpp_accounts(FirstName, lastName, Email, Password, City, PhoneNumber, Notes, SJID, SJPD) VALUES ('$Fname','$Lname','$Email','$Password','$City', '$PNumber', '$Notes', '$Sjid', '$abc')";
        //$sql = "INSERT INTO mlpp_accounts(FirstName, lastName, Email, Password, City, PhoneNumber, Notes, SJID) VALUES ('$Fname','$Lname','$OEmail','$Password','$City', '$PNumber', '$Notes', '$SJID')";
        // echo $sql;
        $sql = "UPDATE mlpp_accounts SET FirstName = '$Fname', lastName = '$Lname', Password = '$Password', City = '$City', PhoneNumber = '$PNumber', Notes = '$Notes1' WHERE Email = '" . $_SESSION["EMAIL"] . "'"; 

        
        if ($conn->query($sql) === TRUE) {
            
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        $conn->close();
?>


<html>
<head>
<title>Account Edit Successful </title>
    <link rel="stylesheet" type="text/css" href="Edit_Success.css">
	
</head>
<body>
    <center>
        <div class="loginbox">
        <h1>You have successfully edited your account! </h1> 
   
    <form action="../Login/login-page.php">
        <input type="submit" name="" value="Login">
    
    </form>
    </div>
    </center>
    </body>
</html>

<?php
	session_unset();
	session_destroy();
?>
