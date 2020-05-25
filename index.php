<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Melie's Site</title>
  </head>
  <body>

   <div>
      <h1>TowFinders</h1>
      <?php include 'site.php';?>
   </div> 
   <hr>
      <p>
        <?php
          $message = fopen('C:\Users\mjlan\www\scripts\message.txt','r');
          echo fread($message, filesize('C:\Users\mjlan\www\scripts\message.txt'));
        ?>
      </p>
      
      

  </body>
</html>