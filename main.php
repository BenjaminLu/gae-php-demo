<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google App Engine Homework: BMI</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<style>
	.message {
		margin: 0 auto;
		font-size: 1.5em;
		color: #6095FF;
		text-align: center;
	}
	.center {
		margin: 0 auto;
		text-align: center;
		margin: 15px;
	}
	.vertical-center {
	  min-height: 80%;
	  min-height: 80vh;
	  display: flex;
	  align-items: center;
	}
	</style>
</head>
<body>
	<div class="col-md-4 col-md-offset-4 vertical-center">
		<div class="container">
			<h3 class="center">雲端管理 GAE 7103056081 呂峻豪</h3>
			<form class="form-horizontal" role="form" method="post" action="countbmi">
				<legend></legend>
				<div class="form-group">
				    <label for="height" class="col-sm-2 control-label">Height(cm)</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" name="height" id="height" placeholder="170" min="0" max="240">
				    </div>
				</div>
				<div class="form-group">
				    <label for="weight" class="col-sm-2 control-label">Weight(kg)</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" name="weight" id="weight" placeholder="70" min="0" max="300">
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Submit</button>
				    </div>
				</div>
			</form>
			<div class="col-sm-12">
				<div class="message">
					<?php 
						if ($_SESSION['bmi'] != null) {
							echo $_SESSION['bmi'];
							$_SESSION['bmi'] = null;
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
