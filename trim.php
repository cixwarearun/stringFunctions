<?php
//Remove characters from both sides of a string ("A" in "Arun" and "a" in "Bastola"):
$str = "Arun Bastola";
echo $str . "<br>";
echo trim($str,"Aa");
?>
