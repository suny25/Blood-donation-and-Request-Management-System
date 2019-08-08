<?php  

 if(isset($_POST["selectedBloodGroup"]))  
 {  
		
      $output = '';   
	  $con = mysqli_connect("localhost","root","") or die("Unable to connect");
	  mysqli_select_db($con,"blood_donor");
      $query = "select * from donate where bloodgroup='".$_POST["selectedBloodGroup"]."'";
	  //$query = "select * from donate where age=59";
      $result = mysqli_query($con,$query);
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Full Name :</label></td>  
                     <td width="70%">'.$row["fullname"].'</td>
				</tr>
				<tr>
					 <td width="30%"><label>Age :</label></td>  
                     <td width="70%">'.$row["age"].'</td>
				</tr>
				<tr>	
					 <td width="30%"><label>State Name :</label></td>  
                     <td width="70%">'.$row["statename"].'</td>
				</tr>
				<tr>	
					 <td width="30%"><label>City Name :</label></td>  
                     <td width="70%">'.$row["cityname"].'</td>
				</tr>
				<tr>	
					 <td width="30%"><label>Contact Number</label></td>  
                     <td width="70%">'.$row["contact"].'</td>
                </tr>
				<tr>	
					 <td width="30%"><label>   </label></td> 
					<td width="70%"><label>   </label></td>
                </tr>	
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>