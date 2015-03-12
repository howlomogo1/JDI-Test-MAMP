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
				    	document.getElementById("img1").src = base_url_js + carImg;
				    	document.getElementById("carimglink1").href = base_url_js + carImg;
				        break;
				    case 2:
				    	document.getElementById("heading2").innerHTML = carTitle;
				    	document.getElementById("text2").innerHTML = carText;
				    	document.getElementById("img2").src = base_url_js + carImg;
				    	document.getElementById("carimglink2").href = base_url_js + carImg;
				        break;
				    case 3:
				    	document.getElementById("heading3").innerHTML = carTitle;
				    	document.getElementById("text3").innerHTML = carText;
				    	document.getElementById("img3").src = base_url_js + carImg;
				    	document.getElementById("carimglink3").href = base_url_js + carImg;
				        break;
				    default:
        				//console.log("I should not be seeing this.")
				} 
			}
			else
			{
				//console.log(randomNumber + " Already being displayed. " + carTitle);
			}
			//console.log(howmanycars);
		}
	}
	// Call slideshowtest function for when the page is loaded
	slideshowtest();
	// Call the slideshowtest function to change the images every 5 seconds
	setInterval("slideshowtest()", 5000);