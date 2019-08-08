<?php  

 if(isset($_POST["selectedStateName"]))  
 {  
		
      $output = '';   
	  $con = mysqli_connect("localhost","root","") or die("Unable to connect");
	  mysqli_select_db($con,"blood_donor");
      $query = "select * from blood_banks where statename='".$_POST["selectedStateName"]."'";
      $result = mysqli_query($con,$query);
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Hospital Name :</label></td>  
                     <td width="70%">'.$row["hos_name"].'</td>
				</tr>
				<tr>
					 <td width="30%"><label>Address :</label></td>  
                     <td width="70%">'.$row["address"].'</td>
				</tr>
				<tr>
					 <td width="30%"><label>Contact Number :</label></td>  
                     <td width="70%">'.$row["contact_no"].'</td>
				</tr>
				<tr>
					 <td width="30%"><label>Website :</label></td>  
                     <td width="70%"><a href="'.$row["website"].'" target="_blank">Click here</a></td>
					 
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