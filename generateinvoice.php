<html>
	<head>
		<style>
		 /* Navbar container */
			.navbar {
			  overflow: hidden;
			  background-color: #333;
			  font-family: Arial;
			}

			/* Links inside the navbar */
			.navbar a {
			  float: left;
			  font-size: 16px;
			  color: white;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			}

			/* The dropdown container */
			.dropdown {
			  float: left;
			  overflow: hidden;
			}

			/* Dropdown button */
			.dropdown .dropbtn {
			  font-size: 16px;
			  border: none;
			  outline: none;
			  color: white;
			  padding: 14px 16px;
			  background-color: inherit;
			  font-family: inherit; /* Important for vertical align on mobile phones */
			  margin: 0; /* Important for vertical align on mobile phones */
			}

			/* Add a red background color to navbar links on hover */
			.navbar a:hover, .dropdown:hover .dropbtn {
			  background-color: red;
			}

			/* Dropdown content (hidden by default) */
			.dropdown-content {
			  display: none;
			  position: absolute;
			  background-color: #f9f9f9;
			  min-width: 160px;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			}

			/* Links inside the dropdown */
			.dropdown-content a {
			  float: none;
			  color: black;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			  text-align: left;
			}

			/* Add a grey background color to dropdown links on hover */
			.dropdown-content a:hover {
			  background-color: #ddd;
			}

			/* Show the dropdown menu on hover */
			.dropdown:hover .dropdown-content {
			  display: block;
			} 
			table, th, td 
			{
				border: 1px solid black;
			}
		 </style>
	</head>

	<h1> Pakistan Post Customer </h1>

	<div class="navbar">
	  <a href="file:///C:/Users/Taha/Desktop/track.html">Track & Trace</a>
	  <a href="file:///C:/Users/Taha/Desktop/fund.html">Fund Collection</a>
	</div> 
	
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

	$bn=$_POST['branchno'];
	$en=$_POST['empno'];
	$fn=$_POST['fname'];
	  $tid=$_POST['typeid'];
	  $st=$_POST['servicetype'];
	$w=$_POST['weight'];
	$o=$_POST['origin'];
	  $d=$_POST['destination'];
	  $rn=$_POST['rname'];	  
	$ra=$_POST['raddress'];
	$rp=$_POST['rphoneno'];
	  $an=$_POST['agentRefNo'];
	  $sc=$_POST['shipCost'];
	  $v=$_POST['value'];
	  $cid=$_POST['cust_id'];

	  $query="select max(invoiceno) as cid from invoice";
     $a = oci_parse($con, $query);
     $r = oci_execute($a);
	       while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
   	  {
			$ninv = $row["CID"];
		}
	$ninv = $ninv+1;

		  $query="select max(trackno) as tno from parcel";
	     $a = oci_parse($con, $query);
     $r = oci_execute($a);
	       while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
   	  {
			$ntra = $row["TNO"];
		}
	$ntra = $ntra+1;
	
	$query="insert into pinvoice values('$ninv','$ntra','0','$qty','$sc','$iv','$pt','$st')";
	     $a = oci_parse($con, $query);
     $r = oci_execute($a);
	 	 
	 $a = oci_parse($con, "insert into parcel values('$ntra','$w','$o','$d','$rname','$ra','$rp','$en','$fn')");
     $r = oci_execute($a);
	 $q = 1;
	 $p = 100;
	  $a = oci_parse($con, "insert into invoice values('$ninv','$bn','$en','$cid',sysdate,'$q','$p'");
     $r = oci_execute($a);
?>
