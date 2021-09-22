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
	$name = $_POST['name'];
	$description = $_POST['description'];
	
	
	// 4. create variable for insert query
	$query = "INSERT INTO learning_options(name,description) VALUES ('$name',
	  '$description')";
 
	// 5. Execute the query like this: 

	if (mysqli_query($connection, $query) === true) {
		
		echo "New option added";
		
	} else {
		echo "ERROR: There was a problem" . mysqli_error($connection);
	}
	
	// Close connection
	mysqli_close($connection);
}
?>