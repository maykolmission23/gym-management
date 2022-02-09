<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Gym | Edit trainers </title>
    <link rel="stylesheet" href="../../css/tyle.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/cript.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="1style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

	<style>

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

		<h3>Edit Trainers</h3>
		<hr>
		
		<table class="table table-bordered datatable" id="table-1" border=1>
			<thead>
				<tr><h2>
					<th>Sl.No</th>
					<th>trainer ID</th>
					<th>Name</th>
					<th>EMAIL ID</th>
					<th>PASSWORD</th>
					<th>AGE</th>
					<th>SPECIALIZATION</th>
					<th>GENDER</th>
					<th>DATE OF BIRTH	</th>
					<th>PHONE NO</th>
					<th>JOINING DATE</th>
					<th>Action</th>
				</h2>
					
				</tr>
			</thead>
				<tbody>

				<?php
							$query  = "select * from trainers ORDER BY joining_date";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        $uid   = $row['t_id'];
							        $query1  = "select * from trainers WHERE t_id='$uid'";
							        $result1 = mysqli_query($con, $query1);
							        if (mysqli_affected_rows($con) == 1) {
							            while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
							                
											echo "<tr><td>".$sno."</td>";

							                echo "<td>" . $row1['t_id'] . "</td>";
							                
							                echo "<td>" . $row['t_name'] . "</td>";

											echo "<td>" . $row['t_email'] ."</td>";
											  
							                echo "<td>" . $row['t_pass'] . "</td>";

							                echo "<td>" . $row['t_age'] . "</td>";

							                echo "<td>" . $row['t_specialize'] . "</td>";

							                echo "<td>" . $row['t_gender'] . "</td>";

							                echo "<td>" . $row['t_dob'] ."</td>";

											echo "<td>" . $row['t_mobile'] ."</td>";

							                echo "<td>" . $row['joining_date'] ."</td>";
							                $sno++;
							       
							               
							                echo "<td><form action='read_trainer.php' method='post'><input type='hidden' name='name' value='" . $uid . "'/><input type='submit' class='a1-btn a1-blue' id='button1' value='View History ' class='btn btn-info'/></form><form action='trainers_edit1.php' method='post'><input type='hidden'  name='name' value='" . $uid . "'/><input type='submit' class='a1-btn a1-green' id='button1' value='Edit' class='btn btn-warning'/></form><form action='del_trainer.php' method='post' onsubmit='return ConfirmDelete()'><input type='hidden' name='name' value='" . $uid . "'/><input type='submit' value='Delete' width='20px' id='button1' class='a1-btn a1-orange'/></form></td></tr>";;
							                $msgid = 0;
							            }
							        }
							    }
							}
						?>									
					</tbody>
				</table>

	<script>
	
	function ConfirmDelete(name){
	
    var r = confirm("Are you sure! You want to Delete this User?");
    if (r == true) {
       return true;
    } else {
        return false;
    }
}

</script>
        </body>
</html>