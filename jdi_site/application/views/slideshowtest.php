<?php

	header("Content-Type: application/json");
	$somevar = $_POST["itemtoadd"];


	/*
	foreach($results as $row){
		echo $row->img_title;
		echo $row->img_text;
		echo "<br />";
	}
	*/

	$jsondata = '{"carTitle":"'.$somevar.'"}';
	echo $jsondata;
?>