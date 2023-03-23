<?php
# Currently does not work but here is the code that i used to try executing a python script with input values.
$args = '3 2 41 1 10 1 1 0 0';

#$command = "python3 TestPrediction.py";

$output = shell_exec("python TestPrediction.py $args");

if ($output == null){
    echo "Output is null";
}
else {
    echo $output;
}


?>