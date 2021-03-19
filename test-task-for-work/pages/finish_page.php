<?php
  require "../includes/config.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="/icon/icon.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Balsamiq+Sans&family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../style/animation.css">
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<main class="center">
		<div class="column center">
			<a href="/" class="head all-members animation_top">To the main</a>
			<div class="icons">
				<!-- <a class="icon_a" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&u=https%3A%2F%2Fbeget.ru%2Fru%2Ffree-hosting&display=popup&ref=plugin&src=share_button"><i class="fab fa-facebook-f icon"></i></a>
				<a class="icon_a" href="#"><i class="fab fa-twitter icon"></i></a> -->
				<iframe class="facebook animation_left" src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fbeget.ru%2Fru%2Ffree-hosting&layout=button_count&size=large&width=130&height=28&appId" width="130" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
				<div class="animation_right"><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="<?php echo $config['twitText']; ?>" data-url="<?php echo $config['address']; ?>" data-lang="ru" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
			</div>
			<?php 
				$article = mysqli_query($connection, "SELECT COUNT( * ) FROM `users`");
				$num_rows = mysqli_fetch_row( $article )[0];
			?>
				<a class="all-members animation_bottom" href="all_members.php">All members (<?php echo $num_rows ; ?>)</a>
		</div>
	</main>

	<script src="https://kit.fontawesome.com/987736137a.js" crossorigin="anonymous"></script>
</body>
</html>