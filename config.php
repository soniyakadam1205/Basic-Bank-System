<?php

	$conn = pg_connect("host=host user=user password=password");
	if(!$conn){
		die("Could not connect to the database ".pg_last_error());
	}

?>
