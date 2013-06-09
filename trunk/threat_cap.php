<?php
$threat = $_GET['threat'];

$threat_labels = array(0 => "Unauthorized join of meetings",
	1 => "Unauthorized use of the VC station, e.g., control the movement of the camera",
	2 => "Unauthorized access to frames exchanged between the VC station and communicating station",
	3 => "Unauthorized modification of frames sent from the VC to communicating station",
	4 => "Interrupt the VC station",
	5 => "Unauthorized change of the behavior of the VC station");

$caps_defs = array("The attacker can remotely connect to the VC station",
	"The attacker can eavesdrop the communication between communicating stations, e.g., through sniffing the network",
	"The attacker can remove, inject, or modify messages exchanged between communicating stations. This includes sending fabricated commands to the VC station. (C3 includes C2)",
	"The attacker can remotely access a VC and change installed software, e.g., uses an already installed remote control software",
	"The attacker has physical access to control the use of the VC, e.g., power it on or off",
	"The attacker can modify the software installed in the VC station and change its circuits (e.g., maintenance officer)");

$threat_cap = array(
	0 => array(0,3,5),
	1 =>array(2,3,5),
	2 => array(1,3,5),
	3 => array(2,3,5),
	4 => array(2,3,4,5),
	5 => array(3,5));
?>
<head>
<title>Capability-based Security Risk Estimation and Mitigation for Information
Systems</title>

<link rel="stylesheet" href="Capsurvey.css">
</head>


<pre>Assessment of Likelihood of  Success of Exercising Threats</pre>

<p>For each threat, please select  the level required of each factor to perform a successful attack assuming the  attacker has the specified capability. Notice that this is the initial risk  assessment for a system to build, you may consider the system does not have  security controls yet (Safeguards, features, and mechanisms that protect a  system from specific threats.). </p>
<form action="process.php" method="post">
  <input type="hidden" name="type" value="threat_rank"/>
<table>
	<?
	foreach ($threat_cap as $threat => $caps) {
		
	?>
	<tr><td colspan="6"><h1><?=$threat_labels[$threat]?></h1></td></tr>
	<tr>
		<th>Capability</th>
		<th>Elapsed time</th>
		<th>Specialist expertise</th>
		<th>Knowledge of the system</th>
		<th>Window of opportunity</th>
		<th>Required equipment</th>
	</tr>
	
	<?
	foreach ($caps as $value) {
		?>
		<tr>
		<td><?=$caps_defs[$value]?>
		</td>
		<td>
			<select name="<?=$threat?>_<?=$value?>_et">
				<option value="2">Requires 1 year</option>
				<option value="4">Requires 1 month</option>
				<option value="6">requires 1 day</option>
				<option value="8">requires few minutes</option>
			</select>
		</td>
		<td>
			<select name="<?=$threat?>_<?=$value?>_se">
				<option value="1">Multiple Experts</option>
				<option value="3">Expert</option>
				<option value="6">Professional</option>
				<option value="8">Layman</option>
			</select>
		</td>
		<td>
			<select name="<?=$threat?>_<?=$value?>_ks">
				<option value="2">Deep nowledge is required</option>
				<option value="4">Generic knowledge is required</option>
				<option value="8">No knowledge is required</option>
				
			</select>
		</td>
		<td>
			<select name="<?=$threat?>_<?=$value?>_wo">
				<option value="2">One Second</option>
				<option value="2">One Day</option>
				<option value="4">One Month</option>
				<option value="6">One Year</option>
				<option value="8">Unlimited</option>
			</select>
		</td>
		<td>
			<select name="<?=$threat?>_<?=$value?>_re">
				<option value="0">Not Available</option>
				<option value="2">Only for Experts</option>
				<option value="4">Expensive-e.g., 10 000</option>
				<option value="8">Cheap equipment or script available on the internet</option>
			</select>
		</td>
		</tr>
		<?
	}
	}
	?>
	
</table>
<br/>
<input type="submit" value="Submit"/>
</form>