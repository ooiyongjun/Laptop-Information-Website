<html>
<meta charset="utf-8">
  <title>Eugene's Laptop Website</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
   <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

<?php
	include ("header.html");
?>
<body>
<?php

if (isset($_POST['submitted'])){

$dbc= mysqli_connect('localhost', 'root', '');
mysqli_select_db($dbc,'register');

$problem = FALSE;

if (!empty($_POST['username']) && !empty($_POST['psw'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['psw']);
}else{
	echo"<p style='color:red;'>Please submit both a username and an password.</p>";
	$problem = TRUE;
}


if (!$problem){
	$query = "INSERT INTO register(user_id, username, password, date_entered) VALUES (0, '$username', '$password', NOW( ))";
	
		if(@mysqli_query($dbc,$query)){
			echo"<p> The data has been added!</p>";
		}else{
			echo"<p style='color:red;'>Could not add the data bacause:<br/>".mysqli_error($dbc).".</p>
			<p>The query was:".$query."</p>"; 
		}
	}
mysqli_close($dbc);
}

?>
<div class="row-padding" id="register">
  	<form action="register.php" method="post">
	<form name="Register">
	<div class="container"><hr>
	<h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	
	<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	
	<label for="birthdate"><b>BirthDate: </b></label>
	Day <select name="day">
	<?php
		for ($d=1; $d<=31; $d++)
		echo "<option value=\"$d\">$d </option>\n";
	?>
	</select>
	Month <select name="month">
	<?php
		for ($m=1; $m<=12; $m++)
		echo "<option value=\"$m\">$m </option>\n";
	?>
	</select>
	Year <select name="year">
	<?php
		for ($y=1900; $y<=2020; $y++)
		echo "<option value=\"$y\">$y </option>\n";
	?>
	</select><br>
	<label for="gender"><b>Gender</b></label><br><input type="radio" value="M" name="Gender">M
	<input type="radio" value="F" name="Gender">F</br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-re-enter"><b>Re-enter Password</b></label>
    <input type="password" placeholder="Re-enter Password" name="psw-re-enter" required><hr>
    

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
	<input type="hidden" name="submitted" value="true"/>
	</div>

	<div class="container signin">
    <p>Already have an account? <a href="sign in.php">Sign in</a>.</p>
	</div>
	</form>


</body>

<?php
	include ("footer.html");
?>
</html>