<html>

<head>

</head>

<body>

<?php require('include.php') ?>
    <center>
	
        
	<div class="container">
		<h1>Lead Details</h1>
        <p> Search from customer id, enter the customer id of the customer you want to search.</p>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Customer id</label>
					<input type='text' name="cust_id"
						id='cust_id' class='form-control'
						placeholder='Enter user id'
						onkeyup="GetDetail(this.value)" value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Full Name:</label>
					<input type="text" name="cust_name"
						id="cust_name" class="form-control"
						placeholder='Full Name'
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="email"
						id="email" class="form-control"
						placeholder='Last Name'
						value="">
				</div>
			</div>
		</div>
		<div class="row">
        	<div class="col-lg-6">
				<div class="form-group">
					<label>Phone Number:</label>
					<input type="text" name="phn_no"
						id="phn_no" class="form-control"
						placeholder='Phone Number'
						value="">
				</div>
			</div>
		</div>
		<div class="row">
        	<div class="col-lg-6">
				<div class="form-group">
					<label>Company:</label>
					<input type="text" name="cname"
						id="cname" class="form-control"
						placeholder='company name'
						value="">
				</div>
			</div>
		</div>
	</div>

	
	

	<script>

		// onkeyup event will occur when the user
		// release the key and calls the function
		// assigned to this event
		function GetDetail(str) {
			if (str.length == 0) {
				document.getElementById("cust_name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("phn_no").value = "";
                document.getElementById("cname").value = "";
				return;
			}
			else {

				// Creates a new XMLHttpRequest object
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function () {

					// Defines a function to be called when
					// the readyState property changes
					if (this.readyState == 4 &&
							this.status == 200) {
						
						// Typical action to be performed
						// when the document is ready
						var myObj = JSON.parse(this.responseText);

						// Returns the response data as a
						// string and store this array in
						// a variable assign the value
						// received to first name input field
						
						document.getElementById
							("cust_name").value = myObj[0];
						
						// Assign the value received to
						// last name input field
						document.getElementById(
							"email").value = myObj[1];
                        document.getElementById(
							"phn_no").value = myObj[2];
                        document.getElementById(
							"cname").value = myObj[3];
					}
				};

				// xhttp.open("GET", "filename", true);
				xmlhttp.open("GET", "gfg.php?cust_id=" + str, true);
				
				// Sends the request to the server
				xmlhttp.send();
			}
		}
	</script>
    
    <!-- <br><button type="submit" class="btn btn-primary" value="Submit"> <a href="final.php">Convert</button></a> -->
	<br><input type ="submit" class="btn btn-primary" name="submit">
    </center>
</body>

</html>
