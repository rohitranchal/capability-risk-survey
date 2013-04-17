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

//Get the list of caps
$caps = $threat_cap[$threat];

?>

<h1><?=$threat_labels[$threat]?></h1>

<form action="process.php" method="post">
<input type="hidden" name="threat" value="<?=$threat?>"/>
<input type="hidden" name="type" value="threat_rank"/>
<table>
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
			<select name="<?=$value?>_et">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</td>
		<td>
			<select name="<?=$value?>_se">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</td>
		<td>
			<select name="<?=$value?>_ks">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</td>
		<td>
			<select name="<?=$value?>_wo">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</td>
		<td>
			<select name="<?=$value?>_re">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</td>
		</tr>
		<?
	}
	?>
	
</table>
<input type="submit" value="Next"/>
</form>