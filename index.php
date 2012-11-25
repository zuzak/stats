<!DOCTYPE html>
<html>
<head>
	<title>Stats</title>
	<link href="grid.css"   type="text/css" rel="stylesheet" media="screen" />
	<link href="styles.css" type="text/css" rel="stylesheet" media="screen" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="scripts.js"></script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
</head>
<body>
	<div class="row">
		<div class="column grid_12 borded">
			<h1>Since reloading this page...</h1>
		</div>
	</div>
	<div class="row">
		<div class="column grid_3 borded">
			<h2>Gross national debt</h2>
			<p id="debt" class="stat">Loading...</p>
		</div>
		<div class="column grid_2 borded">
			<h2>Known planets with life</h2>
			<p class="stat">0000001</p>
		</div>
		<div class="column grid_2 borded">
			<h2>Births in the UK</h2>
			<p id="births" class="stat">0</p>
			<div class="bar"><span class="progress" id="birthbar" /></div>
		</div>
		<div class="column grid_2 borded">
			<h2>Deaths in the UK</h2>
			<p id="deaths" class="stat">0</p>
			<div class="bar"><span class="progress" id="deathbar" /></div>
		</div>
		<div class="column grid_2 borded">
			<h2>Population of UK</h2>
			<p id="ukchange" class="stat">X</p>
		</div>
		<div id="speeddial" class="column grid_1 borded">
			<h2>Sim Speed</h2>
			<p class="stat"><a id="speed" href="#">1:1</a></p>
	</div>
	<div class="row">
		<div class="column grid_12" id="footer">
			<p>(&copy; zuzak <?php echo date("Y"); ?> &middot; <a href="http://opensource.org/licenses/BSD-3-Clause">3 Clause BSD</a>)</p>
		</div>
	</div>
</body>
</html>
