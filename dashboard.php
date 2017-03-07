<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Admin SNMPTN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="snmptn" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
			<?php include 'navmenu.php'; ?>

		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
					   <div id="col-sm-4" class="agile_top_w3_grids">
					          <ul class="ca-menu">
								<li>
										<a href="#">
											<div class="button">
													<p class="btnText">Lihat</p>
													<div class="btnTwo">
													  <p class="btnText2">GO!</p>
													</div>
											</div>
											<i class="fa fa-group" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main five">49,436</h4>
												<h3 class="ca-sub five">Lihat Profile</h3>
											</div>
										</a>
									</li>
									<li><?php
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
$row = mysqli_fetch_assoc($result); 
?>
										<a href="edit.php?id=<?php echo $row["id"]; ?>">	
											<div class="button">
													<p class="btnText">Edit</p>
													<div class="btnTwo">
													  <p class="btnText2">GO!</p>
													</div>
											</div>
										  <i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one">26,808</h4>
												<h3 class="ca-sub one">Edit Profile</h3>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="button">
													<p class="btnText">READY</p>
													<div class="btnTwo">
													  <p class="btnText2">GO!</p>
													</div>
											</div>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main three">49,436</h4>
												<h3 class="ca-sub three">Cek Kuota</h3>
											</div>
										</a>
									</li>
									<li>
										<a href="daftarsnmptn.php">
											<div class="button">
													<p class="btnText">Daftar</p>
													<div class="btnTwo">
													  <p class="btnText2">GO!</p>
													</div>
											</div>
											<i class="fa fa-check" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four">30,808</h4>
												<h3 class="ca-sub four">Daftar SNMPTN</h3>
											</div>
										</a>
									</li>
									<li>
										<a href="cekpendaftar.php">
											<div class="button">
													<p class="btnText">Cek</p>
													<div class="btnTwo">
													  <p class="btnText2">GO!</p>
													</div>
											</div>
											<i class="fa fa-check" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main two">30,808</h4>
												<h3 class="ca-sub two">Cek Pendaftar</h3>
											</div>
										</a>
									</li>
									<div class="clearfix"></div>
								</ul>
					   </div>
					   
					 <!-- //agile_top_w3_grids-->
				
						<!-- /weather_w3_agile_info-->
						<div class="weather_w3_agile_info agile_info_shadow">
						  <div class="weather_w3_inner_info">
						      
							     <div class="over_lay_agile">
								  <h3 class="w3_inner_tittle">Prakiraan Cuaca</h3>
						       	  <ul>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-day" width="60" height="60"></canvas>
										</figure>
										<h3>25 °C</h3>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="clear-day" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>WED</h4>
											<h5>27 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="snow" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>THU</h4>
											<h5>13 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-night" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>FRI</h4>
											<h5>18 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="cloudy" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SAT</h4>
											<h5>15 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="fog" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SUN</h4>
											<h5>11 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
								</div>
							</div>	
						</div>
						<!-- //weather_w3_agile_info-->
					</div>
				   
					<!-- //inner_content_w3_agile_info-->
				 </div>
			</div>
		</div>

		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© SNMPTNN. All Rights Reserved. Built with Love for <a href="https://ilang.in" target="_blank">MBD D</a> </p>
</div>	
<!--copy rights end here-->

				<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		        <script src="js/serial.js"></script>
				<script src="js/export.js"></script>	
				<script src="js/light.js"></script>
				<script src="js/modernizr.custom.js"></script>
				<script src="js/classie.js"></script>
				<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		
				
<!-- /circle-->
	 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
	<!-- //circle -->
	<!--skycons-icons-->
<script src="js/skycons.js"></script>
<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#fff"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
<!--//skycons-icons-->
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>