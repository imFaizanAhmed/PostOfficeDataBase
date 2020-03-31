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
	
<body style="background-color: #3D9970">
		  <form name="newc" action="newcust.php" method="post">
		  <table>
				
						<tr>	
				<td>
					<label for="cust_id">Customer first name</label>
				</td>

				<td>
					<input type="text" id="cid" name="fname" placeholder="Enter Customer ID...">
				</td>
			 </tr>	
				<tr>	
				<td>
					<label for="cust_id">Customer last name</label>
				</td>

				<td>
					<input type="text" id="cid" name="lname" placeholder="Enter Customer ID...">
				</td>
			 </tr>	
			<tr>	
				<td>
					<label for="CNIC">CNIC</label>
				</td>

				<td>
					<input type="text" id="CNIC" name="CNIC" placeholder="Enter CNIC...">
				</td>
			 </tr>
			
			 
			 <tr>	
				<td>
					<label for="Mobile#">address</label>
				</td>

				<td>
					<input type="text" id="mobNo" name="add" placeholder="Enter Mobile Number...">
				</td>
			 </tr> 
			 
			 <tr>	
				<td>
					<label for="Mobile#">city</label>
				</td>

				<td>
					<input type="text" id="mobNo" name="city" placeholder="Enter Mobile Number...">
				</td>
			 </tr> 
			<tr>	
				<td>
					<label for="Mobile#">Mobile Number</label>
				</td>

				<td>
					<input type="text" id="mobNo" name="mobNo" placeholder="Enter Mobile Number...">
				</td>
			 </tr> 

		</table>
		
						<input type="Submit">		
	    </form>
	 </body>
	
	
</html>