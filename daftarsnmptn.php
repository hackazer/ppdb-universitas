<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $nama =$_REQUEST['nama'];
    $nilai = $_REQUEST['nilai'];
	$universitas = $_REQUEST['universitas'];
	$universitas2 = $_REQUEST['universitas2'];
    $submittedby = $_SESSION["kodepeserta"];
    $ins_query="insert into new_record
    (`trn_date`,`nama`,`nilai`,`universitas`,`universitas2`,`submittedby`)values
    ('$trn_date','$nama','$nilai','$universitas','$universitas2','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SNMPTNN" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<title>Daftar Universitas</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/fontgooglefamily.css" rel="stylesheet">
</head>
<body>


<div class="wthree_general graph-form agile_info_shadow">
    <h3 class="w3_inner_tittle two">Daftar Universitas</h3>

    <div class="grid-1 form-body">
      <form name="form" class="form-horizontal" method="post">
	  <input type="hidden" name="new" value="1" />
        <div class="form-group">
          <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" name="nama" class="form-control1" id="focusedinput" placeholder=
            "Nama Lengkap" required/>
          </div>

          <div class="col-sm-2">
            <p class="help-block">Gunakan Nama Lengkap!</p>
          </div>
        </div>

        <div class="form-group">
          <label for="selector1" class="col-sm-2 control-label">Universitas</label>
          <div class="col-sm-8">
            <select name="universitas" id="selector1" class="form-control1">
              <option name="universitas">
                Institut Teknologi Sepuluh Nopember
              </option>

              <option name="universitas">
                Institut Teknologi Bandung
              </option>

              <option name="universitas">
                Institut Teknologi Adik ITS
              </option>

              <option name="universitas">
                Sekolah Tinggi Ilmu Belajar Komputer.
              </option>
            </select>
          </div>
        </div>
		
		  <div class="form-group">
          <label for="selector1" class="col-sm-2 control-label">Universitas 2</label>

          <div class="col-sm-8">
            <select name="universitas2" id="selector2" class="form-control1">
              <option name="universitas2">
                Institut Teknologi Sepuluh Nopember
              </option>

              <option name="universitas2">
                Institut Teknologi Bandung
              </option>

              <option name="universitas2">
                Institut Teknologi Adik ITS
              </option>

              <option name="universitas2">
                Sekolah Tinggi Ilmu Belajar Komputer.
              </option>
            </select>
          </div>
        </div>
		
        <div class="form-group">
          <label for="mediuminput" class="col-sm-2 control-label">Nilai UN</label>

          <div class="col-sm-8">
            <input type="text" name="nilai" class="form-control1" id="mediuminput" placeholder=
            "Nilau UN" required/>
          </div>
        </div>
		<div class="form-group">
          <label for="checkbox" class="col-sm-2 control-label"></label>
          <div class="col-sm-8">
            <div class="checkbox-inline">
              <label><input type="checkbox" /> Centang untuk setuju dengan persyaratan SNMPTNN.</label>
            </div>
          </div>
        </div>
	  <div class="col-sm-offset-2"><button type="submit" class="btn btn-default">Daftar</button></div>
      </form>
    </div>
  </div><!--//set-2-->
  <!--/set-3-->
  
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