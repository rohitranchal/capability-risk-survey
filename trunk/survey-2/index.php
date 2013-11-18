<?php
session_start();

//Generate new session id
if(isset($_SESSION['cap_id'])) {
	//Fetch session
	$id = $_SESSION['cap_id'];
} else {
	header("Location: ./pin.html");
}

?>

<head>
<title>Capability-based Security Risk Estimation and Mitigation for Information Systems</title>

<link rel="stylesheet" href="Capsurvey.css">
</head>
<Body>
<pre>Capability-based Security Risk Estimation and Mitigation for Information Systems</pre>
<h2>Team members</h2>
<p><a href="http://www.cs.purdue.edu/homes/bb">Prof. Bharat Bhargava</a><br>
	<a href="http://www.win.tue.nl/~lothmane/">Dr. Lotfi Ben Othmane</a><br>
	<a href="http://www.ruchith.org">Ruchith Fernando</a><br>
	<a href="http://www.cs.purdue.edu/homes/rranchal">Rohit Ranchal</a></p>

<h2> Project Introduction </h2>

<p>The goal of this survey is to collect expert opinions about the likelihood of a set of threats to connected vehicles using two different approaches, which we describe later. You assume that the risk estimate is performed at the inception stage of the project; that is, technology choices, such as operating system and programming language, will be made in a later stage. You also consider that it is possible to trigger all the listed threats and the potential attacker does not need to be an expert. </p>
<h2>Description of the System</h2>

<p>A motor vehicle uses a set of sensors and Electronic Control Units (ECUs) to collect data about the vehicle's behavior and environment, and to control the functionalities of the vehicle. ECUs can collaborate by exchanging messages and form an in-vehicle network (a.k.a. on-Board network). Motor vehicles, until recently, used to have a closed in-vehicle network, i.e. they did not have external connectivity. Messages exchanged between the components of a vehicle were produced and consumed by the nodes of the in-vehicle network.</p>

<table align="center">
<tr>
	<td><img width="700" src="in-Vehicle-ECU-Architecture.png"/></td><td width="50"></td><td><img width="200" src="Remotevehicle.jpeg"/></td>
</tr>
<tr>
	<td align="center">An example architecture of in-vehicle network.</td><td width="100"></td><td>Remote access to a connected vehicle.</td>
</tr>
</table>

<br/>
<p>Today,
several applications such as cooperative adaptive cruise control, remote
firmware update, e-call, and remote diagnostic of vehicles require
communication with the in-vehicle network of the vehicle. Modern vehicles are
connected vehicles whose ECUs communicate through an in-vehicle network, and
they communicate with neighboring vehicles and Road Side Units (RSUs), personal
devices, and Service Centers (SCs). The assets of the connected vehicles
include the occupants of the vehicle, the in-vehicle data and the
functionalities of the vehicle components. The following video shows possible
attack scenarios on a vehicle: <a href="http://www.youtube.com/watch?v=0VZgU9ac_QI">(Work of Johan van Uden)</a></p>


<h2>Survey</h2>

<p>Attackers
could be interested to harm the occupants of a connected vehicle, steal the
vehicle or prevent the systems of the vehicle from working properly. We
appreciate that you provide us with your expert opinion about the likelihood of
the threats that the attackers may want to cause. So, Please</p>
<ol>
	<li>Click <a href="threats.php">here</a> to provide your
opinions about the likelihood of the threats to the system by selecting
perceived scores for the given factors that describe the likelihood of
exercising the threats. </li>
	<li>Click <a href="cap.php">here</a> to provide your
opinions about the attacker capabilities (e.g., attacker physical access to
street camera) that an attacker may have or acquire.</li>
	<li class="Capsurvey">Click<a href="threat_cap.php"> here</a> to provide
your opinions about the likelihood of the threats to the system by selecting
the perceived scores for the given factors that describe the likelihood of
exercising the threat. Note that in this step, we provide the capabilities
related to each threat.</li>
</ol>
<p>
We thank you for accepting to participate in the survey and provide your expert opinion.</p>

<p>All the information collected in this survey will be kept anonymous and will never be linked with the survey
	takers. <br>

Questions and comments: <a href="mailto:bb-survey@cs.purdue.edu">bb-survey@cs.purdue.edu</a></p>

</body>

</html>