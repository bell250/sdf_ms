<?php 
// check if the form is submitted
if (isset($_POST['submit'])) { 
	// 1. Create a new connection to the server and to the database
	$connection = mysqli_connect('localhost', 'root', '','sdf_database');

	// 2. Test if the connection works
	if($connection === false){
		die("An error has occured: " . mysqli_connect_error());
	}

	// 3. Create variables to capture information from the form
	$first_name = $_POST['izina'];
	$last_name  = $_POST['last_name'];
	$gender     = $_POST['gender'];
	$date_of_birth = $_POST['date_of_birth'];
	$highest_academic_level = $_POST['highest_academic_level'];
	$province   = $_POST['province'];
	$district   = $_POST['district'];
	$sector     = $_POST['sector'];
	$cell       = $_POST['cell'];
	$email      = $_POST['email'];
	$password   = $_POST['password'];
	$learning_option_id = $_POST['learning_option_id'];

	
	// 4. create variable for insert query
	$query = "INSERT INTO applicants( first_name,	last_name,	gender,
	 date_of_birth, education_level, province,
	  district, sector, cell, email, password,course) VALUES ('$first_name',
	  '$last_name','$gender','$date_of_birth', '$highest_academic_level',
	   '$province', '$district', '$sector', '$cell', '$email', '$password',
	    '$learning_option_id')";

	// 5. Execute the query like this: 
	if (mysqli_query($connection, $query) === true) {
		echo "Your application has been submitted! You will be informed of the feedback 
        of your application not later than September 15, 2021.";
	} else {
		echo "ERROR: There was a problem" . mysqli_error($connection);
	}
	
	// Close connection
	mysqli_close($connection);
	// ================
}

?>
