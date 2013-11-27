<?php
$threat = $_GET['threat'];

$threat_labels = array(0 => "Falsification of speedometer reading of the vehicle",
	1 => "Disruption of the braking system of the vehicle",
	2 => "Disruption of the emergency response system of the vehicle (e.g., OnStar)",
	3 => "Generating false check lights in the dashboard on the vehicle",
	4 => "Locking the gearstick in a fixed position",
	5 => "Sending deceptive messages to the infotainment system",
	6 => "Remotely update an ECU");

$caps_defs = array(0 => "Attacker can physically access the OBD-II port",
	1 => "Attacker can physically access the CAN bus (e.g. Connect a new ECU to the CAN bus)",
	2 => "Attacker can remotely inject messages to CAN bus",
	3 => "Attacker can spoof external GPS signals",
	4 => "Attacker can control communication between the vehicle and the Internet");

$threat_cap = array(
	0 => array(0,1,2),
	1 =>array(1,2),
	2 => array(1,3,4),
	3 => array(1,2),
	4 => array(1,2),
	5 => array(1,3,4),
	6 => array(2));
?><head>
<title>Capability-based Security Risk Estimation and Mitigation for Information
Systems</title>

<link rel="stylesheet" href="Capsurvey.css">
</head>



<pre>Assessment of Likelihood of  Success of Exercising Threats</pre>

<p>For each threat, please select  the level required of each factor to perform a successful attack assuming the  attacker has the specified capability. </p>
<p>&nbsp;</p>
<p>Note: The estimate is for the initial risk  assessment for a system to develop, you may consider the system does not have  security controls yet (Safeguards, features, and mechanisms that protect a  system from specific threats). </p>
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
<input type="submit" value="submit" style="width:100px;font-size:xx-large" />
<p>Thank you for your participation.</p>
</form>