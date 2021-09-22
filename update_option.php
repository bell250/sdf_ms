  <?php 
// check if the form is submitted

    // 1. Create a new connection to the server and to the database
    $connection = mysqli_connect('localhost', 'root', '','sdf_database');

    // 2. Test if the connection works
    if($connection === false){
        die("An error has occured: " . mysqli_connect_error());
    }
    $id=$_GET['id'];

echo"
<html>
    <head>
        
        <link rel='stylesheet' type='text/css' href='form.css'>
    </head>
    <body style='background-color: #ecf3fb; font-family: 'trebuchet MS','Lucida sans',Arial' ''>
        <div class='main'>";

        
       $sql = "SELECT * FROM learning_options where id=$id ";
       $result = mysqli_query($connection, $sql);
       $row = mysqli_fetch_array($result);
       echo "
            <form method='post' action='update_option1.php'>
                
                <p><h2><u>Learning option</u></h2></p>

                <p><label>Name:</label>";?>
                <input type="text" name="name"
                 value="<?php echo $row['name']; ?>" /></p>
                 <input type="text" name="id"
                 value="<?php echo $row['id']; ?>" /></p>
                <p><label>Description:</label>
                <textarea name="description"><?php echo $row['description']; ?></textarea><br>
                <br>
                <p><input type="submit" name="submit" value="update" />  </p>
                <br>  
            </form>   
        </div>

    </body>
</html>