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
         /* PHP
	$i, $t, $qty, $shipCost, $value, $typeID, $serviceType = "select invoiceno, trackNo, qty, shipCost, value, typeID, serviceType from pInvoice where trackNo = $trackNo";
	shipCost = shipCost*(-1); //Subtract Value Of Refund
	run = INSERT INTO pInvoice VALUES($i, $t, '1', $qty, $shipCost, $value, $typeID, $serviceType);  //generate invoice with refund

	$tot_price = run: select sum(tot_price) from pinvoice where invoiceno = &i; //calculated attributes Update Invoice
	$tot_qty = run :select sum(tot_qty) from pinvoice where invoiceno = &i; //calculated attributes Update Invoice
	
	*/
      $a=$_POST["trackNo"];
      $query="select * from tracking where trackno = '$a'";
     $a = oci_parse($con, $query);
     $r = oci_execute($a);
	 if($r)
		 echo "qwe";
     while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {		$ship = $row["SHIPCOST"];
			echo "zxc";
		  echo $ship;
		  $i = $row["INVOICENO"];
		  echo $i;
		  $t = $row["TRACKINGNO"];
		  echo $t;
		  $qty = $row["QTY"];
		  echo $qty;
		  $value = $row["ITEMVALUE"];
		  echo $value;
		  $typeID = $row["PARCELTYPE"];
				echo $typeID;
				$serviceType = $row["SERVICETYPE"];
		  }
		  $ship = $ship * -1;
		  $ref = 1;
	$query="INSERT INTO pInvoice(invoiceno, trackNo, refund/*, qty, shipCost,itemvalue, parceltype, serviceType*/) VALUES('$i', '$t', '$ref'/* '$qty', '$shipCost', '$value', '$typeID', '$serviceType'*/)";
     $a = oci_parse($con, $query);
     $r = oci_execute($a);
    if(!$r)
		echo "asd";
?>
  </body>
</html>