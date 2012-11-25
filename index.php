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
			<h2>Population change of UK</h2>
			<p id="ukchange" class="stat">X</p>
		</div>
		<div id="speeddial" class="column grid_1 borded">
			<h2>Sim Speed</h2>
			<p class="stat"><a id="speed" href="#">1:1</a></p>
		</div>
	</div>
	<div class="row">
		<div class="column grid_2 borded">
			<h2>Population change of DE</h2>
			<p id="germanychange" class="stat">X</p>
		</div>
		<div class="column grid_1 borded">
			<h2>Run time</h2>
			<p id="runtime" class="stat">X</p>
		</div>
		<div class="column grid_2 borded">
			<h2>Worldwide deaths</h2>
			<p id="worlddeath" class="stat">X</p>
		</div>
		<div class="column grid_2 borded">
			<h2>Worldwide births</h2>
			<p id="worldbirth" class="stat">X</p>
		</div>
		<div class="column grid_2 borded">
			<h2>Global population change</h2>
			<p id="worldchange" class="stat">X</p>
		</div>
		<div class="column grid_2 borded">
			<h2>Tweets sent</h2>
			<p id="tweets" class="stat">X</p>
		</div>
	</div>
	<div class="row">
		<div class="column grid_2 borded">
			<h2>K-root DNS lookups</h2>
			<p id="kdns" class="stat">X</p>
		</div>
		<div class="column grid_2 borded">
			<h2>Global root DNS lookups</h2>
			<p id="dns" class="stat">X</p>
		</div>
	</div>
	<div class="row">
		<div class="column grid_12" id="footer">
			<p>(<a href="http://opensource.org/licenses/BSD-3-Clause">&copy zuzak <?php echo date('Y'); ?></a>)</p>
		</div>
	</div>
</body>
</html>
