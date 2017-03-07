<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin SNMPTN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="snmptn" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/fontgooglefamily.css" rel="stylesheet">
</head>
<body>
<!--<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Nilai</strong></th>
<th><strong>Universitas</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["nama"]; ?></td>
<td align="center"><?php echo $row["nilai"]; ?></td>
<td align="center"><?php echo $row["universitas"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div> -->
<div class="wthree_agile_admin_info">
<?php include 'navmenu.php'; ?>
				<div class="inner_content_w3_agile_info two_in">
									<!-- tables -->
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">Basic Implementation</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>No</th>
												<th>Name</th>
												<th>Nilai</th>
												<th>Universitas</th>
												<th>Universitas 2</th>
												<th>Ubah</th>
												<th>Delete</th>
											  </tr>
											</thead>
											<tbody>
											<?php
											$count=1;
											$sel_query="Select * from new_record ORDER BY id desc;";
											$result = mysqli_query($con,$sel_query);
											while($row = mysqli_fetch_assoc($result)) { ?>
											  <tr>
												<td><?php echo $count; ?></td>
												<td><?php echo $row["nama"]; ?></td>
												<td><?php echo $row["nilai"]; ?></td>
												<td><?php echo $row["universitas"]; ?></td>					
												<td><?php echo $row["universitas2"]; ?></td>
												<td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
											    <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
											  </tr>
											<?php $count++; } ?>
											</tbody>
										  </table>
									
									  <code class="js">
										$('#table').basictable();
									  </code>
								</div
				</div>
		</div>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		  </script>
		  <script src="js/serial.js"></script>
		  <script src="js/export.js"></script>	
		  <script src="js/light.js"></script>
  		  <script src="js/gnmenu.js"></script>
          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		  <script src="js/classie.js"></script>
		  <script src="js/jquery.nicescroll.js"></script>
		  <script src="js/scripts.js"></script>
		  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>
</html>