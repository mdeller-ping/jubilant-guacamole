<?php

header('Content-Type: application/json');

$username=$_GET['username'];
$title=$_GET['title'];
$body=$_GET['body'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://mdeller-pidsdk.pingapac.com/pidp/push/initiateMFA",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "username=" . $username . "&pushMessageTitle=" . $title . "&pushMessageBody=" . $body,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded",
    "Accept: application/json",
    ": "
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>