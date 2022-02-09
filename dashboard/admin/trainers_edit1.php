<?php
require '../../include/db_conn.php';
page_protect();

if (isset($_POST['name'])) {
    $tid = $_POST['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Gym | Trainers Wall </title>
    <link rel="stylesheet" href="../../css/tyle.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/cript.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="1style.css" rel="stylesheet" type="text/css">
	
	<style>
 	#button1
	{
	width:126px;
	}
	#boxxe
	{
		width:230px;
	}

		.page-container .sidebar-menu #main-menu li#trainhassubopen > a {
		background-color: orange;
		color: #ffffff;
		}
 
	</style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>

            </header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>								
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>Edit Trainers Details</h3>

	<hr>

                <?php
                    
                    $query  = "SELECT * FROM trainers u 
                            INNER JOIN trainer_address a ON u.t_id=a.id
                            WHERE t_id='$tid'";
                    //echo $query;
                    $result = mysqli_query($con, $query);
                    $sno    = 1;
                    
                    $name="";
                    $gender="";

                    if (mysqli_affected_rows($con) == 1) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    
                            $name    		  	=$row['t_name'];
                            $email   		  	=$row['t_email'];
                            $password			  =$row['t_pass'];
                            $age			 	    =$row['t_age'];
                            $specialization =$row['t_specialize'];
                            $city			    	=$row['city']; 
                            $province		  	=$row['province'];
                            $barangay			  =$row['barangay'];
                            $zipcode		  	=$row['zipcode'];
                            $gender			  	=$row['t_gender'];
                            $dob 				    =$row['t_dob'];
                            $mobile   			=$row['t_mobile'];      
                            $jdate   		  	=$row['joining_date'];
                        
                        

                        }
                    }
                    else{
                        echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
                        echo mysqli_error($con);
                    }


                ?>

                	
<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>EDIT TRAINERS PROFILE</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="trainers_edit_submit.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">

           	 <tr>
           	   <td height="35">TRAINER ID:</td>
           	   <td height="35"><input id="boxxe" type="text" name="t_id" readonly required value=<?php echo $tid?>></td>
         	</tr>

             <tr>
               <td height="35">NAME:</td>
               <td height="35"><input id="boxxe" type="text" name="t_name" value='<?php echo $name?>'></td>
             </tr>
                    
             <tr>
               <td height="35">EMAIL:</td>
               <td height="35"><input id="boxxe" type="email" name="t_emai" required value=<?php echo $email?>></td>
             </tr>

             <tr>
               <td height="35">PASSWORD:</td>
               <td height="35"><input id="boxxe" type="text" name="t_pass" required value=<?php echo $password?>></td>
             </tr>

             <tr>
               <td height="35">AGE:</td>
               <td height="35"><input id="boxxe" type="text" name="t_age" required value=<?php echo $age?>></td>
             </tr>


             <tr>
               <td height="35">SPECIALIZATION:</td>
               <td height="35"><input id="boxxe" type="text" name="t_specialize" required value=<?php echo $specialization ?>></td>
             </tr>

             <tr>
               <td height="35">CITY:</td>
               <td height="35"><input id="boxxe"  type="text" name="city" value='<?php echo $city?>'></td>
             </tr>

             <tr>
               <td height="35">PROVINCE:</td>
               <td height="35"><input  id="boxxe"  type="text" name="province" value='<?php echo $province?>'></td>
             </tr>

             
			<tr>
               <td height="35">BARANGAY:</td>
               <td height="35"><input id="boxxe" type="text"  name="barangay" value='<?php echo $barangay?>'></td>
             </tr>

             
             <tr>
               <td height="35">ZIPCODE:</td>
               <td height="35"><input   id="boxxe" type="text" name="zipcode" value='<?php echo $zipcode?>'></td>
             </tr>

             <tr>
               <td height="35">GENDER:</td>
               <td height="35"><select id="boxxe" name="t_gender" id="gender" required>

						<option <?php if($gender == 'Male'){echo("selected");}?> value="Male">Male</option>
						<option <?php if($gender == 'Female'){echo("selected");}?> value="Female">Female</option>
						</select></td><br>
             </tr>

			 <tr>
               <td height="35">DATE OF BIRTH:</td>
               <td height="35"><input type="date" id="boxxe" name="t_dob" value=<?php echo $dob?>></td>
             </tr>

			  <tr>
               <td height="35">MOBILE:</td>
               <td height="35"><input id="boxxe" type="number" name="t_mobile" maxlength="10" value=<?php echo $mobile?>></td>
             </tr>

			 <tr>
               <td height="35">JOINING DATE:</td>
               <td height="35"><input type="date" id="boxxe" name="joining_date" value=<?php echo $jdate?>></td>
             </tr>


             <br>
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="UPDATE" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
			
			
			
			
					

	
    	</div>

  
</body>
</html>	

<?php
} else {
    
}
?>


