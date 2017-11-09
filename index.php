<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8"/>
		<meta name="author" content="Korigan Payne"/>
		<meta name="description" content="Playing with JavaScript"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<!-- jQuery, Popper.js, Bootstrap JavaScript-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<script src="scripts/home.js" rel="script"></script>

		<title>JavaScript Events</title>
	</head>
	<body class="colorize">
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
				<a class="navbar-brand" href="#">JavaScript Events</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Reset <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://github.com/Koriganp/javascript-events" target="_blank">GitHub Repository</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<section class="m-5">
			<div class="jumbotron colorize">
				<h1 class="display-3">Test #1</h1>
				<p class="lead">This is a test to practice my very small amount of skills with JavaScript.</p>
				<hr class="my-2">
				<p>Feel free to click the button below.</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg colorize" id="click" onclick="colorClick()" role="button">Click Me</a>
				</p>
			</div>
		</section>
		<section class="m-5">
			<div class="jumbotron colorize">
				<h1 class="display-3">Test #2</h1>
				<p class="lead">This is another test to practice those awesome skills again.</p>
				<hr class="my-2">
				<p>Please hover over button below.</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg colorize" id="mouse" onmouseover="greenButton()" onmouseout="blueButton()" onclick="wrongMove()" onmouseup="redButton()">Move pointer here...</a>
				</p>
			</div>
		</section>
		<section class="m-5">
			<div class="jumbotron colorize">
				<h1 class="display-3" id="words" onmouseover="textColor()">Test #3 Seizure Warning:</h1>
				<p class="lead">Don't click the button fast if you're prone to seizures.</p>
				<hr class="my-2">
				<p>Please click this button.</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg colorize" onclick="setRandomBackgroundColors()">THIS ONE!!!</a>
				</p>
			</div>
		</section>
	</body>
</html>