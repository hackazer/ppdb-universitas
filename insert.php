<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $nama =$_REQUEST['nama'];
    $nilai = $_REQUEST['nilai'];
	$universitas = $_REQUEST['universitas'];
    $submittedby = $_SESSION["kodepeserta"];
    $ins_query="insert into new_record
    (`trn_date`,`nama`,`nilai`,`universitas`,`submittedby`)values
    ('$trn_date','$nama','$nilai','$universitas','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet"></head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Daftar Universitas</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="nama" placeholder="Enter Nama" required /></p>
<p><input type="text" name="nilai" placeholder="Enter Nilai" required /></p>
<!-- <p><input type="text" name="universitas" placeholder="Pilih Universitas" required /></p>-->
<div class="form-group">
																											<label for="universitas" class="col-sm-2 control-label">Dropdown Select</label>
<div class="col-sm-8"><select name="universitas" id="universitas" class="form-control1">
																												<option>Lorem ipsum dolor sit amet.</option>
																												<option>Dolore, ab unde modi est!</option>
																												<option>Illum, fuga minus sit eaque.</option>
																												<option>Consequatur ducimus maiores voluptatum minima.</option>
																											</select></div>
																										</div>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>