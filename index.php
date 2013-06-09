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
<title>Capability-based Security Risk Estimation and Mitigation for Information
Systems</title>

<link rel="stylesheet" href="Capsurvey.css">
</head>
<Body>
<pre>Capability-based Security Risk Estimation and Mitigation for Information   Systems   
 </pre>
<h2>Team members</h2>
<p><a href="http://www.cs.purdue.edu/homes/bb">Prof. Bharat Bhargava</a><br>
  <a href="http://www.win.tue.nl/~lothmane/">Dr. Lotfi Ben Othmane</a><br>
  <a href="http://www.ruchith.org">Ruchith Fernando</a><br>
  <a href="http://www.cs.purdue.edu/homes/rranchal">Rohit Ranchal</a></p>

<h2> Project Introduction </h2>

<p>The goal of this survey is to collect expert  opinions about the likelihood of a set of threats to be developed  video conferencing systems  using two different approaches; they will be described later. You assume that the risk estimate is performed  at the inception stage of the project; that is, technology choices, such as operating system and programming language, will be made in a later stage. You  also consider that it is possible to trigger all the listed threats  and the  potential attacker does not need to be an expert. </p>
<h2>Description of the Video Conferencing System</h2>

<p>Video  Conferencing (VC) system, as depicts in the following figure, allows multiple  users to remotely communicate with each other and share applications and  documents. A typical VC station may use devices, such as camera for video  input, television for video output, microphone for audio input, speaker for  audio output, and computer for data and application sharing. The stations  communicate without the use of third party service. The assets of the VC system  are the video, audio, data captured by the communicating stations, station  firmware, and station hardware. <br>
</p>

<img border=0 width=800 height=242 id="_x0000_i1031"
src="http://www.cs.purdue.edu/homes/rranchal/images/VC-system.png"
alt="Video conferencing system">

<h2>Survey</h2>

<p>Attackers could be interested to  snoop on organization meetings stealthily, view documents in the meeting rooms,  or disturb the meeting schedules of the staff of the organization and their  partners. An attacker may have or acquire certain capabilities to carry out a  successful attack on VC station. In the following, you may provide, in three steps, your  expert opinion of the likelihood of the threats that attackers can potentially trigger.  The steps are:</p>
<ol>
  <li>Please  use the following link to provide your opinions about the likelihood of the  threats to the system by selecting perceived scores for  the given factors that describe the likelihood of exercising the threats. Please click <a href="threats.php">here</a>. </li>
  <li>Please  use the following link to provide your opinions about the attacker capabilities  (e.g., attacker physical access to street camera) that an attacker may have or  acquire.  Please click <a href="cap.php">here</a>.</li>
  <li class="Capsurvey">Please  use the following link to provide your opinions about the likelihood of the  threats to the system by selecting the perceived scores for  the given factors that describe the likelihood of exercising the threat.  Note that in this step, we provide the capabilities related to each threat.  Please click<a href="threat_cap.php"> here</a>.</li>
</ol>
<p>
We thank you for accepting to participate in the survey and provide your expert opinion.</p>

<p>All the information collected in this survey will be kept anonymous and will never be linked with the survey
  takers. <br>

Questions and comments: <a href="mailto:bb-survey@cs.purdue.edu">bb-survey@cs.purdue.edu</a></p>

</body>

</html>