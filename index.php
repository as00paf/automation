<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Home Automation</title>
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
				<h1>Welcome Home</h1>
				<div class="container">
					<div class="container">
					
						<ul class="nav nav-tabs">
							<!-- Camera -->
							<?php 
								$isCameraEnabled = false;
								if($isCameraEnabled){
									echo '<li class="active" id="section_camera" href="javascript:void(0);" onclick="showTab(this.id);"><a href="#"><i class="material-icons pull-left">videocam</i>    <span style="margin-left:10px;">Camera</span></a></li>';
								}
							?>
						
							<li id="item_tv" class="<?php 
													if(!$isCameraEnabled){
														echo "active ";
												} ?>">
								<a id="section_tv" href="javascript:void(0);" onclick="showTab(this.id);" >
									<i class="material-icons pull-left">tv</i> <span style="margin-left:10px;">TV</span> 
								</a>
						  
							</li>
						  
							<li><a id="section_ouya" href="javascript:void(0);" onclick="showTab(this.id);"><i class="material-icons pull-left">ondemand_video</i>    <span style="margin-left:10px;">OUYA</span></a></li>
							<li><a id="section_ps3" href="javascript:void(0);" onclick="showTab(this.id);"><i class="material-icons pull-left">games</i>    <span style="margin-left:10px;">PS3</span></a></li>
							<li><a id="section_nexus" href="javascript:void(0);" onclick="showTab(this.id);"><i class="material-icons pull-left">adb</i>    <span style="margin-left:10px;">Nexus Player</span></a></li>
							<li><a id="section_audio" href="javascript:void(0);" onclick="showTab(this.id);"><i class="material-icons pull-left">radio</i>    <span style="margin-left:10px;">Audio Receiver</span></a></li>
						</ul>
					</div>
					
					<div class="container" id="tab_content">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">TV Commands</h3>
						  </div>
						  <div class="panel-body">
							<h4>General</h4>
							<div class="container" style="display: block inline;">
								<button title="Powers on the TV" type="button" class="btn btn-danger" id="btn_power_tv"><i class="material-icons pull-left pull-top">power_settings_new</i><span style="margin-left:10px;">Power TV</span></button>
								<button title="Powers on the cable box" type="button" class="btn btn-danger" id="btn_power_cable"><i class="material-icons pull-left pull-top">power_settings_new</i><span style="margin-left:10px;">Power Cable</span></button>
								<button title="Sets the TV as source on the receiver" type="button" class="btn btn-primary" id="btn_source_tv"><i class="material-icons pull-left pull-top">tv</i><span style="margin-left:10px;">Set as Source</span></button>
							</div>
							
							<br />
							
							<h4>Source</h4>
							<div class="container" style="display: block inline;">
								<button title="Sets the TV as source on the receiver" type="button" class="btn btn-primary" id="btn_source_tv"><i class="material-icons pull-left pull-top">tv</i><span style="margin-left:10px;">TV</span></button>
								<button title="Sets the OUYA as source on the receiver" type="button" class="btn btn-primary" id="btn_source_ouya"><i class="material-icons pull-left pull-top">ondemand_video</i><span style="margin-left:10px;">OUYA</span></button>
								<button title="Sets the PlayStation 3 as source on the receiver" type="button" class="btn btn-primary" id="btn_source_ps3"><i class="material-icons pull-left pull-top">games</i><span style="margin-left:10px;">PS3</span></button>
								<button title="Sets the Nexus Player as source on the receiver" type="button" class="btn btn-primary" id="btn_source_nexus"><i class="material-icons pull-left pull-top">adb</i><span style="margin-left:10px;">Nexus Player</span></button>
							</div>
							
							<br />
							
							<h4>Sound</h4>
							<div class="container" style="display: block inline;">
								<button title="Raise the volume by 1 on the receiver" type="button" class="btn btn-warning" id="btn_raise_1"><i class="material-icons pull-left pull-top">volume_up</i><span style="margin-left:10px;">Raise by 1</span></button>
								<button title="Raise the volume by 10 on the receiver" type="button" class="btn btn-warning" id="btn_raise_10"><i class="material-icons pull-left pull-top">volume_up</i><span style="margin-left:10px;">Raise by 10</span></button>
								<button title="Lower the volume by 1 on the receiver" type="button" class="btn btn-warning" id="btn_lower1"><i class="material-icons pull-left pull-top">volume_down</i><span style="margin-left:10px;">Lower by 1</span></button>
								<button title="Lower the volume by 10 on the receiver" type="button" class="btn btn-warning" id="btn_lower10"><i class="material-icons pull-left pull-top">volume_down</i><span style="margin-left:10px;">Lower by 10</span></button>
								<button title="Mute or unmute the volume on the receiver" type="button" class="btn btn-warning" id="btn_mute"><i class="material-icons pull-left pull-top">volume_mute</i><span style="margin-left:10px;">Mute/Unmute</span></button>
							</div>
							
							<br />
							
							<h4>Channel</h4>
							<div class="container" style="display: block inline;">
								<button title="Change the TV channel to Radio-Canada" type="button" class="btn btn-info" id="btn_channel_news"><i class="fa fa-newspaper-o"></i><span style="margin-left:10px;">News</span></button>
								<button title="Change the TV channel to RDS" type="button" class="btn btn-info" id="btn_channel_rds"><i class="fa fa-futbol-o"></i><span style="margin-left:10px;">RDS</span></button>
							</div>
							
							<br />
							
							
						  </div>
						  
						  <br />
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>

</html>