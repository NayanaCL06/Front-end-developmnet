<?php


$databaseHost = 'localhost';
$databaseName = 'assignment';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


if(isset($_POST['submit'])) {   
    $name = $_POST['name'];
    $location = $_POST['location'];
   
        
    // checking empty fields
    if(empty($name) || empty($location)) {              
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($location)) {
            echo "<font color='red'>Location field is empty.</font><br/>";
        }
        
      
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO people_data(name,location) VALUES('$name','$location')");
        
        //display success message
       
      echo "<script language='javascript' type='text/javascript'>alert('added successfully.');window.location.href = 'index.php';</script>";
    }
}

?>