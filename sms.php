<?php

$apiKey = urlencode("vsJsBX/EGqs-JVgCrMsonXbsNmjoNvpnwLNuYVMmk4");
$sender = urlencode("TXTLCL");
$phone2=
$message = rawurlencode("This is your message");
 // Prepare data for POST request
$data = array("apikey" => $apiKey, "numbers" => '$phone2', 'sender' => $sender, 'message' => $message);
// Send the POST request with cURL
$ch = curl_init("https://api.textlocal.in/send/");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
?>