<?php
session_start();

$type = $_POST["type"];
$fn = "process_" . $type;
$fn();

/**
 * Store capability values
 */
function process_capabilities() {

	$c1 = $_POST["c1"];
	$c2 = $_POST["c2"];
	$c3 = $_POST["c3"];
	$c4 = $_POST["c4"];
	$c5 = $_POST["c5"];
	$c6 = $_POST["c6"];

	$session_id =  $_SESSION['cap_id'];

	$sql = "INSERT INTO Capability VALUES('$session_id', $c1, $c2, $c3, $c4, $c5, $c6)";
	$con = mysqli_connect("localhost","root","testing","cap_risk");
	mysqli_query($con, $sql);

    header("Location: ./index.php");
}

/**
 * Store threat likelihood values for each capapbility
 */
function process_threat_rank() {

	$threat_cap = array(
		0 => array(0,3,5),
		1 =>array(2,3,5),
		2 => array(1,3,5),
		3 => array(2,3,5),
		4 => array(2,3,4,5),
		5 => array(3,5));

	$session_id =  $_SESSION['cap_id'];
	$threat = $_POST['threat'];

	$caps = $threat_cap[$threat];
	$con = mysqli_connect("localhost","root","testing","cap_risk");

	foreach ($caps as $cap) {
		$et = $_POST[$cap . "_et"];
		$se = $_POST[$cap . "_se"];
		$ks = $_POST[$cap . "_ks"];
		$wo = $_POST[$cap . "_wo"];
		$re = $_POST[$cap . "_re"];

		$sql = "INSERT INTO Threat_Rank VALUES('$session_id', $threat, $cap, $et, $se, $ks, $wo, $re)";
		mysqli_query($con, $sql);
	}

	if($threat < 5) {
		$threat++;
		$url = "./threat_score.php?threat=" . $threat;
		header("Location: $url");
		exit(0);
	} else {
		$url .= "./index.php";
		header("Location: $url");
	}	
}
?>