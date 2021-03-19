<?php
  require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $config['title']; ?></title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
	<link rel="shortcut icon" href="/icon/icon.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Balsamiq+Sans&family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/style/animation.css">
	<link rel="stylesheet" href="/style/style.css">
</head>
<body>
	<main>
		
		<!-- <div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.778371825068!2d-118.34559333504612!3d34.10081764785572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2zNzA2MCBIb2xseXdvb2QgQmx2ZCwgTG9zIEFuZ2VsZXMsIENBIDkwMDI4LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1615302025587!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div> -->
		
		<div class="container">
			<div class="column">
				<div>
					<div class="title animation_text">
						<h1>To participate in the conference, please fill out the form</h1>
					</div>
					<div class="block-size-form">
						<div class="first_form animation">
							<?php include "includes/first_form.php" ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<script src="/script/jquery.maskedinput.min.js"></script>
	<script src="/script/script.js"></script>
</body>
</html>