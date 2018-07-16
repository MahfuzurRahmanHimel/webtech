<?php

	
	if(!isset($_COOKIE['user'])){
		header("location:Login.php?");
	}
	else{
		echo "Hello ".$_COOKIE['user'];
		echo "<br/><a href='./Login.php?data=logged out successfully'>Logout</a>";
		?>
		<h1></h1>
	<?php
	}
	
	?>