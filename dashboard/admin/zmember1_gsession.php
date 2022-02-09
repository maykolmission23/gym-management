<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Gym | Get Session </title>
    <link rel="stylesheet" href="../../css/tyle.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/cript.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="1style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

	<style>

		.page-container .sidebar-menu #main-menu li#gsession > a {
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

		<h3>Get Session</h3>
		<hr>
		<table class="table table-bordered datatable" id="table-1" border=1>
			<thead>
				<tr><h2>
			
					<th>ID</th>
					<th>Trainer Name</th>
					<th>Contact</th>
					<th>Specialize</th>
					<th>Session Date</th>
					<th>Session Day</th>
					<th>Available Time</th>
					<th>Action</th>
				</h2>
					
				</tr>
			</thead>

		</body>
</html>