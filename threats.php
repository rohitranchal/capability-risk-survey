<?php

$threat_labels = array(0 => "Unauthorized join of meetings",
	1 => "Unauthorized use of the VC station, e.g., control the movement of the camera",
	2 => "Unauthorized access to frames exchanged between the VC station and communicating station",
	3 => "Unauthorized modification of frames sent from the VC to communicating station",
	4 => "Interrupt the VC station",
	5 => "Unauthorized change of the behavior of the VC station");



?>


<head>
<title>Capability-based Security Risk Estimation and Mitigation for Information
Systems</title>

<link rel="stylesheet" href="Capsurvey.css">
</head>

<body>
<pre>Assessment of Likelihood of  Success of Exercising Threats</pre>

<p>Attackers may not always need to be security experts  who have all resources and time to perform successful attacks. For instance,  most attacks do not require deep security knowledge if appropriate tools are  available, e.g., Denial of Service (DoS) attack. In this form we assess the  likelihood of success of exercising the threats. The likelihood of exercising a  threat measures the chance that an attacker could exploit a weakness or  vulnerability in the system to trigger the threat. The success score combines,  equally, the scores for the factors: required security expertise, required  equipment and tools, knowledge of the system, elapsed time to find a weakness  and develop an attack, and window of opportunity to perform an attack (e.g.,  the system tolerates only 3 attempts of failed passwords). For each threat,  please select the level required of each factor to perform a successful attack.  Since, this is the initial risk assessment for a system to build, you may  consider the system does not have security controls yet (Safeguards, features,  and mechanisms that protect a system from specific threats.). <p>
<p>
  <input type="hidden" name="type" value="threats"/>
</p>
<form action="process.php" method="post">
<table>
	<tr>
		<th>Threat</th>
		<th>Elapsed time</th>
		<th>Specialist expertise</th>
		<th>Knowledge of the system</th>
		<th>Window of opportunity</th>
		<th>Required equipment</th>
	</tr>
	
	<?
	foreach ($threat_labels as $threat => $threat_label) {
		?>
		<tr>
		<td><?=$threat_label?>
		</td>
		<td>
			<select name="<?=$threat?>_et">
				<option value="2">Requires 1 year</option>
				<option value="4">Requires 1 month</option>
				<option value="6">requires 1 day</option>
				<option value="8">requires few minutes</option>
			</select>
		</td>
		<td>
			<select name="<?=$threat?>_se">
				<option value="1">Multiple Experts</option>
				<option value="3">Expert</option>
				<option value="6">Professional</option>
				<option value="8">Layman</option>
			</select>
		</td>
		<td>
			<select name="<?=$threat?>_ks">
				<option value="2">Deep nowledge is required</option>
				<option value="4">Generic knowledge is required</option>
				<option value="8">No knowledge is required</option>
				
			</select>
		</td>
		<td>
			<select name="<?=$threat?>_wo">
				<option value="2">One Second</option>
				<option value="2">One Day</option>
				<option value="4">One Month</option>
				<option value="6">One Year</option>
				<option value="8">Unlimited</option>
			</select>
		</td>
		<td>
			<select name="<?=$threat?>_re">
				<option value="0">Not Available</option>
				<option value="2">Only for Experts</option>
				<option value="4">Expensive-e.g., 10 000</option>
				<option value="8">Cheap equipment or script available on the internet</option>
			</select>
		</td>
		</tr>
		<?
	}
	?>
	
</table>
<input type="submit" value="Submit"/>
</form>
</body>>