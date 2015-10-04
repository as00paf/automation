
$(document).ready(
	function() {
	
	//Set tab content
	/*$("#content").load("dashboard.php", null, function(){
		//Tab Section
		isCameraEnabled = false
		if(isCameraEnabled){
			showTab("section_camera");
		}else{
			showTab("section_tv");
		}
	});*/
	
	//Site nav
	$(".sitenav a").on("click", function(){
		$(".sitenav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
		
		console.log("parent id : " + $(this).parent().attr("id"));
		console.log("this id : " + $(this).attr("id"));
		
		switch($(this).parent().attr("id")){
			case "nav_dashboard" :
				if(isCameraEnabled){
					showTab("section_camera");
				}else{
					showTab("section_tv");
				}
				break;
		}
	});
	$("#nav_dashboard").addClass("active");
	addRemoteButtonListener();
	
});

function showSection(id){
	console.log("showSection() called with id : " + id);
	
	//Set tab content
	var url = id + ".php";
	$("#content").load(url, null, function(){
		if(id == "dashboard"){
			showTab("section_tv")
		}else if(id == "remote"){
			addRemoteButtonListener();
		}
	});
}

function showTab(id){
	//console.log("showTab() called with id : " + id);
	
	//Get tab content
	var url = "";
	switch(id){
		case "section_tv":
			url = "dashboard_tab_tv.php";
			break;
		case "section_camera":
			url = "dashboard_tab_cam.php";
			break;
		case "section_ouya":
			url = "dashboard_tab_ouya.php";
			break;
		case "section_ps3":
			url = "dashboard_tab_ps3.php";
			break;
		case "section_nexus":
			url = "dashboard_tab_nexus.php";
			break;
		case "section_audio":
			url = "dashboard_tab_audio.php";
			break;
	}
	
	//Set tab content
	$("#tab_content").load(url, null, addButtonListener);
	
	//Deactivate current active tab
	//console.log("current active tab", $("li[class*='active']").attr("id"));	
	$("li[class*='active']").attr("class", "");
	
	//Activate selected tab
	console.log("new active tab", $("#" + id).parent().attr("id"));
	$("#" + id).parent().attr("class", "active");
	
	//Site nav
	$("#nav_dashboard").addClass("active")
}

//Buttons
function addButtonListener(){
	$("button").click(onButtonClicked);
}

function addRemoteButtonListener(){
	console.log("addRemoteButtonListener()");
	
	$(".phone3").click(onRemoteButtonClicked);
	$(".phone4").click(onRemoteButtonClicked);
	$(".phone5").click(onRemoteButtonClicked);
}

function onButtonClicked() {
	console.log("onButtonClicked with id " + this.id);
	path = "";
	
	switch(this.id){
		case "btn_power_tv":
			console.log("Calling Power TV Command on Automation Server")
			path = "PowerTV";
			break;
		case "btn_power_cable":
			console.log("Calling Power Cable Command on Automation Server")
			path = "PowerCable";
			break;
		case "btn_source_tv":
			console.log("Calling Source TV Command on Automation Server")
			path = "SourceTV";
			break;
		case "btn_source_ouya":
			console.log("Calling Source OUYA Command on Automation Server")
			path = "SourceSAT";
			break;
		case "btn_source_ps3":
			console.log("Calling Source PS3 Command on Automation Server")
			path = "SourceAUX";
			break;
		case "btn_source_nexus":
			console.log("Calling Source BD/DVD Command on Automation Server")
			path = "SourceBDDVD";
			break;
		/*default:
			alert("Button " + this.id + " not set up yet !");
			return;*/
			break;
	}
	
	$.ajax({
			type: "GET",
			url: "http://dev.pafoid.com:2886/index.html?" + path,
			username: 'user',
			password: 'pass',
			crossDomain : true,
			xhrFields: {
				withCredentials: true
			}
		})
}

function onRemoteButtonClicked() {
	console.log("onRemoteButtonClicked with id " + this.id + " and action : " + this.getAttribute('data-action'));
	var action = this.getAttribute('data-action');

	path = "";
	
	switch(action){
		case "button_power":
			console.log("Calling Power TV Command on Automation Server");
			path = "PowerTV";
			break;
		case "button_source_tv":
			console.log("Calling Source TV Command on Automation Server");
			path = "SourceTV";
			break;
		case "button_source_ouya":
			console.log("Calling Source OUYA Command on Automation Server");
			path = "SourceSAT";
			break;
		case "button_source_ps3":
			console.log("Calling Source PS3 Command on Automation Server");
			path = "SourceAUX";
			break;
		case "button_source_nexus":
			console.log("Calling Source PS3 Command on Automation Server");
			path = "SourceBDDVD";
			break;
		case "button_1":
		case "button_2":
		case "button_3":
		case "button_4":
		case "button_5":
		case "button_6":
		case "button_7":
		case "button_8":
		case "button_9":
		case "button_0":
			path = action.slice(-1);
			console.log("Calling Number " + path +" on Automation Server");
			break;
		case "button_last":
			console.log("Calling Last Channel Command on Automation Server");
			path = "LastChannel";
			break;
		case "button_up":
			console.log("Calling Up Command on Automation Server");
			path = "Up";
			break;
		case "button_down":
			console.log("Calling Down Command on Automation Server");
			path = "Down";
			break;
		case "button_left":
			console.log("Calling Left Command on Automation Server");
			path = "Left";
			break;
		case "button_right":
			console.log("Calling Right Command on Automation Server");
			path = "Right";
			break;
		case "button_ok":
			console.log("Calling Enter Command on Automation Server");
			path = "Enter";
			break;
		case "button_back":
			console.log("Calling Exit Command on Automation Server");
			path = "Exit";
			break;
		case "button_info":
			console.log("Calling Info Command on Automation Server");
			path = "Info";
			break;
		case "button_volumeup":
			console.log("Calling Volume Up Command on Automation Server");
			path = "RaiseVolume1";
			break;
		case "button_volumedown":
			console.log("Calling Volume Down Command on Automation Server");
			path = "LowerVolume1";
			break;
		case "button_mute":
			console.log("Calling Mute Command on Automation Server");
			path = "Mute";
			break;
		case "button_rdc":
			console.log("Calling Radio-Canada Channel Command on Automation Server");
			path = "ChannelRDC";
			break;
		case "button_rds":
			console.log("Calling RDS Channel Command on Automation Server");
			path = "ChannelRDS";
			break;
		case "button_spike":
			console.log("Calling Spike Channel Command on Automation Server");
			path = "ChannelSpike";
			break;
		case "button_fox":
			console.log("Calling FOX Channel Command on Automation Server");
			path = "ChannelFox";
			break;
		default:
			alert("Button " + action + " not set up yet !");
			return;
			break;
	}
	
	$.ajax({
			type: "GET",
			url: "http://dev.pafoid.com:2886/index.html?" + path,
			username: 'user',
			password: 'pass',
			crossDomain : true,
			xhrFields: {
				withCredentials: true
			}
		});
		
	// enable vibration support
	navigator.vibrate = navigator.vibrate || navigator.webkitVibrate || navigator.mozVibrate || navigator.msVibrate;

	if (navigator.vibrate) {
		// vibration API supported
		navigator.vibrate(100);
	}
}
