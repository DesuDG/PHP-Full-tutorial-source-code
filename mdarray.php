<?php
$program= array(
  array("PHP","HTML","Javascript"),
  array("Java","pyton","C++")
);
//echo $program[1][2];
for($row=0; $row<2;$row++){
  echo "Row number $row";
  echo "<br>";
  for($col=0; $col<3; $col++){
    echo $program[$row][$col];
    echo "<br>";
  }
}
?>