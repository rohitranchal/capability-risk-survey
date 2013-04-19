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

	$ip=$_SERVER['REMOTE_ADDR'];

	$con = mysqli_connect("localhost","root","testing","cap_risk");
	mysqli_query($con, "INSERT INTO Session(id, ip) VALUES ('$id', '$ip')");
}

?>
<html>
<head>
<title>Survey: Capability-based Security Risk Estimation and Mitigation for Information Systems</title>
</head>
<body>

<center><h2> Survey: Risk Estimation for a Video Conferencing System </h2></center>

<p>
A Video Conferencing (VC) system allows multiple users to remotely communicate with each other and share applications and documents. A typical VC station may use devices such as: camera for video input, television for video output, microphone for audio input, speaker for audio output, and computer for data and application sharing. The stations communicate without the use of third party service. The assets of the VC system are the video, audio, and data captured by the communicating stations, station firmware, and station hardwares.
<br/> <br/>

Attackers could be interested to snoop on organization meetings stealthily, view documents in the meeting rooms, or disturb the meeting schedules of the staff of the organization and their partners. An attacker may have or acquire certain capabilities to carry out a successful attack on VC station. The figure shows a generalized VC system and different attack points in the system.
</p>

<center><img src="http://www.cs.purdue.edu/homes/rranchal/images/VC-system.png" alt="Video conferencing system" width="800" height="242"></center>

<p>
In the following link, we describe a list of sample capabilities that an attacker may have or acquire. For each capability, we request the survery takers to select an option corresponding to the likelihood that an attacker may have or acquire that capability.
<br/>
<a href="cap.php">Enter Capability Ratings</a><br/><br/>

In the following link, we describe threats to the VC system. An attacker needs certain capabilities to perform a threat. We list attacker capabilites related to each threat and request survey takers to select scores for given attributes that describe the chance that attackers get the required capabilities, opportunity and means to exercise the threat.
<br/>
<a href="threat_score.php?threat=0">Enter Threat-Capability Likelihood Scores</a>
</p>

<a href="threats.php">Enter Threat Likelihood Scores</a>

</body>
</html>