<?php

//First get all the variables from question page
$TS = $_POST['TS']; //Tonsil Size
$MP = $_POST['MP']; //Mallampati Score

//Eppworth
$EP1 = $_POST['EP1'];
$EP2 = $_POST['EP2'];
$EP3 = $_POST['EP3'];
$EP4 = $_POST['EP4'];
$EP5 = $_POST['EP5'];
$EP6 = $_POST['EP6'];
$EP7 = $_POST['EP7'];
$EP8 = $_POST['EP8'];

$NC = $_POST['NC']; //Neck Circumference
$W = $_POST['W']; //Weight
$H = $_POST['H']; //Height

$PPW = $_POST['PPW']; //Posterior Pillar Webbing
$RN = $_POST['RN']; //Retrognathia
$MN = $_POST['MN']; //Micrognathia

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

//Check for obesity
if ($BMI >="30"){
    $OBE = "1";
} else {
    $OBE = "0";
}

//1.TS 2.MP 3.NC 4.CNC 5.EPS 6.OBE 7.PPW 8.RN 9.MN

$string = $TS . " " . $MP . " " . $NC . " " . $CNC . " " . $EPS . " " . $OBE . " " . $PPW . " " . $RN . " " . $MN;
$command = 'TestPrediction.exe ' . escapeshellarg($string); //python instead of python3 worked for my machine
$output = shell_exec($command);

// test script to check if file is able to reach this command.
if ($output==NULL){
    echo "Output is NULL";
}

// Redirecting to appropriate .php file according to results obtained from prediction model.
if (strcmp($output,"[0]\n")==0){
    header("Location: result_negative.php");
} else if (strcmp($output,"[1]\n")==0){
    header("Location: result_positive.php");
} else {
    header("Location: errorPage.php");
}

?>