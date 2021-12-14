<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= $title; ?></title>
	<!-- Favicon-->
	<link rel="icon" href="<?= base_url('assets/images/logoweb.png') ?>" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?= base_url('assets/plugins/node-waves/waves.css') ?>" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?= base_url('assets/plugins/animate-css/animate.css') ?>" rel="stylesheet" />

	<!-- Sweet Alert Css -->
	<link href="<?= base_url('assets/plugins/sweetalert/sweetalert.css') ?>" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?= base_url('assets/css/themes/all-themes.css') ?>" rel="stylesheet" />

</head>

<body class="signup-page">
	<div class="signup-box">
		<div class="logo">
			<a href="javascript:void(0);"><b>Clean Your Area</b></a>
			<center><h2 style="color: white;">Total Clean !!</h2></center>
		</div>
		<div class="card">
			<div class="body">
				<?= form_open_multipart(site_url('akses/daftar')); ?>
				<div class="msg">Silahkan untuk daftar dahulu</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">person</i>
					</span>
					<div class="form-line">
						<input type="text" name="nama" id="nama" value="<?= $val['nama']; ?>" class="form-control" placeholder="Username" maxlength="50" required autofocus>
					</div>
				</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">lock</i>
					</span>
					<div class="form-line">
						<input type="password" name="password" id="password" value="<?= $val['password']; ?>" class="form-control" placeholder="Password" maxlength="13" required autofocus>
					</div>
				</div>
				<div class="input-group">
					<select name="level" id="level" class="form-control show-tick">
                        <option value="">--Pilih--</option>
                        <option value="member">member</option>
                    </select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<button class="btn btn-block bg-pink waves-effect" type="submit">Daftar</button>
						<input type="submit" name="simpan" value="<?= $btn; ?>" class="btn btn-primary m-t-15 waves-effect">
					</div>
				</div>
				<?php form_close() ?>
				<br>
			</div>
		</div>
	</div>

	<!-- #END# Vertical Layout -->

	<!-- Jquery Core Js -->
	<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.js') ?>"></script>

	<!-- Select Plugin Js -->
	<script src="<?= base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js') ?>"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?= base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') ?>"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?= base_url('assets/plugins/node-waves/waves.js') ?>"></script>

	<!-- Custom Js -->
	<script src="<?= base_url('assets/js/admin.js') ?>"></script>

	<!-- Demo Js -->
	<script src="<?= base_url('assets/js/demo.js') ?>"></script>

</body>

</html>
