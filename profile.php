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
	<title>Profile</title>
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
				<h1 class="main-title">Hello, I am <span>Robb Armstrong</span><br>
				Designer and Front-end Developer
				</h1>
				<p class="title">
					I have ten years experience as a web/interface designer. I have a love of clean, elegant styling, and I have lots of experience in the production of CSS and (X)HTML for modern websites. I have a reasonable grasp of using JavaScript frameworks, specifically jQuery.
				</p>
			</header>
			<section class="main-area minimal">
				<div class="personal-info">
					<h2>Personal Info</h2>
					<ul>
						<li>
							<span class="title">name</span><span class="desc">Robb Armstrong</span>
						</li>
						<li>
							<span class="title">date of birth</span><span class="desc">September 06, 1976</span>
						</li>
						<li>
							<span class="title">e-mail</span><span class="desc">info@yourdomain.com</span>
						</li>
						<li>
							<span class="title">address</span><span class="desc">121 King St, Melbourne VIC</span>
						</li>
						<li>
							<span class="title">phone</span><span class="desc">012-3456-7890</span>
						</li>
						<li>
							<span class="title">website</span><span class="desc">www.themeforest.net</span>
						</li>
					</ul>
				</div>
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
			$.pixlayout("pixLayout/Profile.jpg");
			$.pixlayout({
			src: "pixLayout/Profile.jpg",
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