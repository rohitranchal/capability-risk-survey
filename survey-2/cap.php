<?php

?>

<head>
<title>Capability-based Security Risk Estimation and Mitigation for Information
Systems</title>

<link rel="stylesheet" href="Capsurvey.css">
</head>


<body>
<pre>Estimation of the Likelihood  of Attackers Capabilities</pre>

<p>Please use this form to provide your scores for the  likelihood that a potential attacker to VC system has the specified  capabilities. An attacker capability is the ability to use appropriate means  (e.g., skills, knowledge, time, expertise, and tools) and opportunity (e.g.,  enough time to perform the attack) required to exploit a specific weakness of  the system in order to exercise a specific threat. For example, an attacker  cannot copy files stored in a smart phone if he/she does not have physical or  remote access capabilities to the phone. </p>
<p>For each capability, please select an option corresponding to the  likelihood that an attacker may have or acquire that capability.</p>
<form action="process.php" method="post">
<input type="hidden" name="type" value="capabilities"/>
<table width="1026" cellpadding="10">
	<tr><th>Capability</th><th colspan="6">Rating</th></tr>
        
	<tr>
		<td><label for="c1_00" width="34%"> </label></td>
		<td><label for="c1_0">Impossible</label></td>
        <td><label for="c1_1">Very Unlikely</label></td>
		<td><label for="c1_2">Likely</label></td>
		<td><label for="c1_3">Possibly</label></td>
		<td><label for="c1_4">Highly Likely</label></td>
		<td><label for="c1_5">Certain/Sure</label></td>
	</tr>

	<tr>
		<td>Attacker can physically access the OBD-II port</td>
		<td><input type="radio" name="c1" value="0" id="c1_0"></td>
		<td><input type="radio" name="c1" value="1" id="c1_1"></td>
		<td><input type="radio" name="c1" value="2" id="c1_2"></td>
		<td><input type="radio" name="c1" value="3" id="c1_3"></td>
		<td><input type="radio" name="c1" value="4" id="c1_4"></td>
		<td><input type="radio" name="c1" value="5" id="c1_5"></td>
	</tr>

	<tr>
			
		<td>Attacker can physically access the CAN bus (e.g. Connect a new ECU to the CAN bus)</td>
		<td><input type="radio" name="c2" value="0" id="c2_0"></td>
		<td><input type="radio" name="c2" value="1" id="c2_1"></td>
		<td><input type="radio" name="c2" value="2" id="c2_2"></td>
		<td><input type="radio" name="c2" value="3" id="c2_3"></td>
		<td><input type="radio" name="c2" value="4" id="c2_4"></td>
		<td><input type="radio" name="c2" value="5" id="c2_5"></td>
	</tr>

	<tr>
		<td>Attacker can remotely inject messages to CAN bus</td>
		<td><input type="radio" name="c3" value="0" id="c3_0"></td>
		<td><input type="radio" name="c3" value="1" id="c3_1"></td>
		<td><input type="radio" name="c3" value="2" id="c3_2"></td>
		<td><input type="radio" name="c3" value="3" id="c3_3"></td>
		<td><input type="radio" name="c3" value="4" id="c3_4"></td>
		<td><input type="radio" name="c3" value="5" id="c3_5"></td>
		
	</tr>


	<tr>
		<td>Attacker can spoof external GPS signals</td>
		<td><input type="radio" name="c4" value="0" id="c4_0"></td>
		<td><input type="radio" name="c4" value="1" id="c4_1"></td>
		<td><input type="radio" name="c4" value="2" id="c4_2"></td>
		<td><input type="radio" name="c4" value="3" id="c4_3"></td>
		<td><input type="radio" name="c4" value="4" id="c4_4"></td>
		<td><input type="radio" name="c4" value="5" id="c4_5"></td>
	</tr>


	<tr>
		<td>Attacker can control communication between the vehicle and the Internet</td>
		<td><input type="radio" name="c5" value="0" id="c5_0"></td>
		<td><input type="radio" name="c5" value="1" id="c5_1"></td>
		<td><input type="radio" name="c5" value="2" id="c5_2"></td>
		<td><input type="radio" name="c5" value="3" id="c5_3"></td>
		<td><input type="radio" name="c5" value="4" id="c5_4"></td>
		<td><input type="radio" name="c5" value="5" id="c5_5"></td>
	</tr>
	
	
	</table>
	<input type="submit" value="submit"/>
</form>

</body>

</html>