<?php
	// Start the session
	session_start();
?>

<html>
   	<?php
		$auth = $_SESSION["MLPP_AUTHENTICATED"];
		if($auth != "true"){
	?>
			<script type="text/javascript"> 
				window.location.href="../Login/login-page.php";
			</script> 
   <?php
		}

        $servername = "localhost";
        $dbname = "mlpp";
        $username = "root";
        $password = "admin123";

        $conn = new mysqli($servername, $username, $password, $dbname);
    ?>
    
<style>
        .form-group{
            text-align: center;
        }
        table{ 
            position: absolute;
            width:1150px; 
            text-align:center; 
            table-layout:fixed; 
            top: 46%;
            left: 10%;
            
        }
        table, th, td{
            padding: 20px;
        
            color: white;
            font-size: 23px;
            font-family: sans-serif;
            margin: 40px;
        }

    
    
    td{
        text-align: center;
    }
    tr1{
        font-size: 40px;
       
    }
    </style>
    
    <div class="background">
        <div class="menu1"> </div>
        <div class="menu">
            <ul>
                <li><a href="Edit.php">Edit Account</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
    
        </div>
    </div>
    
    
    <link rel="stylesheet" type="text/css" href="MainFunchome.css">
    
    <form id="form" name="form" method="post">
        <div class="form-group">
            <center> <font size="10">Select your city: </font></center>

             <br>
            <select name="City" class="menu2"> 
                
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
            
            <input type="submit" name="Submit" value="Select" class="button" />
        </div>
    </form>


<?php
    if(isset($_POST['City'])) {
	 
	  $selected = htmlspecialchars($_POST['City']);
      //echo $selected;
    
	  $sql2 = "SELECT FirstName, lastName, Email, PhoneNumber, Notes FROM mlpp_accounts WHERE City = '" . $selected . "';";
      //echo $sql2;
	  
	  $people = mysqli_query ($conn, $sql2); // array

      
        
      echo "<table><tr1><th><font size=\"10\" color=\"#00a6ab\">Name</font></th><th><font size=\"10\" color=\"#00a6ab\"> Email </font></th>  <th><font size=\"10\" color=\"#00a6ab\">Phone</font></th>  <th><font size=\"10\" color=\"#00a6ab\">Notes</font></th> </tr1>";
      while ($person = mysqli_fetch_array($people, MYSQLI_ASSOC)):;
            echo "<tr><th>" . $person['FirstName'] . " " . $person['lastName'] ."</th>"; // <tr><th>Col1</th></th>Col2</th></tr> " . 

           
  
            echo "<th>" . $person['Email'] . "</th>";

            echo "<th>" . $person['PhoneNumber'] . "</th>";
            echo "<th>" . $person['Notes'] . "</th></tr>";
        
            //echo $person['FirstName'];
      endwhile;
      echo "</table>";
    
	  //$people1 = mysqli_fetch_array($people, MYSQLI_ASSOC);
    
	  //echo "<br>" . $people1 . " is living in " . $selected . ".";
	}
?>
    
</html>
