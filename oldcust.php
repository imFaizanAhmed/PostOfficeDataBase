<html>
  <head><title>Confirm</title></head>
  <body><br><br><br>

   
   <?php
    //if (isset($_POST['submit']))
     //{
    // $db_sid = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = pc1)(PORT = 1521)) ) (CONNECT_DATA = (SID = orcl) ) )";
 $db_sid="(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-HS6RTTP.Dlink)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = faizan)
    )
  )
";	
     $db_user = "scott"; 
     $db_pass = "xyz";
     
      $con = oci_connect($db_user,$db_pass);//,$db_sid); 
      if($con) 
      { 
      } 
   else 
      { die('Could not connect to Oracle: '); 
      }
         
  $cnic=$_POST["cnic"];
      $query="select * from customer where cnic = '$cnic'";
     $a = oci_parse($con, $query);
     $r = oci_execute($a);
    while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
				echo "name:";
		  echo $row['FNAME'];
		  
	echo $row['LNAME'];
	echo "<br>";
	echo "customer id:";
		  echo $row['CUST_ID'];
	  echo "<br>";
	  echo "cnic:";
	  echo $row['CNIC'];
	  echo "<br>";
	  echo "address:";
	  echo $row['ADDRESS'];
	  echo "<br>";
	  echo "city:";
	  echo $row['CITY'];
	  echo "<br>";
	  echo "phone no:";
	  echo $row['PHONENO'];
	  echo "<br>";

		
		  }
//}

                  
?>
  </body>
</html>