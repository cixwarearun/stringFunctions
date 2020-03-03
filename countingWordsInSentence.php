<?php
  $task =("Lorem ipsum dolor sit amet, esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla esse pariatur.
   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt esse mollit anim id est laborum");

   //counting words in each sentence
   
  $task1 =  (explode('.',$task));
  // echo '<br>';
  // echo '<br>';
  // print_r('The number of words in First Sentence is'.' '.str_word_count($task1[0]));
  // echo '<br>';
  // echo '<br>';
  // print_r('The number of words in Second Sentence is'.' '.str_word_count($task1[1]));
  // echo '<br>';
  // echo '<br>';
  // print_r('The number of words in Third Sentence is'.' '.str_word_count($task1[2]));
  // echo '<br>';
  // echo '<br>';
  // print_r('The number of words in Fourth Sentence is'.' '.str_word_count($task1[3]));

  foreach($task1 as $task)
  {
    print_r(str_word_count($task).'<br>');
  }

 ?>