<html>
  <head><title>Confirm</title></head>
  <body><br><br><br>
   <?php
     //$db_sid = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = pc1)(PORT = 1521)) ) (CONNECT_DATA = (SID = orcl) ) )"; 
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
      {
		  echo "in else";
		  die('Could not connect to Oracle: '); 
      }
	   $year=$_POST["year"];
	    $branchNo=$_POST["branchNo"];
     $query="with myTab as (
select 
	sum(case to_char(f_date,'MM') when '01' then 1 else 0 end) jan,
	sum(case to_char(f_date,'MM') when '02' then 1 else 0 end) feb,
	sum(case to_char(f_date,'MM') when '03' then 1 else 0 end) mar,
	sum(case to_char(f_date,'MM') when '04' then 1 else 0 end) apr,
	sum(case to_char(f_date,'MM') when '05' then 1 else 0 end) may,
	sum(case to_char(f_date,'MM') when '06' then 1 else 0 end) jun,
	sum(case to_char(f_date,'MM') when '07' then 1 else 0 end) jul,
	sum(case to_char(f_date,'MM') when '08' then 1 else 0 end) aug,
	sum(case to_char(f_date,'MM') when '09' then 1 else 0 end) sep,
	sum(case to_char(f_date,'MM') when '10' then 1 else 0 end) oct,
	sum(case to_char(f_date,'MM') when '11' then 1 else 0 end) nov,
	sum(case to_char(f_date,'MM') when '12' then 1 else 0 end) dec
from fund where to_char(f_date,'YYYY') = '$year' AND branchNo = '$branchNo')
select
	jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec,
	jan+feb+mar+apr+may+jun+jul+aug+sep+oct+nov+dec total
from myTab";
     $a = oci_parse($con, $query); 
     $r = oci_execute($a);
     while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
        	         echo $row["TOTAL"];
                         echo "		";
			 echo $row["ENAME"]."	 ";
   			 echo $row["JOB"]." 	";
			 echo $row["SAL"]." 	";	
                         echo "<br><br>";


		  }
 

                  
?>
  </body>
</html>