<?php  

 if(isset($_POST["selectedBloodGroup"]))  
 {  
		
      $output = '';   
	  $con = mysqli_connect("localhost","root","") or die("Unable to connect");
	  mysqli_select_db($con,"blood_donor");
      $query = "select * from request where bloodgroup='".$_POST["selectedBloodGroup"]."'";
      $result = mysqli_query($con,$query);
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Full Name of the Requester :</label></td>  
                     <td width="70%">'.$row["fullname"].'</td>
				</tr>
				<tr>
					 <td width="30%"><label>Contact Number :</label></td>  
                     <td width="70%">'.$row["phone_no"].'</td>
				</tr>
				<tr>
					 <td width="30%"><label>Patient Name :</label></td>  
                     <td width="70%">'.$row["patientname"].'</td>
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
					 <td width="30%"><label>Hospital Name :</label></td>  
                     <td width="70%">'.$row["hos_name"].'</td>
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