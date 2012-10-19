<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Types" content="text/html;charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<style>
			body{
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<div data-role="page">
			<div data-role="header">
				<h1>JavaScript</h1>
			</div>
			<div data-role="content">
		<?php
		mysql_connect('localhost', 'root', '111111');
		mysql_select_db('albireok');
		$sql = "SELECT id,title FROM topic";
		$result = mysql_query($sql);
		?>
		<div class="row">
			<div class="span12">
				<h1>
					Javascript
					</h1>
			</div>
		</div>
		<div class="row">
		<div class="span3">
		<ol data-role="listview" data-inset="true">
			<?php
			while ($row = mysql_fetch_assoc($result)) {
			?>
			<li>
				<a href="index_jquery.php?id=<?=$row['id'] ?>"><?=$row['title'] ?></a>
			</li>
			<?php
			}
			?>
		</ol>
		</div>

		<?php
		$sql = "select * from topic where id = " . mysql_real_escape_string($_GET['id']);
		$result = mysql_query($sql);
		$row = mysql_fetch_assoc($result);
		?>
		<div class="span9">
			<div>
				<h2><?=htmlspecialchars($row['title']) ?></h2>
				<div><?=$row['description'] ?></div>
			</div>
		</div>
		</div>
		<?php ?>
		</div>
		</div>
	</body>
</html>

