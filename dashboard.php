<?php 
	session_start();
	if(!isset($_SESSION['sid'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>
		<?php echo $_SESSION['sid']."'s Locker"?> </title>
	<link rel="stylesheet" type="text/css" href="beautify_dashboard.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script> -->
	<!-- <script type="text/javascript" src="js/logout_helper.js"></script> -->
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/populate.js"></script>
	<script type="text/javascript" src="js/tabizizer.js"></script>
	<script type="text/javascript" src="js/docready.js"></script>
	<script type="text/javascript" src="js/insertHelper.js"></script>
</head>

<body>
	<div id="main_wrapper">
		<div id="header_wrapper">
			<div id="heading">
				<h1>Password Locker</h1>
			</div>
			<div id="logout_zone">
				<p style="margin-right: 5px; font-family:'Pacifico', cursive;">
					<?php echo 'Welcome, '.$_SESSION['sid'];?>
				</p>
				<span id="about_us" class="btn material_shadow">About Us</span>
				<span id="logout_btn" class="btn material_shadow">Logout</span>
			</div>
		</div>
		<div id="content_wrapper" class="material_shadow">
			<a id="start_here" class="light_heading">Start Here:</a>
			<div class="tab material_shadow">
				<button class="btn tablinks" onclick="openTab(event, 'insert')">Add Entry</button>
				<button class="btn tablinks" onclick="openTab(event, 'select')">My Vault</button>
				<button class="btn tablinks" onclick="openTab(event, 'delete')">Delete</button>
			</div>
			<div id="insert" class="tabcontent material_shadow">
				<input type="textfield" id="insert_title" class="input-field material_shadow" placeholder="Title" required autofocus>
				<input type="textfield" id="insert_uid" class="input-field material_shadow" placeholder="UserID" required>
				<input type="password" id="insert_password" class="input-field material_shadow" placeholder="Password" required>
				<input type="url" id="insert_url" class="input-field material_shadow" placeholder="Website URL" required>
				<textarea id="notes" class="material-text-area material_shadow" placeholder="Notes"></textarea> 
				<input type="textfield" id="insert_number" class="input-field material_shadow" placeholder="Associated Phone">
				<span id="submit_button" class="btn material_shadow">Submit</span>
				<div id="insert_status"></div>
			</div>
			<div id="select" class="tabcontent material_shadow select-tab-data">
				
			</div>
			<div id="delete" class="tabcontent material_shadow">
				<a>delete content</a>
			</div>
		</div>
		<div id="footer_wrapper">
			I made it biatch
		</div>
	</div>
</body>

</html>


<!-- 
	there is a way to make select all tuples data more sexily fall down,
	by assigning each dynamic div a elemnt id
	Its 1 more js function, so will do if theres time

-->