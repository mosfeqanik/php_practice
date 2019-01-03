<!DOCTYPE html>
<html>
<head>
	<title>requests & post</title>
</head>
<body>
	<?php
	if (isset($_GET['name'])) {
		print_r($_GET);
	}
	
	?>
<form method="GET" action="post_requests.php">
	<div>
	<label>name</label>
	<input type="text" name="name">

	</div>
	<div>
	<label>email</label>
	<input type="email" name="email">
	<input type="submit" name="submit">
	</div>

</form>



<?php
?>
</body>
</html>