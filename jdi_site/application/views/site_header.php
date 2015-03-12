<?php
	// create the json from the sql results
	$json_php = json_encode($results);
?>

<!DOCTYPE HTML>

<html>
<head>
<!-- Define in the controller-->
<title><?php echo $theTitle; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/custom.css" rel="stylesheet">
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

<script>
	// Create a helper variable for the base url in the jdi_slideshow.js
	var base_url_js = "<?php echo base_url();?>";
	// Retrieve the json_text from the json_php variable
	var json_text = '<?php echo $json_php; ?>';
	// Convert the json_text to objects
	var parsed_json =  JSON.parse(json_text);
	// Get the number of objects in the sql database and -1 for the index
	var no_of_objects = Object.keys(parsed_json).length;
</script>
</head>