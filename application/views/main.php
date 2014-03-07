<?php date_default_timezone_set('America/Los_Angeles');?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ninja gold game</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div id="container">
	<h3>Your Gold: <span id="amount">
		<?php
			if (!$this->session->userdata('gold')) {
				echo "0";
			}
			else {
				echo $this->session->userdata('gold');
			}
		?></span></h3>
	<div class="divform">
		<h2>Farm</h2>
		<h5>(earns 10-20 golds)</h5>
		<form action="/ninjagames/process" method="post" class="game">
			<input type="hidden" name="building" value="farm">
			<input type="submit" value="Find Gold!" class="btn">
		</form>
	</div>
	<div class="divform">
		<h2>Cave</h2>
		<h5>(earns 5-10 golds)</h5>
		<form action="/ninjagames/process" method="post" class="game">
			<input type="hidden" name="building" value="cave">
			<input type="submit" value="Find Gold!" class="btn">
		</form>
	</div>
	<div class="divform">
		<h2>House</h2>
		<h5>(earns 2-5 golds)</h5>
		<form action="/ninjagames/process" method="post" class="game">
			<input type="hidden" name="building" value="house">
			<input type="submit" value="Find Gold!" class="btn">
		</form>
	</div>
	<div class="divform">
		<h2>Casino</h2>
		<h5>(earn or lose 50 golds)</h5>
		<form action="/ninjagames/process" method="post" class="game">
			<input type="hidden" name="building" value="casino">
			<input type="submit" value="Find Gold!" class="btn">
		</form>
	</div>
	<div id="activities">
		<h5>Activities: </h5>
		<div id="activitylog">
			<?php echo $this->session->userdata('message')."<br>";?>
		</div>
	</div>
	<form action="/ninjagames/reset">
		<input type="submit" value="reset" class="btn btn-info">
	</form>
</div>
</body>
</html>