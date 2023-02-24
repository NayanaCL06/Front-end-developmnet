<?php

$databaseHost = 'localhost';
$databaseName = 'assignment';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


$result = mysqli_query($mysqli, "SELECT * FROM people_data ORDER BY id DESC"); 
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  .blue {
    background: #47afe7;
    width: 50%;
	    height: 400px;
}
h2.people {
    text-align: left;
    margin: 36px 0 0 50px;
    padding: 50px 0 0 0;
	    color: white;
}

button.btn.btn-info.btn-lg {
    float: right;
    margin: -40px 40px 0 0;
    background: #f49c63;
    border: #f49c63;
    border-radius: 30px;
	text-transform:uppercase;
}
table{
font-size: 22px;
  
    font-weight: 600;
	}
</style>

  </head>
<body style="background: #ebebeb;">


<div align="center">
<div class="blue">

<h2 class="people">PEOPLE DATA</h2>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Next Person</button>





       
        <?php 
      $i=1;
        while($res = mysqli_fetch_array($result)) { 
		echo "<table width='86%' border=0 border-radius='4px'>  ";      
            echo "<tr class='pl'  bgcolor='#d2e6f9' >";
			echo"<td width='20px ' bgcolor='#84cf84' rowspan='2'   color='white'>".$i++."</td> ";
			
            echo "<td> Name:".$res['name']."</td> <br>";
			 echo "</tr>  ";
			echo "<tr  bgcolor='#fff'>";
            echo "<td colspan='2'> Location:".$res['location']."</td> ";
            echo "</tr> ";
			echo" </table>";
        }
        ?>
   
	
	
	


</div></div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
        <form method="post" action="peopledata.php">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br>
  <label for="location">Location:</label><br>
  <input type="text" id="location" name="location" required>
  
  <input type="submit" name="submit" value="submit" />
</form>

        </div>
       
      </div>
      
    </div>
  </div>




</body>
</html>