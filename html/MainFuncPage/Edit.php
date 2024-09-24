<?php
	// Start the session
	session_start();
?>


<html>
<head>
<title>Signup Form </title>
	<link rel="stylesheet" type="text/css" href="Edit.css">
</head>
<body>
    
		

    

<?php
    
$servername = "localhost";
$dbname = "mlpp";
$username = "root";
$password = "admin123";

$conn = new mysqli($servername, $username, $password, $dbname);
    
$FnameErr = $LnameErr = $EmailErr = $CityErr = $PasswordErr = $PNumberErr = $SJIDErr = $abcDErr = "";

$Fname = $Lname = $Email = $City = $Password = $PNumber = $SJID = $Notes = $SJP = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Fname = test_input($_POST["Fname"]);
    $Lname = test_input($_POST["Lname"]);
    $Email = test_input($_POST["Email"]);
    $City = test_input($_POST["city"]);
    $Password = test_input($_POST["Password"]);
    $PNumber = test_input($_POST["PNumber"]);
    $SJID = test_input($_POST["SJID"]);
    $SJP = test_input($_POST["SJP"]);
    $Notes = test_input($_POST["Notes"]);
    
   
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    
    $sql2 = "SELECT FirstName, lastName, Email, Password, PhoneNumber, Notes, City, SJID FROM mlpp_accounts WHERE Email = '" .$_SESSION["EMAIL"] . "';";
    
    //$sql = "SELECT FirstName WHERE Email = '" .$_SESSION["EMAIL"] . "';";
    $result = mysqli_query ($conn, $sql2);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $OFname  = $row['FirstName'];
    $OLname  = $row['lastName'];
    $OEmail = $row['Email'];
    $OPassword  = $row['Password'];
    $OPNumber  = $row['PhoneNumber'];
    $ONotes  = $row['Notes'];
    $OCity = $row['City'];
    $SJID= $row['SJID'];
    
    
?>
    

    
    <div class="loginbox" style="float:left;">
    <img src="MainFuncPics/avatar2.png" class="pic1">
        <h1>Edit Data</h1>
        <form method="post" action="Edit_Success.php">
            <p>First Name
            <input type="text" name="Fname" value="<?php echo $OFname;?>" placeholder="Enter Your First Name">
  
            </p>
            
            
            <p>Last Name
            <input type="text" name="Lname" value="<?php echo $OLname;?>" placeholder="Enter Your last Name">

            </p>
            
            
          
            
            
            <p>Password
            <input type="text" name="Password" value="<?php echo $OPassword;?>" placeholder="Enter a Password">
                
            </p>
            
            <p>Phone Number
            <input type="text" name="PNumber" value="<?php echo $OPNumber;?>" placeholder="Enter Your Phone Number">
  
            </p>
            
            
            
            <p>Notes
            <input type="text" name="Notes" value="<?php echo $ONotes;?>" placeholder="Additional Carpooling Notes (max 50 characters)">
            </p>
            

            
            <div class="form-group">
                <p>City </p>
             <br><select name="city" class="form-group" value="<?php echo $OCity;?>">
                <option value="Rocklin">Rocklin</option>
                <option value="Folsom">Folsom</option>
                <option value="Rancho Cordova">Rancho Cordova</option>
                <option value="Natomas">Natomas</option>
                <option value="Elk Grove">Elk Grove</option>
                <option value="El Dorado Hills">El Dorado Hills</option>
            </select>
            </div>
            
            
     

            <br>
            <a> Leave fields the same for no changes</a>
            <br>
            <a> Email and San Juan ID can not be changed</a>
            <br>
            
            <br><input type="submit" name="" value="Submit"> 
            
             
            <a href="../MainFuncPage/MainFunchome.php">Back</a>
            
            <br>
            <br>
            
            <a href="../MainFuncPage/DeleteCon.php">DELETE ACCOUNT</a>

        </form>
    
    </div>
    
</body>

</html>
