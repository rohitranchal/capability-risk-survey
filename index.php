<?php
session_start();

//Generate new session id
if(isset($_SESSION['cap_id'])) {
  //Fetch session
  $id = $_SESSION['cap_id'];
} else {
  header("Location: ./pin.html");
}

?><head>
<title>Capability-based Security Risk Estimation and Mitigation for Information
Systems</title>

<Body>
<h1 align=center>Capability-based Security Risk Estimation and Mitigation for Information
Systems</h1>

<br>
<h2>Team members</h2>
<p><a href="http://www.cs.purdue.edu/homes/bb">Prof. Bharat Bhargava</a><br>
<a href="http://www.win.tue.nl/~lothmane/">Dr. Lotfi Ben Othmane</a><br>
<a href="http://www.ruchith.org">Ruchith Fernando</a><br>
<a href="http://www.cs.purdue.edu/homes/rranchal">Rohit Ranchal</a>
</p>

<h2> Project Introduction </h2>

<p>The goal of this survey is to collect expert opinions about the likelihood of a set of threats to video
conferencing systems using two different approaches. You assume that the risk
estimate is performed at the inception stage of the project; that is, before
making choices concerning the technology—e.g., operating system and programming
language. You consider that there are successful attacks that exercise the
threats and the attacker is an individual hacker—not expert though. </p>

<p>In the following we describe the system and the steps of the survey.</p>

<h2>Description of the Video Conferencing System</h2>

<p>Video Conferencing (VC) system, as depicts in the following figure, allows multiple users to remotely communicate
with each other and share applications and documents. A typical VC station may
use devices such as: camera for video input, television for video output,
microphone for audio input, speaker for audio output, and computer for data and
application sharing. The stations communicate without the use of third party
service. The assets of the VC system are the video, audio, and data captured by
the communicating stations, station firmware, and station hardware. </p>

<img border=0 width=800 height=242 id="_x0000_i1031"
src="http://www.cs.purdue.edu/homes/rranchal/images/VC-system.png"
alt="Video conferencing system">

<h2>Survey</h2>

<p>Attackers could be interested to snoop on organization meetings stealthily,
view documents in the meeting rooms, or disturb the meeting schedules of the
staff of the organization and their partners. An attacker may have or acquire
certain capabilities to carry out a successful attack on VC station. We
appreciate that you provide us with your expert opinion of the likelihood of
the threats that the attacker can trigger. The steps ar:</p>

<ol>
  <li>Please  provide your opinion about the likelihood of the threats to the system and
    select the scores that you believe appropriate, for the given attributes that
    describe the likelihood of exercising the threat. Please click <a href="threats.php">here</a>. </li>
  <li>Please provide your opinion about the capabilities that an attacker may have or acquire. For each capability, please select
    an option corresponding to the likelihood that an attacker may have or acquire
    that capability. Please click <a href="cap.php">here</a>.</li>
  <li>Please provide your opinion about the likelihood of the threats to the system and select the scores that you believe appropriate, for the given attributes that describe the likelihood of exercising the threat. Note that in this step, we provide the capabilities related to each threat and request survey takers to select scores for given attributes. Please click<a href="threat_score.php?threat=0"> here</a>.</li>
</ol>

<p>
We thank you for accepting to participate in the survey and provide your expert opinion.</p>

<p>All the information collected in this survey will be kept anonymous and will never be linked with the survey
takers. <br>

Questions and comments: <a href="mailto:bb-survey@cs.purdue.edu">bb-survey@cs.purdue.edu</a>
</p>

</body>

</html>