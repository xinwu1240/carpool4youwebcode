



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
    header("Location: ErrorSign.php");
            //exit();
}

if (!trim($_REQUEST['Email'] ?? '')) {
    header("Location: ErrorSign.php");
            //exit();
}

if (!trim($_REQUEST['Email'] ?? '@')) {
    header("Location: ErrorSign.php");
            //exit();
}

if (!trim($_REQUEST['Password'] ?? '')) {
    header("Location: ErrorSign.php");
            //exit();
}

if (!trim($_REQUEST['PNumber'] ?? '')) {
    header("Location: ErrorSign.php");
            //exit();
}

if (!trim($_REQUEST['SJID'] ?? '')) {
    header("Location: ErrorSign.php");
            //exit();
}



        $Fname = $_REQUEST['Fname'];
        $Lname = $_REQUEST['Lname'];
        $Email = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
        $City = $_REQUEST['city'];
        $PNumber = $_REQUEST['PNumber'];
        //$Sjid = $_REQUEST['Sjid'];
        //$SJP = $_REQUEST['SJP'];
        //$abc = $_REQUEST['abc'];
        //$abc = $_REQUEST['PNumber2'];
        $Sjid = $_REQUEST['SJID'];
        
        //original: $Notes = $_REQUEST['Notes'];
        $Notes1 = substr($_REQUEST['Notes'], 0, 50);
        $Notes = str_replace("'", "''", $Notes1);
		//$Sjid = $_REQUEST['Sjid'];

		
        
        //$sql = "INSERT INTO mlpp_accounts(FirstName, lastName, Email, Password, City, PhoneNumber, Notes, SJID, SJPD) VALUES ('$Fname','$Lname','$Email','$Password','$City', '$PNumber', '$Notes', '$Sjid', '$abc')";
        $sql = "INSERT INTO mlpp_accounts(FirstName, lastName, Email, Password, City, PhoneNumber, Notes, SJID) VALUES ('$Fname','$Lname','$Email','$Password','$City', '$PNumber', '$Notes', '$Sjid')";
        // echo $sql;
        
        if ($conn->query($sql) === TRUE) {
        } else {
        	header("Location: ErrorSign.php");
		}
        
        $conn->close();
?>


<html>
<head>
<title>Account Creation Successful </title>
    <link rel="stylesheet" type="text/css" href="signedup.css">
	
</head>
<body>
    <center>
        <div class="loginbox">
        <h1>You have successfully created your account! </h1> 
   
    <form action="../Login/login-page.php">
        <input type="submit" name="" value="Login">
    
    </form>
    </div>
    </center>
    </body>
</html>
