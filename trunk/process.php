<?php
session_start();

$type = $_POST["type"];
$fn = "process_" . $type;
$fn();

function process_pin() {


	$pin = $_POST["pin"];
	
	if($pin == "2013Cap") {
		//Create session
		$id = uniqid();
		$_SESSION['cap_id'] = $id;

		$ip=$_SERVER['REMOTE_ADDR'];

		$con = mysqli_connect("localhost","root","testing","cap_risk");
		mysqli_query($con, "INSERT INTO Session(id, ip) VALUES ('$id', '$ip')");
	}

	header("Location: ./index.php");
}


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
	$con = mysqli_connect("localhost","root","testing","cap_risk");

	foreach ($threat_cap as $threat => $caps) {

		foreach ($caps as $cap) {
			$et = $_POST[$threat . "_" . $cap . "_et"];
			$se = $_POST[$threat . "_" . $cap . "_se"];
			$ks = $_POST[$threat . "_" . $cap . "_ks"];
			$wo = $_POST[$threat . "_" . $cap . "_wo"];
			$re = $_POST[$threat . "_" . $cap . "_re"];

			$sql = "INSERT INTO Threat_Rank VALUES('$session_id', $threat, $cap, $et, $se, $ks, $wo, $re)";
			mysqli_query($con, $sql);
		}
	}

	$url .= "./index.php";
	header("Location: $url");

}

function process_threats() {

	$session_id =  $_SESSION['cap_id'];
	$con = mysqli_connect("localhost","root","testing","cap_risk");

	for( $i = 0; $i < 6; $i++) {

		$et = $_POST[$i . "_et"];
		$se = $_POST[$i . "_se"];
		$ks = $_POST[$i . "_ks"];
		$wo = $_POST[$i . "_wo"];
		$re = $_POST[$i . "_re"];

		$sql = "INSERT INTO Threat VALUES('$session_id', $i, $et, $se, $ks, $wo, $re)";
		mysqli_query($con, $sql);
	}

	header("Location: ./index.php");
}
?>