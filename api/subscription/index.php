<?php

  $entryUUID = $GET['entryUUID'];

// look in pingdirectory for current consent

  $url = "https://dir.tu.demoenvi.com:8443/directory/v1/entryUUID=" . $entryUUID . ",ou=People,dc=example,dc=com";

  $response = \Httpful\Request::get($url)
  ->authenticateWith('cn=Directory Manager', '2FederateM0re')
  ->expectsJson()
  ->send();

  $responseCount = "{$response->body->size}";
  $responseData = json_decode($response);
  $responsePretty = json_encode($responseData, JSON_PRETTY_PRINT);

  echo $response;

  // // iterate thru existing consents to find any

  // for ($x = 0; $x < $responseCount; $x = $x + 1) {

  //   $id = "{$response->body->_embedded->consents[$x]->id}";
  //   $status = "{$response->body->_embedded->consents[$x]->status}";
  //   $createdDate = "{$response->body->_embedded->consents[$x]->createdDate}";
  //   $version = "{$response->body->_embedded->consents[$x]->definition->version}";
  //   $definitionId = "{$response->body->_embedded->consents[$x]->definition->id}";

?>