<?php
	// Start the session
	session_start();
?>

<html>

<?php
$servername = "localhost";
$dbname = "mlpp";
$username = "root";
$password = "admin123";

$conn = new mysqli($servername, $username, $password, $dbname);

//if(!empty($_POST['save']))  {
$Email = $_REQUEST['Email'];
$Password = $_REQUEST['Password'];
//echo "$Email<br>";
//echo "$Password<br>";
//}
    
$query="select * from mlpp_accounts where Email='$Email' and Password='$Password'";
//echo "$query<br>";
    
$result=mysqli_query($conn, $query);

$count=mysqli_num_rows($result);
//echo "$count";

if(mysqli_num_rows($result)==1){
	$_SESSION["MLPP_AUTHENTICATED"] = "true";
    $_SESSION["EMAIL"] = $Email;
    

	header("Location: ../MainFuncPage/MainFunchome.php");
	exit();
}

else{
    header("Location: ../MainFuncPage/MainFuncFail.html");
    exit();
}


$conn->close();
?>

</html>
