<html>
 <head>
  <title>sealsite beta</title>
 </head>
 <body>
   <h1>
     sealsite beta
   </h1>
   <hr>
   <p>
     Hello there! Welcome to the <i><b>s</b>chool <b>e</b>tc. <b>a</b>ggregator-<b>l</b>inker <b>site</b></i>, an actually-intuitive collection of things related to school. <br>
     Right now, we're focusing on collecting things like copies of notes, links to Quizlets, other files (like diagrams or PowerPoints), and similar items. Hopefully, Sealsite will be a cohesive place to more effectively access and share any relevant study material. <br>
     At some point, we might branch out to new features (like a forum for asking questions or notifications when new content is added), but we're working to build a solid foundation first. <br>
     <i>Created by Jack and Logan on January 11, 2019</i>
     <hr>
   </p>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     Name: <input type="text" name="fname">
     <input type="submit">
   </form>
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // collect value of input field
     $name = $_POST['fname'];
     if (empty($name)) {
       echo "Name is empty";
     } else {
       echo $name;
     }
   }
   ?>
 </body>
</html>
