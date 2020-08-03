<?php
header('Content-Type: application/json');
$seedNumber = rand (320, 830);
$rangeHigh = $seedNumber + 20;
$rangeLow = $seedNumber - 20;

$myObj->TransUnionScore = rand ($rangeLow, $rangeHigh);
$myObj->ExperianScore = rand ($rangeLow, $rangeHigh);
$myObj->EquifaxScore = rand ($rangeLow, $rangeHigh);
$myJSON = json_encode($myObj);
echo $myJSON;
?>
