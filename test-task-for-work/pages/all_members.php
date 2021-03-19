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
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<main class="center">
		<div class="column">
			<a href="/" class="all-members">To the main</a>
			
			
			<div class="table">
				<?php
	              $article = mysqli_query($connection, "SELECT * FROM `users`");	              
	            ?>

	            <?php 
	              while( $art = mysqli_fetch_assoc($article) )
	              {
	                ?>
						  <div class="line">
						  	<div class="field">
						  		<div class="field__border">
						  			<p class="field__paragraph">
						  				<div class="photo-profile" style="background-image: url(../image/<?php echo $art['photo']; ?>)"></div>
						  			</p>
						  		</div>
						  	</div>
						    <div class="field">
						    	<div class="field__border">
						    		<p class="field__paragraph">
						    			<?php echo $art['firstName']; ?> <?php echo $art['lastName']; ?>
						    		</p>
						    	</div>
						    </div>
						    <div class="field">
						    	<div class="field__border">
						    		<p class="field__paragraph field__height">
						    			<?php echo $art['reportSubject']; ?>
						    		</p>
						    	</div>
						    </div>
						    <div class="field">
						    	<div class="field__border">
						    		<p class="field__paragraph">
						    			<?php echo $art['email']; ?>
						    		</p>
						    	</div>
						    </div>
						  </div>
	                <?php
	              }
	            ?>
	        </div>
			



		</div>
	</main>

	
</body>
</html>