<?php 
$to= "bak05102000@gmail.com";
$to2= "bhavarthakhawale@gmail.com";
$subject= "Suggestion for HTML-IDE";

mail($to,$subject,$_POST['suggestion']);
mail($to2,$subject,$_POST['suggestion']);
echo "MESSAGE SENT";

 ?>