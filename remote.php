<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Remote</title>
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
				<h1>Remote</h1>
				<div class="container">
					<div class="container">
						<div class="visible-phone">
							<div id="phone">
								<div>
									<button class="phone5" data-action="button_power"><i class="material-icons" style="color:red">power_settings_new</i></button><!-- Power 
									--><button class="phone5" data-action="button_source_tv"><i class="material-icons" style="color:gold">tv</i></button><!-- Source TV 
									--><button class="phone5" data-action="button_source_ouya"><i class="material-icons" style="color:orange">ondemand_video</i></button><!-- Source OUYA 
									--><button class="phone5" data-action="button_source_ps3"><i class="material-icons" style="color:darkblue">games</i></button><!-- Source PS3
									--><button class="phone5" data-action="button_source_nexus"><i class="material-icons" style="color:#A4C639">adb</i></button><!-- Source Nexus Player
									-->
								</div>
								<div>
									<button class="phone5" data-action="button_channelup"><i class="icon-plus"></i></button><!--
									--><button class="phone5" data-action="button"></button><!--
									--><button class="phone5 direction" data-action="button_up"><i class="glyphicon glyphicon-arrow-up"></i></button><!-- Up
									--><button class="phone5" data-action="button"></button><!--
									--><button class="phone5" data-action="button_volumeup"><i class="material-icons">volume_up</i></button>
								</div>
								<div>
									<button class="phone5" data-action="button_channeldown"><i class="icon-minus"></i></button><!--
									--><button class="phone5 direction" data-action="button_left"><i class="glyphicon glyphicon-arrow-left"></i></button><!--Left
									--><button class="phone5" data-action="button_ok"><i class="fa fa-circle"></i></button><!--Enter
									--><button class="phone5 direction" data-action="button_right"><i class="glyphicon glyphicon-arrow-right"></i></button><!--Right
									--><button class="phone5" data-action="button_volumedown"><i class="material-icons">volume_down</i></button>
								</div>
								<div>
								<div>
									<button style="margin-left: 20%;" class="phone5" data-action="button_back"><i class="material-icons">exit_to_app</i></button><!--
									--><button class="phone5 direction" data-action="button_down"><i class="glyphicon glyphicon-arrow-down"></i></button><!-- Down
									--><button class="phone5" data-action="button_info"><i class="material-icons">info_outline</i></button><!-- Info
									--><button class="phone5" data-action="button_mute"><i class="material-icons">volume_mute</i></button><!-- Mute
									-->
								</div>
								<div>
									<button class="phone3" data-action="button_1">1</button><!--1
									--><button class="phone3" data-action="button_2">2</button><!--2
									--><button class="phone3" data-action="button_3">3</button><!--3
									-->
								</div>
								<div>
									<button class="phone3" data-action="button_4">4</button><!--4
									--><button class="phone3" data-action="button_5">5</button><!--5
									--><button class="phone3" data-action="button_6">6</button><!--6
									-->
								</div>
								<div>
									<button class="phone3" data-action="button_7">7</button><!--7
									--><button class="phone3" data-action="button_8">8</button><!--8
									--><button class="phone3" data-action="button_9">9</button><!--9
									-->
								</div>
								<div>
									<button class="phone3" data-action="button_last"><i class="material-icons">settings_backup_restore</i></button><!--Last
									--><button class="phone3" data-action="button_0">0</button><!--0
									--><button class="phone3" data-action="button"></button><!--
									-->
								</div>
								<div>
									<button class="phone4" data-action="button_rdc"><img src="img/ici_rdc.png" class="channel_logo"/></button><!--ICI Radio-Canada
									--><button class="phone4" data-action="button_rds"><img src="img/rds.png" class="channel_logo"/></button><!--RDS
									--><button class="phone4" data-action="button_spike"><img src="img/spike.png" class="channel_logo"/></button><!--Spike
									--><button class="phone4" data-action="button_fox"><img src="img/fox.png" class="channel_logo"/></button><!--FOX
									-->
								</div>
								<br />
								<br />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>

</html>