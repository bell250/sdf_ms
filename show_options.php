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
// $last_id=$_REQUEST['applicant_id'];
$sql = "SELECT * FROM learning_options ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1";
        echo "<h3>LIST OF ALL OPTIONS</h3";
            echo "<tr>";
                
                echo "<th>NAME</th>";
                echo "<th>DESCRIPTION</th>";
                echo "<th>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                                                           ?>
                <td><a href="delete_option.php?id=<?php echo $row['id']; ?>"">delete</a>&nbsp;&nbsp;&nbsp;<a href="update_option.php?id=<?php echo $row['id']; ?>"">edit</a></td>
            
            <?php
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