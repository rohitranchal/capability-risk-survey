<?php
session_start();

//Generate new session id
if(isset($_SESSION['cap_id'])) {
	//Fetch session
	$id	= $_SESSION['cap_id'];
} else {
	//Create session
	$id = uniqid();
	$_SESSION['cap_id'] = $id;
	$con = mysqli_connect("localhost","root","testing","cap_risk");
	mysqli_query($con, "INSERT INTO Session(id) VALUES ('$id')");
}

?>
<html>
<head>
	<title>Survey: Capability-based Security Risk Estimation and Mitigation for Information Systems</title>
</head>
<body>
<p>TODO : Describe the survey</p>
<a href="cap.php">Enter Capability Ratings</a><br/>
<a href="threat_score.php?threat=0">Enter Threat Likelyhood Scores</a>

</body>
</html>