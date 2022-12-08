<?php
//associative array
$age=array("nahom"=>"25","melat"=>"21");
//echo $age["melat"];
//asort($age);
krsort($age);
foreach($age as $x=>$x_value){
  echo $x.$x_value;
  echo "<br>";
}
?>