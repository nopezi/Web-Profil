<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/style2.css">

</head>

<body>

<div class="container">

		<div style="margin-top: 50px" class="panel panel-primary col-lg-4 col-lg-offset-4">
			<div class="panel-heading" style="margin-top: 20px;">
				<center><i class="glyphicon glyphicon-user"></i><h3 class="panel-title">Login</h3></center>
			</div>
			<div class="panel-body">
				<div>
			<form action="aksi_login.php" method="post" accept-charset="utf-8">
			
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="username">
			</div>

			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="password">
			</div>

			<button type="submit" class="btn btn-info btn-block login" name="masuk" value="masuk">Masuk</button>
			
			</form>
			<a href="../index.php"><span style="margin-top:10px" class="glyphicon glyphicon-arrow-left"> Kembali</span></a>
		</div>
			</div>
			<div class="panel-footer" style="margin-bottom: 20px;">
				<center>&copy; P321 <?=date('Y')?></center>
			</div>
		</div>

</div>

	</body>
</html>