<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Typography Development</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<style>

		body {
			margin-top: 50px;
		}

		h1 {
			margin-bottom: 20px;
		}


		p {
			padding: 0 200px 0 0;
			margin-bottom: 20px;

		}

	</style>
</head>
<body>

<div class="container">

	<h1>Typography</h1>

	<p>Paul Lyons<br />3/12/2020</p>

	<p>Examples of interesting typographic styles and design concepts that are mostly native to CSS. </p>


	<ul>
		<?php
		$counter = 0;
		$dirf    = 'typography';
		$dir = scandir($dirf, 1);
		foreach($dir as $file) {
			$fileName = str_replace('-', ' ', $file);

			if(($file!='..') && ($file!='.')) {
				echo('<li>');
				echo('<a href="'  . $dirf . '/' . $file .'" target="_blank">');
				echo($fileName);
				echo('</a></li>');
				$counter++;
			}
		}
		?>
	</ul>

</div>

</body>
</html>
