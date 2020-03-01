<?php

//the substr_replace doesnot change the actual string.It just return the new string that would have been made after doing the replacement under decision
   $foo= 'My name is Arun Bastola';
   echo substr_replace($foo,'helo',4,2) ;
   echo '<br>';
   echo substr_replace("Arun","Maka",$foo);
 ?>
s