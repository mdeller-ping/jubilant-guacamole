<?php
header('Content-Type: application/json');
$myObj->transUnionScore = rand (300, 830);
$myJSON = json_encode($myObj);
echo $myJSON;
?>
