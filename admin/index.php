<?php
include '../config.php';
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);

if (isset($_GET['del'])) {
	$del_id = $_GET['del'];
	$sql = "DELETE FROM messages WHERE id=$del_id";
	$res = $db->query($sql);
}
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
	<link rel="icon" href="../favicon.ico">
	<title>Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="admin">
<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Robb Armstrong Site</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="../profile.php">Profile</a></li>
						<li><a href="../blog.php">Blog</a></li>
						<li class="active"><a href="../contact.php">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container">

			<div class="starter-template">
				<h1>Административная панель</h1>
				<p class="lead">Сообщения пользователей</p>
			</div>

<table class="table table-bordered table-hover">
	<tr class="info">
		<th>Имя</th>
		<th>E-mail</th>
		<th>Сайт</th>
		<th>Сообщение</th>
		<th></th>
	</tr>

<?php
$sql = "SELECT id,name,email,website,message FROM messages";
$res = $db->query($sql);
$msg = $res->fetchAll();
	foreach ($msg as $value) {
	echo "<tr>";
	echo "<td>".$value['name']."</td>";
	echo "<td>".$value['email']."</td>";
	echo "<td>".$value['website']."</td>";
	echo "<td>".$value['message']."</td>";
	echo "<td><a href='index.php?del=".$value['id']."' class='btn btn-success'>Удалить</a></td>";
	echo "</tr>";
}
?>
</table>
</div><!-- /.container -->


<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>