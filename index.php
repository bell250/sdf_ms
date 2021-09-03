<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SDF MIS</title>
    <link rel="stylesheet" href="sytle.css">
</head>
<body style="width: 50%; margin: auto">
<div class="m">
<img scr="img.png"></div>
	<p>Welcome to IPRC Ngoma SDF Program</p>
	<p> SDF is a program implemented by IPRC Ngoma to upskill the youth in IT related field If you want to register a new cooperative, 
		<!-- <a href="#">  click here.</a>  -->
	</p>

	<div style="width: 50%; margin: auto">
		

		<p> Fill this form to apply: </p>
<div class="container">
		<form name="new_applicant_form" action="registration.php" method="post">
			<p> First name: <input type="text" name="izina"> </p>
			<p> Last name:  <input type="text" name="last_name"></p>
			<p> Gender: <br>
				<input type="radio" id="female" name="gender" value="Female">
				<label for="female">Female</label><br>
				<input type="radio" id="male" name="gender" value="Male">
				<label for="male">Male</label><br>
			<p> Date of birth: <input type="date" name="date_of_birth"></p>
			<p>Highest academic level 
				<select name="highest_academic_level">
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="university">University</option>
				</select>
			</p>
			<p> Province: <input type="text" name="province"></p>
			<p> District: <input type="text" name="district"></p>
			<p> Sector:   <input type="text" name="sector"></p>
			<p> Cell:     <input type="text" name="cell"></p>
			<p> Email:    <input type="email" name="email"></p>
			<p> Password: <input type="password" name="password"></p>
			<p> Learning Option: <br>
				<input type="radio" id="iot" name="learning_option_id" value="1">
				<label for="iot">IOT</label><br>
				<input type="radio" id="sod" name="learning_option_id" value="2">
				<label for="sod">Software Development</label><br>
				<input type="radio" id="civil_engineering" name="learning_option_id" value="3">
				<label for="civil_engineering">Civil Engineering</label>
			</p>
			<p><input type="submit" name="submit" value="Submit"></p>
		</form>
	</div>
</body>
</html>