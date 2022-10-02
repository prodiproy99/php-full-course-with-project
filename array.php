<?php

//Arrays

// $colors = array("blue", "yellow");
// echo $colors[0];
// // echo $colors;
// print_r($colors);

//indexed array
/**
 * $colors = array("blue", "green", "yellow", "white", "black");
$colorsLenght=count($colors);
// echo $colorsLenght;
for($x = 0; $x<$colorsLenght; $x++){
    echo $colors[$x];
    echo "<br>"; 
}
 */
//2) Associative array
$subject=array("Prodip" => "CSE", "Dipto" => "Programmer");
// echo $subject["Prodip"];
// echo "<br>"; 
// echo $subject["Dipto"];

foreach($subject as $x=>$value){
    echo "key=".$x.", .value=". $value;
    echo "<br>"; 
}
?>