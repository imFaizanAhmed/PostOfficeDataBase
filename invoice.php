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
       echo "Oracle Connection Successful.";
        
      } 
   else 
      { die('Could not connect to Oracle: '); 
      }
         
 /*PHP   REMOVE THIS PART!!!!!!

$t = tracking_ID.nextval;

run = INSERT INTO parcel VALUES($t, $weight, $origin, $destination, $RName, $RAddress, $RPhoneNo, $agentRefNo);

$i = invoice_ID.nextval
if(cust_id is empty)
{
	$cid= c_No.nextval //allocate new cust id
	run = INSERT INTO customer VALUES(cid, $fname, $lname, $date, $CNIC, $phoneNo); // register customer
	run = INSERT INTO invoice VALUES($i, $branchNo, $empNo, cid); // add custID to invoice
}
else
{	
	run = INSERT INTO invoice VALUES($i, $branchNo, $empNo, $cust_id);
}

run = INSERT INTO pInvoice VALUES($i, $t, '0', $qty, $shipCost, $value, $typeID, $serviceType);  //generate invoice

*/	
      $bn=$_POST['branchNo'];
	  $en=$_POST['empNo'];
	  $ti=$_POST['typeID'];
	  $st=$_POST['serviceType'];
	  $w=$_POST['weight'];
	  $o=$_POST['origin'];
	  $d=$_POST['Destination'];
	  $rn=$_POST['Rname'];
	  $ra=$_POST['RAddress'];
	  $rp=$_POST['RPhoneNo'];
	  $sc=$_POST['shipCost'];
	  $v=$_POST['value'];  
  	  $i=$_POST['cust_id'];
	  $j=$_POST['fname'];
	  $k=$_POST['lname'];
	  $h=$_POST['CNIC'];
	  $m=$_POST['phoneNo'];
    /* $query=" select * from tracking where trackingNo = '$a'";
	
     $a = oci_parse($con, $query); 
	   $run = oci_execute($a);
 if($run)
{
echo $a;
}
else
{
echo "<br>Error while inserting record ";
}
	while(oci_fetch_array($run) ){
	echo "asd";
	$na = oci_result($run,"username");
	echo $na;
	$gender = oci_result($run,"gender");
	echo $gender;
	}
//}

      */            
?>
  </body>
</html>