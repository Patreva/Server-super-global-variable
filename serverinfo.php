<!DOCTYPE html>
<html>
<head>
	<title>Server Information</title>
</head>
<body>
<?php
echo "Server details-><br>";
/*Name of the server*/echo "SERVER_NAME->". $_SERVER['SERVER_NAME']."<br>";
/*IP of the server*/echo "SERVER_ADDR->". $_SERVER['SERVER_ADDR']."<br>";
/*Port of the server*/echo "SERVER_PORT->". $_SERVER['SERVER_PORT']."<br>";
/*Root of the document*/echo "DOCUMENT_ROOT->". $_SERVER['DOCUMENT_ROOT']."<br>";
echo "<br>";

echo "Page details-><br>";
echo "PHP_SELF-> ". $_SERVER['PHP_SELF'] ."<br>";
echo "SCRIPT_FILENAME->". $_SERVER['SCRIPT_FILENAME'] ."<br>";
echo "<br>";

echo "Request details-><br>";
echo "REMOTE_ADDR-> ". $_SERVER['REMOTE_ADDR'] ."<br>";
echo "REMOTE_PORT-> ". $_SERVER['REMOTE_PORT'] ."<br>";
echo "REQUEST_URI-> ". $_SERVER['REQUEST_URI'] ."<br>";
echo "QUERY_STRING-> ". $_SERVER['QUERY_STRING'] ."<br>";
echo "REQUEST_METHOD-> ". $_SERVER['REQUEST_METHOD'] ."<br>";
echo "REQUEST_TIME-> ". $_SERVER['REQUEST_TIME'] ."<br>";
/*When clients get redirection url eg facebook we will get the referal as facebook.com of the document*/echo "HTTP_REFERER-> ". $_SERVER['HTTP_REFERER'] ."<br>";
echo "HTTP_USER_AGENT-> ". $_SERVER['HTTP_USER_AGENT'] ."<br>";
?>
</body>
</html>
