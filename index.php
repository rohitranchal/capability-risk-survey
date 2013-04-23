<?php
session_start();

//Generate new session id
if(isset($_SESSION['cap_id'])) {
	//Fetch session
	$id	= $_SESSION['cap_id'];
} else {
  header("Location: ./pin.html");
}

?>

<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:st1="urn:schemas-microsoft-com:office:smarttags"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="index_files/filelist.xml">
<link rel=Edit-Time-Data href="index_files/editdata.mso">
<title>Capability-based Security Risk Estimation and Mitigation for Information Systems</title>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="country-region"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="State"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="City"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceType"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceName"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="place"/>
</head>

<body lang=EN-US style='tab-interval:.5in' vLink="#551A8b" aLink="#FF0000" link="#0000EE">

<div class=Section1>

  <p class=MsoNormal><a name=top></a><br>
  &nbsp; <br>
  &nbsp; </p>

  <p align=center style='text-align:center'><b><span style='font-size:24.0pt;
  font-family:Helvetica;color:navy'>Welcome to Risk Estimation Survey</span></b> </p>

  <p align=center style='text-align:center'><b><span style='color:#CC0000'><a
  href="#People">People</a> | <a href="#Project">Project</a> | <a href="#Survey">Survey</a>
  </span></b>
  </p>

<div class=MsoNormal>

<hr size=10 width="100%" noshade color=navy align=left>

</div>

  <h2 align=center style='text-align:center'><a name=People></a><span
  style='color:#000099'>People</span></h2>

  <blockquote style='margin-top:5.0pt;margin-bottom:5.0pt'>

  <!-- <h2><span style='font-size:13.5pt;color:#000099'>Graduated Students</span></h2> -->

  </blockquote>

  <blockquote style='margin-top:5.0pt;margin-bottom:5.0pt'>

  <ul type=disc>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
       mso-list:l33 level1 lfo1;tab-stops:list .5in'><a
       href="http://www.cs.purdue.edu/homes/bb"><span style='font-size:13.5pt'>Prof. Bharat Bhargava</span></a></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
       mso-list:l0 level1 lfo2;tab-stops:list .5in'><a
       href="http://www.win.tue.nl/~lothmane/"><span style='font-size:13.5pt'>Dr. Lotfi Ben Othmane</span></a></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
       mso-list:l0 level1 lfo2;tab-stops:list .5in'><a
       href="http://www.ruchith.org"><span style='font-size:
       13.5pt'>Ruchith Fernando</span></a></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
       mso-list:l0 level1 lfo2;tab-stops:list .5in'><span style='font-size:13.5pt'><a
       href="http://www.cs.purdue.edu/homes/rranchal">Rohit Ranchal</a></span></li>
  </ul>

  </blockquote>

  <p class=MsoNormal align=right style='text-align:right'><a href="#top">top</a></p>

<div class=MsoNormal>

<hr size=10 width="100%" noshade color=navy align=left>

</div>

  <h2 align=center style='text-align:center'><a name=Project></a><span
  style='color:#000099'>Project</span></h2>

  <h2 style='margin-left:.5in'><span style='font-size:14pt;color:#000099'>Capability-based Security Risk Estimation for a Video Conferencing System</span></h2>

  <p class=MsoNormal style='margin-left:.5in'><b><span style='font-size:13.5pt'>
    Video Conferencing (VC) system allows multiple users to remotely communicate with each other and share applications and documents. A typical VC station may use devices such as: camera for video input, television for video output, microphone for audio input, speaker for audio output, and computer for data and application sharing. The stations communicate without the use of third party service. The assets of the VC system are the video, audio, and data captured by the communicating stations, station firmware, and station hardwares.
    <br/> <br/>
    Attackers could be interested to snoop on organization meetings stealthily, view documents in the meeting rooms, or disturb the meeting schedules of the staff of the organization and their partners. An attacker may have or acquire certain capabilities to carry out a successful attack on VC station. The figure shows a generalized VC system and different attack points in the system.
    <br/> <br/>
    <center><img src="http://www.cs.purdue.edu/homes/rranchal/images/VC-system.png" alt="Video conferencing system" width="800" height="242"></center>

  </span></b> </p>

  <p class=MsoNormal align=right style='text-align:right'><a href="#top">top</a></p>

<div class=MsoNormal>

<hr size=10 width="100%" noshade color=navy align=left>

</div>

  <h2 align=center style='text-align:center'><a name=Survey></a><span
  style='color:#000099'>Survey</span></h2>

  <p class=MsoNormal style='margin-left:.5in'><b><span style='font-size:13.5pt'>
    In the following link, we describe a list of sample capabilities that an attacker may have or acquire. For each capability, we request the survery takers to select an option corresponding to the likelihood that an attacker may have or acquire that capability.
    <br/>
    <a href="cap.php">Enter Capability Ratings</a><br/><br/>

    In the following link, we describe threats to the VC system. An attacker needs certain capabilities to perform a threat. We list attacker capabilites related to each threat and request survey takers to select scores for given attributes that describe the chance that attackers get the required capabilities, opportunity and means to exercise the threat.
    <br/>
    <a href="threat_score.php?threat=0">Enter Threat-Capability Likelihood Scores</a><br/><br/>

    In the following link, we describe threats to the VC system without considering attacker capabilities and request survey takers to select scores for given attributes that describe the likelihood of exercising the threat.
    <br/>
    <a href="threats.php">Enter Threat Likelihood Scores</a>

  </span></b> </p>

  <p class=MsoNormal align=right style='text-align:right'><a href="#top">top</a></p>


<div class=MsoNormal>

<hr size=10 width="100%" noshade color=navy align=left>

</div>

<p class=MsoNormal><center>All the information collected in this survey will be kept anonymous and will never be linked with the survey takers.&nbsp; </center></p>

<div class=MsoNormal>

<hr size=10 width="100%" noshade color=navy align=left>

</div>

<p class=MsoNormal>
<center>Questions and comments: <a href="mailto:bb-survey@cs.purdue.edu">bb-survey@cs.purdue.edu</a></center>
</p>

</div>

</body>

</html>
