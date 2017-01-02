<html>
<head>
	<title>START GAME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="game.php">
	<div class="container">
		<div class="row">
				<div class="text-center"><h2>Welcome to the game!</h2></div>
				<hr>
				<div class="col-md-6 text-center">
					<input class="form-control" type="text" name="player1" placeholder="Enter player 1 name">
				</div>
				<div class="col-md-6 text-center">
					<input class="form-control" type="text" name="player2" placeholder="Enter player 2 name">
				</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12 text-center">
				<input type="submit" value="START DEATHMATCH" class="btn btn-success btn-lg">
			</div>
		</div>
	</div>	
</form>
</body>
</html>