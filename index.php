<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8"/>
		<meta name="author" content="Korigan Payne"/>
		<meta name="description" content="Playing with JavaScript"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"/>

		<!-- My Stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet"/>
		<link href="styles/style.css" rel="stylesheet"/>

		<!-- jQuery, Popper.js, Bootstrap JavaScript-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<!-- My scripts -->
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
					<a class="btn btn-primary btn-lg colorize mr-5" id="click" onclick="colorClick()" role="button">Click Me</a>
					<a class="btn btn-primary btn-lg colorize ml-5" id="tests" onclick="testsSuck()" role="button">TESTS SUCK!!</a>
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
		<section>
			<div class="container">
				<h1 class="text-center mb-5">This is a Font Party!!!</h1>
				<div class="row">
					<div class="col-4">
						<p id="family" onmouseenter="fontFamily()">Only God can make a tree - but you can paint one. Tree trunks grow however makes them happy. A thin paint will stick to a thick paint. Remember how free clouds are. They just lay around in the sky all day long. We might as well make some Almighty mountains today as well, what the heck. The very fact that you're aware of suffering is enough reason to be overjoyed that you're alive and can experience it. Working it up and down, back and forth. And just raise cain. Use absolutely no pressure. Just like an angel's wing. Mix your color marbly don't mix it dead. Life is too short to be alone, too precious. Share it with a friend. The first step to doing anything is to believe you can do it. See it finished in your mind before you ever start. A beautiful little sunset. Let's make a nice big leafy tree. There are no mistakes. You can fix anything that happens. This is the fun part We artists are a different breed of people. We're a happy bunch. When you buy that first tube of paint it gives you an artist license. We start with a vision in our heart, and we put it on canvas.</p>
					</div>
					<div class="col-4">
						<p id="robot" ondblclick="fontFamilyTwo()">Meeting assassin if you want to motivate these clowns, try less carrot and more stick, viral engagement diversify kpis open door policy. Usabiltiy. Run it up the flag pole locked and loaded baseline the procedure and same page your department herding cats going forward. This is not the hill i want to die on i'll book a meeting so we can solution this before the sprint is over the last person we talked to said this would be ready overcome key issues to meet key milestones, yet golden goose bench mark high turnaround rate. If you want to motivate these clowns, try less carrot and more stick pro-sumer software yet cloud strategy yet we need to dialog around your choice of work attire quarterly sales are at an all-time low, deploy granularity. Window-licker not enough bandwidth, and close the loop, UI UI.</p>
					</div>
					<div class="col-4">
						<p id="pirate" onselect="fontFamilyThree()">Blimey strike colors driver tender rum take a caulk tackle mizzen stern tack brig jury mast lad barkadeer hornswaggle. Lad Gold Road hornswaggle Jolly Roger black jack yo-ho-ho line hempen halter gangplank avast pillage Sail ho snow bowsprit shrouds. Loot league case shot Shiver me timbers scuppers gun gangplank pillage lugger tack hogshead brigantine Jack Tar fire ship Arr. Blow the man down Brethren of the Coast transom scuttle main sheet quarterdeck fluke scuppers yawl pressgang rum gally Buccaneer boom rigging. Tender fathom lugger me belay reef rutters code of conduct matey jack bounty no prey, no pay snow driver sutler. Wherry case shot crack Jenny's tea cup Cat o'nine tails broadside lugsail yo-ho-ho doubloon Sink me six pounders Gold Road hardtack log snow Davy Jones' Locker. </p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<h1 class="text-center mb-5">The party continues...</h1>
				<div class="row">
					<div class="col-6" id="target" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
						<p id="p1" draggable="true" ondragstart="dragstart_handler(event);">I am a free spirit! I don't want to be stuck on this side of the page. Will you drag me over to the other side? Please don't leave me here...</p>
					</div>
					<div class="col-6" id="target" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
					</div>
				</div>
			</div>
		</section>
		<footer class="mt-5 p-4 bg-dark text-light text-center">
			<p>You're meant to have fun in life.</p>
		</footer>
	</body>
</html>