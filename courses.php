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
		<h1>Courses searching</h1>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Course Name</label>
					<input type='text' name="course_name"
						id='course_name' class='form-control'
						placeholder='Enter Course Name'
						onkeyup="GetDetail(this.value)" value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>First Name:</label>
					<input type="text" name="details"
						id="details" class="form-control"
						placeholder='details'
						value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Last Name:</label>
					<input type="text" name="img_path"
						id="img_path" class="form-control"
						placeholder='img_path'
						value="">
				</div>
			</div>
			<div>
			<img src="course_db.php?=2" class="img-responsive" />
			<input type="image" name="img_path2"
						id="img_path" class="form-control"
						placeholder='img_path'
						src="">
						
						
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>course_url</label>
					<input type="text" name="course_url"
						id="course_url" class="form-control"
						placeholder='course_url'
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
				document.getElementById("course_name").value = "";
				document.getElementById("details").value = "";
				document.getElementById("img_path").src = "";
				document.getElementById("course_url").value = "";
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
							("course_name").value = myObj[0];
						
						// Assign the value received to
						// last name input field
						document.getElementById
							("details").value = myObj[1];
							
							document.getElementById
							("img_path").value = myObj[2];
							
							document.getElementById
							("course_url").value = myObj[3];
							
					}
				};

				// xhttp.open("GET", "filename", true);
				xmlhttp.open("GET", "course_db.php?course_name=" + str, true);
				
				// Sends the request to the server
				xmlhttp.send();
			}
		};
	</script>
</body>

</html>