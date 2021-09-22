<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SDF MIS</title>
	<link rel="stylesheet" type="text/css" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css ">  
	<meta name="viewport" content="width=device-width,initial-scale=1.0"> 
</head>
<body class="container">
 
	<p>Welcome to IPRC Ngoma SDF Program</p>
	<p> SDF is a program implemented by IPRC Ngoma to upskill the youth in IT related field If you want to apply fill this form. 
		<!-- <a href="#">  click here.</a>  -->
	</p>

	<div style="width: 50%; margin: auto">
		

		<p> Fill this form to apply: </p>
<div class="container">
		<form name="new_applicant_form" action="applicant_controller.php" method="post">
		<label class="form-label"> First name:</label> <input type="text" name="izina" class="form-control">
		<label class="form-label"> Last name:</label><input type="text" name="last_name" class="form-control">
			 <label class="form-label">Gender: </label><br>
				<input class="form-check-input" type="radio" id="female" name="gender" value="Female">
				<label for="female">Female</label><br>
				<input  class="form-check-input" type="radio" id="male" name="gender" value="Male">
				<label for="male">Male</label><br>
			 <label class="form-label">Date of birth:</label> <input type="date" name="date_of_birth" class="form-control">
			<label class="form-label">Highest academic level </label>
				<select name="highest_academic_level" class="form-select">
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="university">University</option>
				</select>
			
			<label class="form-label"> Province: </label><input type="text" name="province" class="form-control"></p>
			 <label class="form-label">District: </label> <input type="text" name="district" class="form-control">
			<label class="form-label"> Sector:  </label> <input type="text" name="sector" class="form-control">
			<label class="form-label"> Cell:  </label>   <input type="text" name="cell" class="form-control">
			 <label class="form-label">Email: </label>   <input type="email" name="email" class="form-control">
			 <label class="form-label">Password:</label> <input type="password" name="password" class="form-control">
			 <?php
              $conn = new mysqli("localhost", "root","","sdf_database") or die ('Cannot connect to db');
                  $result = $conn->query("select id,name from learning_options");
                 echo "<p><label>Learning option:</label></p>";
                 echo "<select name='learning_option_id' class='form-select'>";
                 while ($row = $result->fetch_assoc()) {
                 $id = $row['id'];
                 $name = $row['name'];
                 echo '<option value=" '.$id.'"  >'.$name.'</option>';
                             }
                  echo "</select>";
     
                         ?> 
			
			
			<br><input  type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>