<?php
if($(twitch "whyiszeusantaken" "{{status}}") == "live"){
	$zeus = "whyiszeusantaken/";
}
if($(twitch "glasher" "{{status}}") == "live"){
	$glasher = "glasher/";
}
if($(twitch "whyiszeusantaken" "{{status}}") == "live"){
	$cawlos = "whyiszeusantaken/";
}
if($(twitch "zerexgodhammer" "{{status}}") == "live"){
	$reno = "zerexgodhammer/";
}
if($(twitch "kaniasaurus" "{{status}}") == "live"){
	$matt = "kaniasaurus/";
}
if($(twitch "flemking" "{{status}}") == "live") {
	$flem = "flemking/";
}
if($(twitch "jeditaquito" "{{status}}") == "live"){
	$breedo = "jeditaquito/";
}

if(isset($zeus) || isset($glasher) || isset($cawlos) || isset($matt) || isset($flem) || isset($breedo)){
	echo "You can view all the current ALWNN points of view at kadgar.net/live/atleastwerenotnerds" . $zeus . $glasher . $cawlos . $matt . $reno . $flem . $breedo
}else{
	echo "No one else from the squad is currently live."
}
?>