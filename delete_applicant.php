<?php 

$link = mysqli_connect("localhost", "root", "", "sdf_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$id= $_GET['id']; // get id through query string

$sql = "DELETE FROM applicants WHERE id = $id";
if($result = mysqli_query($link,$sql))
{
	

    mysqli_close($db); // Close connection
    header("location:show_applicant.php"); // redirects to all records page 
   
    exit;

}
else
{
    echo "error during delete <br>".$sql;
   
    
}
?>
