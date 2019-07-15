<!DOCTYPE HTML>
<html>
	<head>
		<title>Hyuns - 현스</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<p style="font-family: 'Gugi', cursive;">암호를 입력해주세요.</p>
						<form action="login_process.php">
							<input type="text" name="password" style="color: black; font-family: 'Gugi', cursive;">
							<input type="submit" style="font-family: 'Gugi', cursive; height: 90%; background-color: #4D4580; border: 0">
						</form>

					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy;2019 Hyuns Production.</span>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>
