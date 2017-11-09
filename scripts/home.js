function colorClick() {
	document.getElementById('click').innerHTML = 'You did it!!';
}

function greenButton() {
	document.getElementById('mouse').style.backgroundColor = 'green';
}

function blueButton() {
	document.getElementById('mouse').style.backgroundColor = 'blue';
}

function wrongMove() {
	document.getElementById('mouse').innerHTML = 'It didn\'t say click...';
}

function redButton() {
	document.getElementById('mouse').style.backgroundColor = 'red';
}

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

function setRandomBackgroundColors() {
	let tags = document.getElementsByClassName("colorize");
	for(let tag in tags) {
		tags[tag].style.backgroundColor = randomColor();
	}
}

function textColor() {
	document.getElementById("words").style.color = randomColor()
}
