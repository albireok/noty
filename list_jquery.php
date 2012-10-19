<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	</head>
	<body>
		<?php
		mysql_connect('localhost', 'root', '111111');
		mysql_select_db('egoing');
		mysql_query("set session character_set_connection=utf8;");
		mysql_query("set session character_set_results=utf8;");
		mysql_query("set session character_set_client=utf8;");
		$sql = "SELECT * FROM topic;";
		$result = mysql_query($sql);
		?>
		<data-role="page">
			<div data-role="header">
				<h1>JavaScript</h1>
			</div><!-- /header -->

			<div data-role="content">
				<ul data-role="listview" data-inset="true">
					<?php
					while ($row = mysql_fetch_assoc($result)) {
						echo '<li><a href="list_jquery.php?id=' . $row['id'] . '">' . $row['title'] . '</a></li>';
					}
					?>
				</ul>
				<?php
				if (!empty($_GET['id'])) {
					$sql = "SELECT * FROM topic WHERE id=" . $_GET['id'];
					$result = mysql_query($sql);
					$row = mysql_fetch_assoc($result);
					echo "<h2>" . $row['title'] . "</h2>";
					echo "<div>" . $row['description'] . "</div>";
				}
				?>
			</div><!-- /content -->

		</data-role="page">
	</body>
</html>
