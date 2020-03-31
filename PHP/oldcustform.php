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

	<h1> Pakistan Post Track & Trace </h1>

	<div class="navbar">
	  <a href="file:///C:/Users/Taha/Desktop/form.html">Customer Transactions</a>
	  <a href="file:///C:/Users/Taha/Desktop/fund.html">Fund Collection</a>
	</div> 
	
<body style="background-color: #3D9970">
		<form action="oldcust.php" method = "post">
		  <table>
			 <tr>	
				<td>
					<label for="track">CNIC</label>
				</td>

				<td>
					<input type="text" id="cnic" name="cnic" placeholder="Enter CNIC...">
				</td>
			 </tr>
		  </table>
		  
			<input type="submit" value="Track">
	    </form>
	 </body>
	
	
</html>