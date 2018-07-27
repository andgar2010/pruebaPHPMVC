<!DOCTYPE html>
<html>
<head>
	<title>Mi pagina</title>
	<?php
		if(isset($array)){
			foreach ($array as $d) {
				echo '<link rel="stylesheet" type="text/css" href="assets/css/' . $d . '.css">';
			}
		}
	?>

</head>
<body>