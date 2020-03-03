
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
              .a{
                color:blue;
              }
              .e{
                color:yellowgreen;
              }
              .i{
                color:olivedrab;
              }
              .o{
                color:palevioletred;
              }
              .u{
                color:green;
              }

        </style>
      </head>
      <body >
                <?php
                  $task =("Lorem ipsum dolor sit amet, esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla esse pariatur.
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt esse mollit anim id est laborum.");

                  //change vowels to uppercase

                
                  
                $vowel= array('a','e','i','o','u');
                $replace=array('<span class="a">A</span>','<span class="e">E</span>',
                '<span class="i">I</span>','<span class="o">O</span>','<span class="u">U</span>');
                echo str_replace($vowel,$replace,$task);
          
                    

                
                  
                  ?>
        
      </body>
      </html>

