<?php
	// create the json from the sql results
	$json_php = json_encode($results);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<script type='text/javascript'>
	// Retrieve the json_text from the json_php variable
	var json_text = '<?php echo $json_php; ?>';
	// Convert the json_text to objects
	var parsed_json =  JSON.parse(json_text);
	// Get the number of objects in the sql database and -1 for the index
	var no_of_objects = Object.keys(parsed_json).length;
	// Retrieve the object
	alert(parsed_json[1].img_title);

	function slideshowtest()
	{
		// Add the cars to this array, to check if they have already been added or not.
		// As do not want duplicates in the slideshow.
		var tempcars = [];
		// Keep a count of the number of cars currently added.
		var howmanycars = 0;

		// While how many cars is less than 3 keep adding them.
		while (howmanycars < 3) {
			// Choose a random number
			var randomNumber = Math.floor(Math.random() * no_of_objects);
			var carTitle = parsed_json[randomNumber].img_title;
			var carText = parsed_json[randomNumber].img_text;
			var carImg = parsed_json[randomNumber].img_url;

			// Check to see if the car already exists in the array, I will do the check with the car title
			if($.inArray(carTitle, tempcars) === -1)
			{
				console.log(randomNumber + " Is not already being displayed so display a " + carTitle);
				// Car is not already being displayed so add it to the array
				tempcars.push(carTitle);
				// Increase the howmanycars variable
				howmanycars++;

				// Simple switch statement to determind which slide to put the car into
				// I would like to add some JQuery effects also if I have time
				switch(howmanycars) {
				    case 1:
				    	document.getElementById("heading1").innerHTML = carTitle;
				    	document.getElementById("text1").innerHTML = carText;
				    	document.getElementById("img1").src = "<?php echo base_url();?>" + carImg;
				        break;
				    case 2:
				    	document.getElementById("heading2").innerHTML = carTitle;
				    	document.getElementById("text2").innerHTML = carText;
				    	document.getElementById("img2").src = "<?php echo base_url();?>" + carImg;
				        break;
				    case 3:
				    	document.getElementById("heading3").innerHTML = carTitle;
				    	document.getElementById("text3").innerHTML = carText;
				    	document.getElementById("img3").src = "<?php echo base_url();?>" + carImg;
				        break;
				    default:
        				console.log("I should not be seeing this.")
				} 
			}
			else
			{
				console.log(randomNumber + " Already being displayed. " + carTitle);
			}
			console.log(howmanycars);
		}
	}
	// Call the slideshowtest function to change the images every 5 seconds
	//setInterval("slideshowtest()", 2000);
</script>
</head>

<body>

<div id="container">
<!-- <img src="<?php echo base_url();?>img/carimgs/car1.jpg"> -->

<h1>First Slide</h1>

<h3 id="heading1">Car Heading 1</h3>

<h5 id="text1">Car Text 1</h5>

<img id="img1" src="">

<h1>Second Slide</h1>

<h3 id="heading2">Car Heading 2</h3>

<h5 id="text2">Car Text 2</h5>

<img id="img2" src="">

<h1>Third Slide</h1>

<h3 id="heading3">Car Heading 3</h3>

<h5 id="text3">Car Text 3</h5>

<img id="img3" src="">




<!-- <button onclick="myFunction()">Try it</button> -->

<div id="myDiv"><h2>Let AJAX change this text</h2></div>
<button type="button" onclick="slideshowtest()">Change Content</button>

</div>

</body>

</html>