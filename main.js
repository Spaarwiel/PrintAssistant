

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//The function for calculating sizes(still to add counter, material ,reel ,spoilage,
//slitsize, just basic for now.)

function printedResults() {

	//This is just an alert that this only works for squareback books as I'm still busy
	//working on the rest.(Will remove when I'm done.)
		alert("This is for Hard cover books with BOARD in spine only!");
	
	//Getting all the values from the form.
	//The size head to tail.
		var bookHeight = document.forms["inputForms"]["bookHeight"].value;
	//The size from spine to forage.
		var bookWidth = document.forms["inputForms"]["bookWidth"].value;
	//The thickness of the spine(still need to check for formula with the Micrometer).	
		var bookThickness = document.forms["inputForms"]["bookThickness"].value;
	//The thickness of the board(want to add journal type later).
		var boardThickness = document.forms["inputForms"]["boardThickness"].value;
	
		var bookWidth = document.forms["inputForms"]["bookWidth"].value;
		if ((bookHeight == "") || (bookWidth == "") || (bookThickness =="") || (boardThickness == "")) {
			alert("Some input fields are empty");
			return false;
		}
	//Calculating values...
	//Head to tail plus the 6(7 for headbands?).
		var boardHeight = Number(bookHeight) + 6;
	
	//Variable for calculating the boardsize spine to forage(width).
	//Calculated for board thickness 1000micron to 3000micron(remember to put in notes).
		var boardWidth;
		if (boardThickness <= 1000) {
			boardWidthResult = bookWidth - 2;
		} else if (boardThickness > 1000 && boardThickness < 3000) {
			boardWidthResult = bookWidth - 3;
		} else {
			boardWidthResult = bookWidth - 4;
		}
	//Spine width + 1mm(maby add +1 for 300micron??).
		// var spineWidth = Number(bookThickness) + 1;
		var spineWidth;
		if (boardThickness <= 1000) {
			spineBoardResult = Number(bookThickness) + 0;
		} else if (boardThickness > 1000 && boardThickness < 3000) {
			spineBoardResult = Number(bookThickness) + 1;
		} else { 
			spineBoardResult = Number(bookThickness) + 2;	
		}

	//Calculation vir opensize...
		var openSize = 15.4 + spineBoardResult + ((boardThickness / 1000)*2) + (boardWidthResult) * 2;
	
	//Calculating Material sizes..
	//Height.
		var materialHeight = boardHeight + 32;
	
	//Width..
		var materialWidth = openSize + 32;
	
	//Display results in id H4..
		var finalPrinted = 
			  "Board Size (A): " + "<br>" + boardHeight + "mm" +  "(Height)" + " X " + boardWidthResult + "mm" + "(Width)" + "<br>"
			+ "Spine Size (B): " +  "<br>" + boardHeight + "mm" + "(Height)" + " X " + spineBoardResult + "mm" + "(Width)" + "<br>"
			+ "Opensize: " + "<br>" + boardHeight + "mm" + "(Height)" + " X " + openSize + "mm" + "(Width)" + "<br>"
			+ "Material Size:" + "<br>"
			+ materialHeight + "mm" + "(Height)" + " X " + materialWidth + "mm" + "(Width)" ;
	
		var displayH4 = document.getElementById('resultsDisplay');
		displayH4.innerHTML = finalPrinted;
	
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	// function materialResults() {
	
	// //This is just an alert that this only works for squareback books as I'm still busy
	// //working on the rest.(Will remove when I'm done.)
	// 	alert("This is for Hard cover books with BOARD in spine only!");
	
	// //Getting all the values from the form.
	// //The size head to tail.
	// 	var bookHeight = document.forms["inputForms"]["bookHeight"].value;
	// //The size from spine to forage.
	// 	var bookWidth = document.forms["inputForms"]["bookWidth"].value;
	// //The thickness of the spine(still need to check for formula with the Micrometer).	
	// 	var bookThickness = document.forms["inputForms"]["bookThickness"].value;
	// //The thickness of the board(want to add journal type later).
	// 	var boardThickness = document.forms["inputForms"]["boardThickness"].value;
	// //The width of the reel of material.
	// 	var materialReelWidth = document.forms["inputForms"]["materialReelWidth"].value;
	
	// 	var bookWidth = document.forms["inputForms"]["bookWidth"].value;
	// 	if ((bookHeight == "") || (bookWidth == "") || (bookThickness =="") || (boardThickness == "") || (materialReelWidth == "")) {
	// 		alert("Some input fields are empty");
	// 		return false;
	// 	}
	// //Calculating values...
	// //Head to tail plus the 6(7 for headbands?).
	// 	var boardHeight = Number(bookHeight) + 6;
	
	// //Variable for calculating the boardsize spine to forage(width).
	// //Calculated for board thickness 1000micron to 3000micron(remember to put in notes).
	// 	var boardWidth;
	// 	if (boardThickness <= 1000) {
	// 		boardWidthResult = bookWidth - 2;
	// 	} else if (boardThickness > 1000 && boardThickness < 3000) {
	// 		boardWidthResult = bookWidth - 3;
	// 	} else {
	// 		boardWidthResult = bookWidth - 4;
	// 	}
	// //Spine width + 1mm(maby add +1 for 300micron??).
	// 	var spineWidth = Number(bookThickness) + 1;
	
	// //Calculation vir opensize...
	// 	var openSize = 15.4 + spineWidth + ((boardThickness / 1000)*2) + (boardWidthResult) * 2;
	
	// //Calculating Material sizes..
	// //Height.
	// 	var materialHeight = boardHeight + 32;
	
	// //Width..
	// 	var materialWidth = openSize + 32;
	
	// //Display results in id H4..
	// 	var final = "Summary" + "<br>"
	// 		+ "Board Sizes:" + "<br>"
	// 		+ "Board: " + boardHeight + "mm" +  "(Height)" + " X " + boardWidthResult + "mm" + "(Width)" + "<br>"
	// 		+ "Spine: " + boardHeight + "mm" + "(Height)" + " X " + spineWidth+ "mm" + "(Width)" + "<br>"
	// 		+ "Opensize: " + boardHeight + "mm" + "(Height)" + " X " + openSize + "mm" + "(Width)" + "<br>"
	// 		+ "Material Size:" + "<br>"
	// 		+ materialHeight + "mm" + "(Height)" + " X " + materialWidth + "mm" + "(Width)" ;
	
	// 	var summary = "ummary" + "<br>"
	// 		+ "Board Sizes:"
	
	
	// 	var displayH3 = document.getElementById("summary");
	// 	var displayH4 = document.getElementById('resultsDisplay');
	// 	displayH3.innerHTML = summary;
	// 	displayH4.innerHTML = final;
	
	// }
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	//Login Page username and password function, just a test as I don't have a server for php setup
	function loginFunction() {
	
		var emailInput = document.forms["inputForms"]["username"].value;
		var passwordInput = document.forms["inputForms"]["password"].value;
	
		if (emailInput == "" || emailInput !== "PrintAdmin") {
			alert("Wrong username or password");
			return false;
		}
	
		if (passwordInput == "" || passwordInput !== "Admin123") {
			alert("Wrong username or password")
			return false;
		}
	
		window.location="home.htm";	
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	/*
	*/