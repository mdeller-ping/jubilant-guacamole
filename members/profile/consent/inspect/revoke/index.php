<?php

$consentId = $_GET['consent'];
if (! $consentId) {
  header ("Location: /");
}

$url = "https://dir.tu.demoenvi.com:8443/consent/v1/consents/" . $consentId;

$response = \Httpful\Request::patch($url)
->authenticateWith('cn=Directory Manager', '2FederateM0re')
->sendsJson()
->body(['status' => 'revoked'])
->send();

echo $response;

// header ("Location: " . $url);

?>