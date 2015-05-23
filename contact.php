<?php

define('FILENAME', "messages.csv");

function Clear($value) {
	return trim(strip_tags($value));
}

/* validate and send */

if (isset($_POST["email"]) and isset($_POST["message"])) {
	$name = Clear($_POST['name']);
	$email = Clear($_POST['email']);
	$message = Clear($_POST['message']);
	$website = Clear($_POST['website']);
	$errmsg = "";
	
	if (!empty($email) && !empty($message)) {
		$truemail = filter_var($email, FILTER_VALIDATE_EMAIL);
		if (!$truemail) {
			$errmsg = "Неправильный e-mail!";
			//$_SESSION["err"] = "E-mail invalid!";
	} else {
		$uploadOk = "";
			$list = array ($name, $email, $message);
			$fp = fopen(FILENAME, 'w');
			
			foreach ($list as $fields) {
					fputcsv($fp, $fields);
			}

			fclose($fp);
			var_dump($list);
		}

		$uploadOk = "Сообщение сохранено";
	}
} 

/* end of validate and send */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
	<meta name="viewport" content="minimal-ui">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="Описание сайта для поисковых систем">
	<link rel="icon" href="favicon.ico">
	<title>Contact</title>
	<link href="css/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="main-container">
		<div class="left">
			<div class="wrapleft">
			<div class="logo">
				<div>
					<img src="img/photo.jpg" height="120" width="120">
				</div>
			</div>
			<nav>
				<ul>
					<li class="profile"><a href="profile.php">Profile<i></i></a></li>
					<li class="work"><a href="#">Work<i></i></a></li>
					<li class="resume"><a href="#">Resume<i></i></a></li>
					<li class="blog"><a href="blog.php">Blog<i></i></a></li>
					<li class="contact"><a href="contact.php">Contact<i></i></a></li>
				</ul>
			</nav>
			</div>
		</div>
		<div class="right">
			<div class="wrap">
			<header>
				<h1>Contact us</h1>
				<div class="controls">
					<span>Go to next / previous page</span>
					<a href="#" class="prev"></a>
					<a href="#" class="next"></a>
				</div>
				<?php if ($uploadOk != "") {
					echo "<h2 class='form-msg'>".$uploadOk."</h2>";
				}
				?>
			</header>
			<section class="main-area">
				<img class="map" src="img/map.jpg" height="360" width="640" alt="map">
				<article class="contact-info">
					<h2>Contact info</h2>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
					<ul class="data">
						<li class="address"><i></i><a href="/">lorem ipsum street</a></li>
						<li class="phone"><i></i><a href="tel:+3995003219548">+399 (500) 321 9548</a></li>
						<li class="mail"><i class="mail-icon"></i><a href="mailto:info@domain.com">info@domain.com</a></li>
					</ul>
				</article>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="message" method="post">
						<h2>Send us a message</h2>
						<div class="left">
							<input type="text" name="name" placeholder="name">
							<input type="text" name="email" placeholder="e-mail">
							<?php 
							if (empty($_POST['email'])) {
								echo $errmsg;
							}
							 ?>
							<input type="text" name="website" placeholder="website">
						</div>
						<textarea name="message"></textarea>
						<input type="submit" class="button" value="Send Message" />
					</form>
					<section class="message-list">
						<?php
						/*if (($handle = fopen(FILENAME, "r")) !== FALSE) {
								while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
										$num = count($data);
										for ($c=0; $c < $num; $c++) {
											echo "<p>".$data[$c] . "</p>";
										}
								}
								fclose($handle);
						}*/
						/*if (file_exists(FILENAME)) {
							$filearr = file(FILENAME);
							if (is_array($filearr)) {
								$filearr = array_reverse($filearr);
							foreach ($filearr as $value) {
								echo "<p>".$value."</p>";
							}
						}}*/
						?>
					</section>
			</section>
		</div>
		<footer>
		<div class="wrap">
			<p class="copyright">© 2015 Robb Armstrong, All Rights Reserved</p>
			<div class="social">
				<a href="#" class="fb"></a>
				<a href="#" class="tw"></a>
				<a href="#" class="dr"></a>
				<a href="#" class="p"></a>
			</div>
		</div>
		</footer>
		</div>
		
</div>
<!--
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript" src="pixLayout/pixLayout.js"></script>
<script type="text/javascript">
	$(function(){
			$.pixlayout("pixLayout/Contact.jpg");
			$.pixlayout({
			src: "pixLayout/Contact.jpg",
			opacity: 0.5,
			top: 0,
			left: 134,
			right: 135,
			center: true,
			clip: true,
			show: true
	}, ".wrapper");
	});
</script>
-->
</body>
</html>