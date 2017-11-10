	// test click event
	document.getElementById("click").onclick = function() {colorClick()};
	function colorClick(){
		document.getElementById('click').innerHTML = 'You did it!!';
	}

	// test find and replace
	function testsSuck(){
		document.body.innerHTML = document.body.innerHTML.replace('Test', 'Party');
	}

	//test four functions on same element
	document.getElementById("mouse").onmouseover = function() {greenButton()};
	function greenButton() {
		document.getElementById('mouse').style.backgroundColor = 'green';
	}
	document.getElementById("mouse").onmouseout = function() {blueButton()};
	function blueButton() {
		document.getElementById('mouse').style.backgroundColor = 'blue';
	}
	document.getElementById("mouse").onclick = function() {wrongMove()};
	function wrongMove() {
		document.getElementById('mouse').innerHTML = 'It didn\'t say click...';
	}
	document.getElementById("mouse").onmouseup = function() {redButton()};
	function redButton() {
		document.getElementById('mouse').style.backgroundColor = 'red';
	}

	// Seizure button
	function generateRandomInteger(minimum, maximum) {
		return(Math.floor(Math.random() * (maximum - minimum + 1) + minimum));
	}
	function randomColor() {
		let red = generateRandomInteger(0, 255);
		let green = generateRandomInteger(0, 255);
		let blue = generateRandomInteger(0, 255);
		let rgb = "rgb(" + red + ", " + green + ", " + blue + ")";
		return(rgb);
	}
	document.getElementById("colorize").onclick = function() {setRandomBackgroundColors()};
	function setRandomBackgroundColors() {
		let tags = document.getElementsByClassName("colorize");
		for(let tag in tags) {
			tags[tag].style.backgroundColor = randomColor();
		}
	}

	// test calling a function on a different event and element
	document.getElementById("words").onmouseover = function() {textColor()};
	function textColor() {
		document.getElementById("words").style.color = randomColor()
	}

	// test mouse enter and changing font
	document.getElementById("family").onmouseenter = function() {fontFamily()};
	function fontFamily() {
		document.getElementById("family").style.fontFamily = "Pacifico, cursive";
	}

	// test changing font size
	document.getElementById("robot").onclick = function() {fontGrow()};
	function fontGrow() {
		let fontSize = document.getElementById("robot").style.fontSize;
		if(fontSize === "") {
				fontSize = "1.0em";
			}
		let emSize = parseFloat(fontSize.substring(0, fontSize.indexOf("e")));
		fontSize = (1.01 * emSize) + "em";
		document.getElementById("robot").style.fontSize = fontSize;
	}

	// test changing display
	document.getElementById("hide").onmouseover = function(){ninjaHide()};
	function ninjaHide() {
		var x = document.getElementById("hide");
		if (x.style.display === "none"){
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}

	// test Drag and Drop
	function dragstart_handler(ev) {
		console.log("dragStart");
		// Add the target element's id to the data transfer object
		ev.dataTransfer.setData("text/plain", ev.target.id);
		ev.dataTransfer.dropEffect = "copy";
	}
	function dragover_handler(ev) {
		ev.preventDefault();
		// Set the dropEffect to move
		ev.dataTransfer.dropEffect = "move"
	}
	function drop_handler(ev) {
		ev.preventDefault();
		// Get the id of the target and add the moved element to the target's DOM
		var data = ev.dataTransfer.getData("text");
		ev.target.appendChild(document.getElementById(data));
	}




