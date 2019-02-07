<!doctype html>
<html lang="en">

<head>
	<title>Data Barang | Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=base_url()?> assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url()?>assets/img/favicon.png">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/tablebarang.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?=base_url()?> assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar">
								<span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?=base_url('admin/index')?>" class="active"><i class="lnr lnr-file-add"></i> <span>Data Barang</span></a></li>
						<li><a href="<?=base_url('admin/nota')?>" class=""><i class="lnr lnr-list"></i> <span>Daftar Pesanan</span></a></li>
						<li><a href="<?=base_url('admin/data_pembeli')?>" class=""><i class="lnr lnr-license"></i> <span>Data Pembeli</span></a></li>
						<!-- <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li> -->
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Welcome Admin</h3>
						</div>
						<div class="panel-body">
							<form action="" method="get">
								<div class="input-group mb-3">
									<input type="text" name="keyword" class="form-control" placeholder="Masukkan pencarian..." aria-label="Recipient's username"
									 aria-describedby="button-addon2">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
									</div>
								</div>
							</form>
							<a href="<?= base_url('admin/tambah')?> " class="btn btn-primary">Tambah data</a>
							<div class="row">
								<div class="table-users">
									<div class="headertable">Data Barang</div>

									<table cellspacing="0">
										<tr>
											<th>Picture</th>
											<th>Id Barang</th>
											<th>Nama Barang</th>
											<th>Harga Barang</th>
											<th>Kategori</th>
										</tr>
										<?php foreach ($barang as $b ) : ?>
										<tr>
											<td><?= $b['gambar'] ?></td>
											<td><?= $b['id_barang'] ?></td>
											<td><?= $b['nama_barang'] ?></td>
											<td><?= $b['harga_barang'] ?></td>
											<td><?= $b['nama_kategori'] ?></td>
										</tr>
										<?php endforeach; ?>

									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- END OVERVIEW -->
					<div class="row">


						<!-- END MULTI CHARTS -->

						<div class="row">
							<div class="col-md-7">
								<!-- TODO LIST -->

								<!-- END TODO LIST -->
							</div>

						</div>

					</div>
				</div>
				<!-- END MAIN CONTENT -->
			</div>
			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017. Thanks for visit our website.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="assets/vendor/chartist/js/chartist.min.js"></script>
		<script src="assets/scripts/klorofil-common.js"></script>
		<script>
			$(function () {
				var data, options;

				// headline charts
				data = {
					labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
					series: [
						[23, 29, 24, 40, 25, 24, 35],
						[14, 25, 18, 34, 29, 38, 44],
					]
				};

				options = {
					height: 300,
					showArea: true,
					showLine: false,
					showPoint: false,
					fullWidth: true,
					axisX: {
						showGrid: false
					},
					lineSmooth: false,
				};

				new Chartist.Line('#headline-chart', data, options);


				// visits trend charts
				data = {
					labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
					series: [{
						name: 'series-real',
						data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
					}, {
						name: 'series-projection',
						data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
					}]
				};

				options = {
					fullWidth: true,
					lineSmooth: false,
					height: "270px",
					low: 0,
					high: 'auto',
					series: {
						'series-projection': {
							showArea: true,
							showPoint: false,
							showLine: false
						},
					},
					axisX: {
						showGrid: false,

					},
					axisY: {
						showGrid: false,
						onlyInteger: true,
						offset: 0,
					},
					chartPadding: {
						left: 20,
						right: 20
					}
				};

				new Chartist.Line('#visits-trends-chart', data, options);


				// visits chart
				data = {
					labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
					series: [
						[6384, 6342, 5437, 2764, 3958, 5068, 7654]
					]
				};

				options = {
					height: 300,
					axisX: {
						showGrid: false
					},
				};

				new Chartist.Bar('#visits-chart', data, options);


				// real-time pie chart
				var sysLoad = $('#system-load').easyPieChart({
					size: 130,
					barColor: function (percent) {
						return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
					},
					trackColor: 'rgba(245, 245, 245, 0.8)',
					scaleColor: false,
					lineWidth: 5,
					lineCap: "square",
					animate: 800
				});

				var updateInterval = 3000; // in milliseconds

				setInterval(function () {
					var randomVal;
					randomVal = getRandomInt(0, 100);

					sysLoad.data('easyPieChart').update(randomVal);
					sysLoad.find('.percent').text(randomVal);
				}, updateInterval);

				function getRandomInt(min, max) {
					return Math.floor(Math.random() * (max - min + 1)) + min;
				}

			});

		</script>
</body>

</html>
