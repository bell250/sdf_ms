<?php
echo "<!DOCTYPE html>
<html>
<head>
<link rel=stylesheet type=text/css href=table.css>
    <title></title>
</head>
<body>";


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sdf_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM applicants";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
        echo "<h3>List of Applicants</h3";
            echo "<tr>";
                
                echo "<th>FIRST NAME</th>";
                echo "<th>LAST NAME</th>";
                
                echo "<th>GENDER</th>";
                echo "<th>DATE OF BIRTH</th>";
                echo "<th>EDUCATION LEVEL</th>";
                echo "<th>EMAIL</th>";
                echo "<th>PHONE NUMBER</th>";
                echo "<th>PROVINCE</th>";
                echo "<th>DISTRICT</th>";
                echo "<th>SECTOR</th>";
                echo "<th>CELL</th>";
                echo "<th>COURSE APPLIED FOR</th>";
                echo "<th>Reg No</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['date_of_birth'] . "</td>";
                echo "<td>" . $row['education_level'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['province'] . "</td>";
                echo "<td>" . $row['district'] . "</td>";
                echo "<td>" . $row['sector'] . "</td>";
                echo "<td>" . $row['cell'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . $row['reg_no'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
echo "</body>";
echo "</html>";
?>