
<html>
<head>
<title>Signup Form </title>
	<link rel="stylesheet" type="text/css" href="signup-page.css">
</head>
<body>

<?php

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
?>
    
    <div class="loginbox">
    <img src="signup-images/avatar2.png" class="pic1">
        <h1>Create an Account</h1>
        <form method="post" action="SignedUp.php">
            <p>First Name
            <input type="text" name="Fname" value="<?php echo $Fname;?>" placeholder="Enter Your First Name">
  
            </p>
            
            
            <p>Last Name
            <input type="text" name="Lname" value="<?php echo $Lname;?>" placeholder="Enter Your last Name">

            </p>
            
            
            <p>Email
            <input type="text" name="Email" value="<?php echo $Email;?>" placeholder="Enter Your Email Address">

            </p>
            
            
            <p>Password
            <input type="password" name="Password" value="<?php echo $Password;?>" placeholder="Enter a Password">
                
            </p>
            
            <p>Phone Number
            <input type="text" name="PNumber" value="<?php echo $PNumber;?>" placeholder="Enter Your Phone Number">
  
            </p>
            
            <p>San Juan Student ID*
            	<input type="text" name="SJID" value="<?php echo $SJID;?>" placeholder="Only for student enrollment confirmation">
            </p>
            
           
            

            
            <p>Notes
            <input type="text" name="Notes" value="<?php echo $Notes;?>" placeholder="Additional Carpooling Notes (max 50 characters)">
            </p>
            

            
            <div class="form-group">
                <p>Select Your City </p>
             <br><select name="city" class="form-group">
                <option value="Rocklin">Rocklin</option>
                <option value="Folsom">Folsom</option>
                <option value="Rancho Cordova">Rancho Cordova</option>
                <option value="Natomas">Natomas</option>
                <option value="Elk Grove">Elk Grove</option>
                <option value="El Dorado Hills">El Dorado Hills</option>
                <option value="Citrus Heights">Citrus Heights</option>
                <option value="Gold River">Gold River</option>
                <option value="Granite Bay">Granite Bay</option>
                <option value="Carmichael">Carmichael</option>
                <option value="Fair Oaks">Fair Oaks</option>
                <option value="Roseville">Roseville</option>
            </select>
            </div>
            
            
     
            
            <br><input type="submit" name="" value="Submit"> 
            <a href="../Login/login-page.php">Already have an account?</a>
            <br> 
            <br>
            <b> *Disclaimer: The San Juan Student ID is the only form of student verification. Use at your own risk.</b>
        </form>
    

    </div>

</body>

</html>
