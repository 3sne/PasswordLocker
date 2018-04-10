<?php
	session_start();
	if(isset($_SESSION['sid'])) {
		unset($_SESSION['sid']);
	} 
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
	<title>Password Locker</title>
	<link rel="stylesheet" type="text/css" href="beautify_index.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script src="js/lifegenesis.js">
	</script>
</head>

<body>
	<div id="main_wrapper" class="wrapper">
		<div id="head_div">
			<p>Password Locker</p>
			<br>
			<p></p>
		</div>
		<div id="form_div">
			<input type="textfield" id="un" class="material_shadow" name="username" placeholder="username" autofocus>
			<input type="password" id="ps" class="material_shadow" name="password" placeholder="password">
			<div id="btn_div">
				<a id="search_button" class="btn material_shadow">Login</a>
				<a id="signup_button" class="btn material_shadow">Sign Up</a>
			</div>
			<div id="error_div"></div>
		</div>
	</div>
</body>

</html>