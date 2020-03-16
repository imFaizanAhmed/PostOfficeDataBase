<html>
	<h1> Parcel Insertion Form </h1>
	
<body style="background-color: #3D9970">
		<form action="generateinvoice.php" method = "_post">
		  <table>
		  
		  	 <tr>	
				<td>
					<label for="bno">Branch Number</label>
				</td>

				<td>
					<input type="text" id="bno" name="branchNo" maxlength = "4" placeholder="Enter Branch#...">
				</td>
			 </tr>
			 
			 <tr>	
				<td>
					<label for="eno">Employee Number</label>
				</td>

				<td>
					<input type="text" id="eno" name="empNo" maxlength = "4" placeholder="Enter Emp#...">
				</td>
			 </tr>
		  
		  
			<tr>
				<td>
					<label for="DOB">Package Type</label>
				</td>
				
				<td>
					<select id="ptype" name="typeID">
					  <option value="1">Package</option>
					  <option value="2">Letter</option>
					  <option value="3">Money Order</option>
					</select>
				</td>
			</tr>		
					
				
			<tr>
				<td>
					<label for="stype">Service Type</label>
				</td>
				
			<td>
					<select id="stype" name="serviceType">
					  <option value="URGENT">URGENT</option>
					  <option value="SAME DAY">SAME DAY</option>
					  <option value="NORMAL">NORMAL</option>
					</select>
				</td>
			</tr>	
				
			<tr>	
				<td>
					<label for="Weight">Weight</label>
				</td>

				<td>
					<input type="number" id="cid" name="weight" placeholder="Enter Weight...">
				</td>
			 </tr>	
				
			<tr>	
				<td>
					<label for="Origin">Origin</label>
				</td>

				<td>
					<input type="text" id="origin" name="origin" placeholder="Enter Origin...">
				</td>
			 </tr>
			 
			<tr>	
				<td>
					<label for="Destination">Destination</label>
				</td>

				<td>
					<input type="text" id="Destination" name="Destination" placeholder="Enter Destination...">
				</td>
			 </tr> 
			 
			<tr>	
				<td>
					<label for="Rname">Receiver Name</label>
				</td>

				<td>
					<input type="text" id="rname" name="Rname" placeholder="Enter Name...">
				</td>
			 </tr>
			 
			 <tr>	
				<td>
					<label for="City">Receiver Address</label>
				</td>

				<td>
					<input type="text" id="address" name="RAddress" placeholder="Enter Address...">
				</td>
			 </tr>
			 
			<tr>	
				<td>
					<label for="Mobile#">Reciever Mobile Number</label>
				</td>

				<td>
					<input type="text" id="mobNo" name="RPhoneNo" placeholder="Enter Mobile Number...">
				</td>
			 </tr> 
			 
			 <tr>	
				<td>
					<label for="City">Agent Reference Number</label>
				</td>

				<td>
					<input type="text" id="refno" name="agentRefNo" placeholder="Enter Ref#...">
				</td>
			 </tr>
			 
			 
			 <tr>	
				<td>
					<label for="Weight">Shipping Cost</label>
				</td>

				<td>
					<input type="number" id="shcost" name="shipCost" placeholder="Enter Shipping Cost...">
				</td>
			 </tr>	
			 
			 			<tr>	
				<td>
					<label for="Weight">Value</label>
				</td>

				<td>
					<input type="number" id="value" name="value" placeholder="Enter Value...">
				</td>
			 </tr>	
			 
			 <p> Only Enter Customer ID (For Existing Customers) </p>
			 
			 
			<tr>
				<td>
					<label for="cid">Customer ID (Existing Customers)</label>
				</td>
				
				<td>
					<input type="text" id="cust_id" name="cust_id" maxlength="5" placeholder="Enter ID.."> 
				</td>
			</tr>
			 
			  <tr>
				<td>
					<label for="fname">Customer First Name</label>
				</td>
				
				<td>
					<input type="text" id="fname" name="fname" placeholder="Enter First Name.."> 
				</td>
			</tr>
			
			 
		</table>
		
						<input type="submit" value="Submit">		
	    </form>
	 </body>
	
</html>
