<?php
$input_values = '"3 2 41 1 10 1 1 0 0"'; // added ""
$command = 'python TestPrediction.py ' . escapeshellarg($input_values); //python instead of python3 worked for my machine
$output = shell_exec($command);

if ($output == null){
    echo "Output is null";
}
else {
    echo $output;
}


?>