<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html> 
<html lang="en">
<head>

    <title>Gym | Profile </title>
    <link rel="stylesheet" href="../../css/tyle.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/cript.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="1style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

	<style>

		.page-container .sidebar-menu #main-menu li#profile > a {
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

			<h4 style="color:white;">GYM<span style="color:orange;"> SQUAD</span></h4>

            </header>
    		<?php include('nav1.php'); ?>
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

		<h3>Profile</h3>
		<hr>

			
		
	    <div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:450px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6> PROFILE </h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="new_submit.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">MEMBER ID:</td>
           	   <td height="35"><input type="text" id="boxx" name="m_id" value="" readonly required/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">NAME:</td>
               <td height="35"><input name="u_name" id="boxx"  required/></td>
             </tr>

			 <tr>
               <td height="35">EMAIL ID:</td>
               <td height="35"><input type="email" name="" id="boxx" required/ size="30"></td>
             </tr>

			 <tr>
               <td height="35">PASSWORD:</td>
               <td height="35"><input name="" id="boxx"  required/></td>
             </tr>

             <tr>
               <td height="35">STREET NAME:</td>
               <td height="35"><input  name="street_name" id="boxx"   required/></td>
             </tr>

             <tr>
               <td height="35">CITY:</td>
               <td height="35"><input <input type="text" name="city" id="boxx" required/ ></td>
             </tr>

             <tr>
               <td height="35">ZIPCODE:</td>
               <td height="35"><input type="number" name="zipcode" id="boxx" maxlength="6" required / ></td>
             </tr>

            <tr>
               <td height="35">STATE:</td>
               <td height="35"><input type="text" name="state" id="boxx" required/ size="30"></td>
             </tr>

            <tr>
               <td height="35">GENDER:</td>
               <td height="35"><select name="gender" id="boxx" required>

					<option value="">--Please Select--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>

				</select></td>
             </tr>

            <tr>
               <td height="35">DATE OF BIRTH:</td>
               <td height="35"><input type="date" name="dob" id="boxx" required/ size="30"></td>
             </tr>

			 <tr>
               <td height="35">PHONE NO:</td>
               <td height="35"><input type="number" name="mobile" id="boxx" maxlength="10" required/ size="30"></td>
             </tr>

			 <tr>
               <td height="35">JOINING DATE:</td>
               <td height="35"><input type="date" name="jdate" id="boxx" required size="30"></td>
             </tr>

			 <tr>
               <td height="35">STATUS:</td>
               <td height="35"><select name="" id="boxx" required>

					<option value="">--Please Select--</option>
					<option value="TRAINER">Trainer</option>
					<option value="MEMBER">Member</option>

				</select></td>
             </tr>
			
	    <tbody id="plandetls">
             
            </tbody>

             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Submit" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   


		</body>
</html>