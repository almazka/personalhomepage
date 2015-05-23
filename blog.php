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
	<title>Blog</title>
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
				<h1>Blog</h1>
				<div class="controls">
					<span>Go to next / previous page</span>
					<a href="#" class="prev"></a>
					<a href="#" class="next"></a>
				</div>
			</header>
			<section class="main-area">
				<img class="post-img" src="img/post-pic.jpg" height="360" width="640" alt="pic">
				<article class="post">
					<h2>Standard Post with Image</h2>
					<ul class="data">
						<li class="date">
							<i></i><a href="#">30 march</a>
						</li>
						<li class="author">
							<i></i><a href="#">Admin</a>
						</li>
						<li class="comments">
							<i></i><a href="#">2 comments</a>
						</li>
					</ul>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. This is Photoshop's version  of Lorem Ipsum.</p>
				</article>
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
			$.pixlayout("pixLayout/Single-Post.jpg");
			$.pixlayout({
			src: "pixLayout/Single-Post.jpg",
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