<?php

//To tokenize a new string, call strtok() with the string argument again:
$string = "My name is Arun Bastola.";
 $token = strtok($string,' ');
 
echo "$token<br>";
    $token = strtok(" ");
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(" ");
   }
?>