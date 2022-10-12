<html>

<head>
	<script src=
		"https://code.jquery.com/jquery-3.2.1.min.js">
	</script>

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		type="text/javascript">
	</script>
	
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
</head>
<!-- <div class="card-body">
  <div class="row">
    <div class="col-md-6">
<form action="" method="POST">
  <div class="form-group">
     <input type="submit" name="get_id" class="form-control" placeholder="Enter ID" required>
	 </div>
	 <button type="submit" name="search_by_id" class="btn btn_primary">Search</button>
	 <form>
	 -->
	 

<body>
	<div class="container">
		<h1>User id searching</h1>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>User Id</label>
					<input type='text' name="id"
						id='id' class='form-control'
						placeholder='Enter user id'
						onkeyup="GetDetail(this.value)" value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>First Name:</label>
					<input type="text" name="firstname"
						id="firstname" class="form-control"
						placeholder='First Name'
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Last Name:</label>
					<input type="text" name="lastname"
						id="lastname" class="form-control"
						placeholder='Last Name'
						value="">
				</div>
			</div>
			<div>
			
			<img src="Images/java.png">
			
			</div>
		</div>
	</div>
	<script>

		// onkeyup event will occur when the user
		// release the key and calls the function
		// assigned to this event
		function GetDetail(str) {
			if (str.length == 0) {
				document.getElementById("firstname").value = "";
				document.getElementById("lastname").value = "";
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
							("firstname").value = myObj[0];
						
						// Assign the value received to
						// last name input field
						document.getElementById
							("lastname").value = myObj[1];
					}
				};

				// xhttp.open("GET", "filename", true);
				xmlhttp.open("GET", "testinguser.php?id=" + str, true);
				
				// Sends the request to the server
				xmlhttp.send();
			}
		};
	</script>
</body>

</html>
