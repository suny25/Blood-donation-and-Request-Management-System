<?php
 require 'dbconfig/config.php';
 if(isset($_POST["id"]))
 {
      $output = '';
      $var = $_POST['bloodgroup'];
	  $query = "select * from donate where bloodgroup='$var'";
      $result = mysqli_query($con,$query);
      while($row = mysqli_fetch_array($result))
      {
           $output = '
                <p><label>Name : '.$row['fullname'].'</label></p>
           ';
      }  
      echo $output;
 }
 ?>
 
