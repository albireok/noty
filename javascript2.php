<html>
	<head>
		<script>
			var i = 0;
			while (i < 100) {
				document.write(i);
				document.write(',');
				i++;
			}
		</script>
	</head>
	<body>
		<?php
		$i = 0;
		while($i<100){
			echo $i;
			echo ',';
			$i++;
		}
		?>
	</body>
</html>