<?php

$domain = $_SERVER['HTTP_HOST'];

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Hello, World</title>
		<link rel="stylesheet" href="http://<?php echo $domain; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">

		<script src="http://<?php echo $domain; ?>/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="http://<?php echo $domain; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<p>Hello, VK APP!</p>

		<button class="btn btn-success">Hello, World</button>
	</body>
</html>
