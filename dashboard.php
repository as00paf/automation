<?php 
	$isCameraEnabled = false;
?>

<h1>Welcome Home</h1>
<div class="container">
	<div class="container">
	
		<ul class="nav nav-tabs">
			<!-- Camera -->
			<?php 
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
	
	<div class="container" id="tab_content"/>
</div>