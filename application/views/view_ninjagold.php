<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ninja money</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="ninjagold.js"></script>
<style>
	.forms {
		border: 1px solid black;
		width: 220px;
		height: 150px;
		text-align: center;
		display: inline-block;
	}

	span {
		display: block;
	}

	body {
		background-color: black;
	}

	#container {
		width: 900px;
		margin: auto;
		border: 1px solid black;
		font-family: sans-serif;
		padding: 15px;
		background-color: white;
	}

	h2 {
		display: inline-block;
	}

	#goldcount {
		border: 1px solid black;
		width: 100px;
		display: inline-block;
		background-color: gold;
		text-align: center;
	}

	#activities {
		width: 100%;
		height: 200px;
		border: 1px solid black;
		overflow: scroll;
	}
</style>
</head>
<body>
	<div id="container">
		<span><h2>Your Gold: </h2>
		<h2 id="goldcount"><?= $this->session->userdata('amount'); ?>
		</h2></span>
	<div class="forms">
		<h3>Farm</h3>
		<p>(earns 10-20 golds)</p>
		<form action="<?=base_url('/index.php/welcome/gold')?>" method="post">
			<input type="hidden" name="farm" value="">
			<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div class="forms">
		<h3>Cave</h3>
		<p>(earns 5-10 golds)</p>
		<form action="<?=base_url('/index.php/welcome/gold')?>" method="post">
			<input type="hidden" name="cave" value="">
			<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div class="forms">
		<h3>House</h3>
		<p>(earns 2-5 golds)</p>
		<form action="<?=base_url('/index.php/welcome/gold')?>" method="post">
			<input type="hidden" name="house" value="">
			<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div class="forms">
		<h3>Casino!</h3>
		<p>(earns/takes 0-50 golds)</p>
		<form action="<?=base_url('/index.php/welcome/gold')?>" method="post">
			<input type="hidden" name="casino" value="">
			<input type="submit" value="Find Gold!">
		</form>
	</div>
	<p>Activities</p>
	<div id="activities">
	<?php foreach ($activities as $value) 
	{
		echo $value;
	} ?>
	</div>
	<form action="process.php" method="post">
		<input type="hidden" name="destroy" value="session">
		<input type="submit" value="Restart">
	</form>
	</div>
</body>
</html>