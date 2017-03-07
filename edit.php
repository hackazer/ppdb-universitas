<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<link rel="stylesheet" href="assets/css/style.css" />

<h1>Edit Profile</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$nama =$_REQUEST['nama'];
$nilai =$_REQUEST['nilai'];
$universitas =$_REQUEST['universitas'];
$universitas2 =$_REQUEST['universitas2'];
$submittedby = $_SESSION["kodepeserta"];
$update="update new_record set trn_date='".$trn_date."', nama='".$nama."', nilai='".$nilai."',universitas='".$universitas."',universitas2='".$universitas2."',submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="kodepeserta" placeholder="Kode Peserta" required value="<?php echo $row['kodepeserta'];?>" /></p>
<p><input type="text" name="nama" placeholder="Nama" required value="<?php echo $row['nama'];?>" /></p>
<p><input type="text" name="nilai" placeholder="Nilai UN" required value="<?php echo $row['nilai'];?>" /></p>
<p><input type="text" name="universitas" placeholder="Universitas" required value="<?php echo $row['universitas'];?>" /></p>
<p><input type="text" name="universitas2" placeholder="Universitas 2" required value="<?php echo $row['universitas2'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>