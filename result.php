<?php

//First get all the variables from question page
$TS = $_POST['TS'];
$MP = $_POST['MP'];

//Eppworth
$EP1 = $_POST['EP1'];
$EP2 = $_POST['EP2'];
$EP3 = $_POST['EP3'];
$EP4 = $_POST['EP4'];
$EP5 = $_POST['EP5'];
$EP6 = $_POST['EP6'];
$EP7 = $_POST['EP7'];
$EP8 = $_POST['EP8'];

$NC = $_POST['NC'];
$W = $_POST['W'];
$H = $_POST['H'];

$PPW = $_POST['PPW'];
$RN = $_POST['RN'];
$MN = $_POST['MN'];

//Sum up the EP score
$EPS = $EP1 + $EP2 + $EP3 + $EP4 + $EP5 + $EP6 + $EP7 + $EP8;


//Neck Circumference Converted
if ($NC >= "40"){
    $CNC = "1";
} else {
    $CNC = "0";
}

//Calculate BMI
$BMI = round(($W)/($H**2));



?>