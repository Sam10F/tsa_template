<?php
require_once('Controllers/BaseController.php'); 

echo "BIEN: " . print_r($_GET);

echo "ESE: " . print_r($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>estas en master</p>


	
	<?= require_once('_footer.php'); ?>
</body>
</html>