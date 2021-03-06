<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("./src/globalhead.php"); ?>

		<script src="https://cdn.jsdelivr.net/remarkable/1.7.1/remarkable.min.js"></script>
		<script src="https://cdn.steemjs.com/lib/latest/steem.min.js"></script>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/vs.min.css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
	</head>
	<body class="bg-secondary">
		<?php include("navbar.php"); ?>
		<div class="container article">
			<div class="row">
				<div style="width: 100%; position: relative;">
					<div id="app" ></div>
				</div>
			</div>
		</div>
		<?php include("footer.php"); ?>
	</body>
	<script src="./dist/build.js?filever=<?php echo filesize('./dist/build.js')?>""></script>
</html>