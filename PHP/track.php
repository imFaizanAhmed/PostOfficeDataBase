<html>
  <head><title>Confirm</title></head>
  <body><br><br><br>

   
   <?php
   error_reporting(E_ERROR | E_PARSE );
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
      if(!$con) 
      { 
		die('Could not connect to Oracle: '); 
      }
         
      $a=$_POST["trackNo"];
      $query="select * from tracking where trackno = '$a'";
     $a = oci_parse($con, $query);
     $r = oci_execute($a);
	
     while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {		echo "Sr#:";
				 echo $row["EVENTNO"]."	 ";
				echo "<br>";
				echo "tracking number:"; 
        	     echo $row["TRACKNO"];
				 echo " DESCRIPTION:";
				echo $row["DESCRIPTION"]." 	";
				echo " city:";
				echo $row["CURRENTCITY"]." 	";
				echo " DELIVERED:";
				echo $row["DELIVERED"]." 	";
				echo " DATE:";
				echo $row["T_DATE"]." 	";
				echo " signature by:";
				echo $row["SIGNNAME"]." 	";
                         echo "<br><br>";


		  }
                  
?>
  </body>
</html>