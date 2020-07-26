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
 <?php
	include ("header.html");
?>
<body>
<h1> View Message</h1>
<?php
$dbc = mysqli_connect('localhost', 'root', '');
mysqli_select_db($dbc,'contactmsg');

$query = 'SELECT * FROM contact ORDER BY date_entered DESC';

if ($r = mysqli_query($dbc, $query)){

	while ($row = mysqli_fetch_array($r)){
	echo"<p><h3>{$row['subject']}</h3>Name: {$row['name']}<br/>Email: {$row['email']}<br/>Message: {$row['message']}<br/>
	<a href='edit_entry.php?id={$row['user_id']}'>Edit</a>
	<a href='delete_entry.php?id={$row['user_id']}'>Delete</a>
	</p><hr/>\n";
	}
}else{
	echo"<p style='color:red;'>Could not retreive the data because:<br/>".mysqli_error($dbc).
	'.</p><p>The query being run was: '. $query."</p>";
}

mysqli_close($dbc);	
	


?>
</body>
<?php
	include ("footer.html");
?>
</html>


