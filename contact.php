<?php
session_start();
include 'config.php';
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);

function clear($value)
{
	return trim(strip_tags($value));
}
	/* validate and send */

if (isset($_POST["email"]) and isset($_POST["message"])) {
	$name = clear($_POST['name']);
	$email = clear($_POST['email']);
	$message = clear($_POST['message']);
	$message = nl2br($message);
	$website = clear($_POST['website']);
	$errmsg = "";
	$errmail = "";
	$emptymail = "";
	$emptymsg = "";
	if (!empty($email) && !empty($message)) {
		$truemail = filter_var($email, FILTER_VALIDATE_EMAIL);
		if (!$truemail) {
			$errmail = "Неправильный e-mail!";
		} elseif (strlen($message)>500) {
			$errmsg = "Превышена максимальная длина сообщения, 500 символов!";
		} else {
			$sql = "INSERT INTO messages (name,email,website,message) VALUES(:name, :email, :website, :message)";
			$res = $db->prepare($sql);
			$res->execute(array(':name'=>$name, ':email'=>$email, ':website'=>$website, ':message'=>$message));
		$_SESSION["res"] = "Сообщение сохранено";
		$name = "";
		$email = "";
		$message = "";
		$website = "";
		}
	} else {
		if (empty($email)) {
			$emptymail = "Заполните обязательное поле!";
		}
		if (empty($message)) {
			$emptymsg = "Заполните обязательное поле!";
		}
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
				<?php 
				if ($_SESSION["res"]) {
						echo "<h2 class='form-msg'>".$_SESSION["res"]."</h2>";
						unset($_SESSION["res"]);
				}
				?>
			</header>
			<section class="main-area">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=rowjoNRTGVNFL-a5ualbpOteMk9GiyfQ&width=640&height=360"></script>
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
							<input type="text" name="name" placeholder="name" value="<?php echo $name;?>">
							<?php 
							if ($emptymail != "") {
								echo "<p class='notice'>".$emptymail."</p>";
							}
							if ($errmail != "") {
								echo "<p class='notice'>".$errmail."</p>";
							}
							 ?>
							<input type="text" name="email" placeholder="e-mail" value="<?php echo $email;?>">
							<input type="text" name="website" placeholder="website" value="<?php echo $website;?>">
						</div>
						<?php if ($emptymsg != "") {
								echo "<p class='notice'>".$emptymsg."</p>";
							} 
							if ($errmsg != "") {
								echo "<p class='notice'>".$errmsg."</p>";
							}
							?>
						<textarea name="message"><?php echo $message;?></textarea>
						<input type="submit" class="button" value="Send Message" />
					</form>
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