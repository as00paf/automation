<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Settings</title>
			<meta charset="utf-8"> 
			<meta name="viewport" content="width=device-width, initial-scale=1">
		</head>

	<!-- CSS-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css?<?php echo time();?>">
	<link href="css/hover-min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	
	<!-- JS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/actions.js?<?php echo time();?>"></script>

	<script language="Javascript" type="text/javascript">
	var TIMEOUT = 10000;
	/*var refreshInterval = setInterval(function() {
	  var random = Math.floor(Math.random() * Math.pow(2, 31));
	  $('img#camera').attr('src', 'http://192.168.1.122:8080/shot.jpg?i=' + random);
	}, TIMEOUT);*/   
	</script>

	<link rel="icon" href="favicon.ico?<?php echo time();?>" type="image/x-icon"/>

	<!-- PHP-->
	<?php
		require_once 'Mobile_Detect.php';
		$detect = new Mobile_Detect();
	?>

	<body>

		<!-- Nav Bar -->
		<div id="nav_bar" class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div id="nav_bar_header" class="navbar-header">

					<a href="#" class="pull-left"><img class="navbar_logo hvr-float" src="img/home_white.png"/></a>

					<a href="#" class="navbar-brand"> Home Automation
					</a>

					<button class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">
					<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right sitenav" id="nav_bar_menu">
						<li id="nav_dashboard" class="active"><a id="dashboard" href="index.php"><i class="material-icons pull-left pull-top">dashboard</i><span style="margin-left:10px;">Dashboard</span></a></li>
						<li id="nav_remote"><a id="remote" href="remote.php"><i class="material-icons pull-left pull-top">settings_remote</i><span style="margin-left:10px;">Remote</span></a></li>
						<li id="nav_documentation"><a id="documentation" href="documentation.php" ><i class="material-icons pull-left pull-top">description</i><span style="margin-left:10px;">Documentation</span></a></li>
						<li id="nav_settings"><a id="settings" href="settings.php"><i class="material-icons pull-left pull-top">settings</i><span style="margin-left:10px;">Settings</span></a></li>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div class="container">
			<div class="jumbotron" id="content">
				<h1>Settings</h1>
				<div class="container">
					<div class="container">
						
					</div>
				</div>				
			</div>
		</div>

	</body>

</html>