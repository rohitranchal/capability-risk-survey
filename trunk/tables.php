<html>
<body>
<?php

	$con = mysqli_connect("localhost","root","testing","cap_risk");

	$sql = "SELECT * FROM Session";
	$res = mysqli_query($con, $sql);
	?>
	<h1>Session</h1>
	<table border="1">
		<tr><th>ID</th><th>IP</th><th>Timestamp</th></tr>
	<?
	while ($row = mysqli_fetch_array($res)) {
		?>
		<tr><td><?=$row[0]?></td><td><?=$row[1]?></td><td><?=$row[2]?></td></tr>
		<?
	}

	$sql = "SELECT * FROM Capability";
	$res = mysqli_query($con, $sql);
	?>
	</table>
	<h1>Capability</h1>
	<table border="1">
		<tr><th>session_id</th><th>c1</th><th>c2</th><th>c3</th><th>c4</th><th>c5</th><th>c6</th></tr>
	<?
	while ($row = mysqli_fetch_array($res)) {
		?>
		<tr><td><?=$row[0]?></td><td><?=$row[1]?></td><td><?=$row[2]?></td><td><?=$row[3]?></td><td><?=$row[4]?></td><td><?=$row[5]?></td><td><?=$row[6]?></td></tr>
		<?
	}


	$sql = "SELECT * FROM Threat_Rank";
	$res = mysqli_query($con, $sql);
	?>
	</table>
	<h1>Threat_Rank</h1>
	<table border="1">
		<tr><th>session_id</th><th>threat</th><th>capability</th><th>et</th><th>se</th><th>ks</th><th>wo</th><th>re</th></tr>
	<?
	while ($row = mysqli_fetch_array($res)) {
		?>
		<tr><td><?=$row[0]?></td><td><?=$row[1]?></td><td><?=$row[2]?></td><td><?=$row[3]?></td><td><?=$row[4]?></td><td><?=$row[5]?></td><td><?=$row[6]?></td><td><?=$row[7]?></td></tr>
		<?
	}
?>
</table>
</body>
</html>