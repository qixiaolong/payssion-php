<?php

// Send an empty HTTP 200 OK response to acknowledge receipt of the notification
header('HTTP/1.1 200 OK');
 
$api_key  = ''; //your api key
 
// Assign payment notification values to local variables
$merchant_id = $_POST['merchant_id'];
$app_name = $_POST['app_name'];
$pm_id = $_POST['pm_id'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$track_id = $_POST['track_id'];
$sub_track_id = $_POST['sub_track_id'];
$state = $_POST['state'];
 
$check_array = array(
		$merchant_id,
		$app_name,
		$pm_id,
		$amount,
		$currency,
		$track_id,
		$sub_track_id,
		$state,
		$api_key
);
$check_msg = implode('|', $check_array);
$check_sig = md5($check_msg);
$notify_sig = $_POST['notify_sig'];
if ($notify_sig == $notify_sig) {
	//handle payment notification
}
