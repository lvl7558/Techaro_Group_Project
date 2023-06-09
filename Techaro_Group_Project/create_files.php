<?php
   $name = 'Create Files';
   include 'assets/php/top_nav.php';


  
?>
<div id="nav-mobile">
   <?php include 'assets/php/mobile_nav.php'; ?>
</div>


<div id="nav-desktop">
   <?php include 'assets/php/nav2.php'; ?>
</div>
   <main class="main1">
       <div>
           <h1>Making Files</h1>
       </div>
      


       <div>
           <h2>Build files</h2>
           <ol>
               <li>
                   <p>To create an ordinary file on a Unix system using the vi editor, you can use the following
                       command which will open a file with a given name:</p>
                       <div class="snippet">
           <pre><code class="language-bash">
               # Testing Unix (Bash) code here


               $ vi filename
           </code></pre> </div>
                  
               </li>
               <li>
                   <p>press i to open edit mode and write your content </p>


                   <div class="snippet">
           <pre><code class="language-bash">
               # Testing Unix (Bash) code here


               This is a unix file....I created it for the first time.....
           </code></pre> </div>
                 
               </li>
               <li>
                   <p>Once done: </p>
                   <p>Press esc to come out of the edit mode</p>
                   <p>Press Shift + ZZ together to come out of the file completely</p>
               </li>
           </ol>
       </div>
       <div>
           <h2>Variables</h2>
           <ul>
               <li>Variables are used in Unix shell scripts to store values that can be used later in the program</li>
               <li>The name of a variable can contain only letters (a to z or A to Z), numbers ( 0 to 9) or the
                   underscore character ( _)</li>
               <li>By convention, Unix shell variables will have their names in UPPERCASE</li>
           </ul>
           <p>There are three main types of variables in Unix:</p>
           <ol>
               <li>Local Variables: only present within the current instance of the shell and are not available to
                   programs started by the shell;set at the command prompt.</li>
               <li>Environment Variables: available to any child process of the shell. Programs may require certain
                   environment variables to function correctly.</li>
               <li>Shell Variables: set by the shell and are required for the shell to function correctly. Some of
                   these variables are environment variables, while others are local variables.</li>
           </ol>


           <p>Variables are defined as : </p>
           <div class="snippet">
           <pre><code class="language-bash">
               # Making some variables


               variable_name=variable_value
           </code></pre> </div>
  
           <p>To access a variable in Unix, we simply need to prepend its name with a '$' symbol
               e.g to print the value of the 'PATH' environment variable, we would write:</p>


               <div class="snippet">
           <pre><code class="language-bash">
               # Showing the path


               echo $PATH
           </code></pre> </div>
          
              
          
       </div>
<?php
   include "assets/php/footer.php";
?>

