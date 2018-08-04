<?php
session_start();
?>
<html>
	<head>
	<title>session started</title>
	</head>
	</body>
	<div class="container">
	<?php

		echo "welcome:".$_SESSION["user"];
		echo "\n logged in";
		echo "<a href='logout.php'> Logout</a> ";
	?>
	</div>
</html>
