<?php

	$conn = pg_connect("host=ec2-52-72-125-94.compute-1.amazonaws.com dbname=dd3cj8cps2tohf user=dmorovidexkloz password=9471e5739d922967f063d440a180ab074978906727e0343d65905a31a5349be2");
	if(!$conn){
		die("Could not connect to the database ".pg_last_error());
	}

?>