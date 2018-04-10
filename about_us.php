<?php 
	session_start();
	if(!isset($_SESSION['sid'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>About Us | Password Locker</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="beautify_dashboard.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/docready.js"></script>
</head>
	<div id="main_wrapper">
		<div id="header_wrapper">
			<div id="heading">
				<h1>Password Locker</h1>
			</div>
			<div id="logout_zone">
				<p style="margin-right: 5px; font-family:'Pacifico', cursive;">
					<?php echo 'Welcome, '.$_SESSION['sid'];?>
				</p>
				<span id="home" class="btn material_shadow">Home</span>
				<span id="logout_btn" class="btn material_shadow">Logout</span>				
			</div>
		</div>
		<div id="content_wrapper" class="material_shadow">
			
		</div>
		<div id="footer_wrapper">
			I made it biatch
		</div>
	</div>
<body>

</body>

</html>