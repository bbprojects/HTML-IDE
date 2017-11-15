<?php 

	function sendmail($to)
	{
		$subject= "Suggestion for HTML-IDE";
		mail($to,$subject,$_POST['suggestion']);
	}

sendmail('bak05102000@gmail.com');
sendmail('bhavarthakhawale@gmail.com');
echo "<center><h1>Thanks For Your FeedBack</h1></center>";
 ?>