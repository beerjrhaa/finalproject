<?php

	$link = mysqli_connect("localhost", "root", "root", "finalproject_db");

	$datestart = isset($_POST['datestart']) ? trim($_POST['datestart']) : "";
  	$dateend = isset($_POST['dateend']) ? trim($_POST['dateend']) : "";
  	$idPav = isset($_POST['idPav']) ? trim($_POST['idPav']) : "";;

// 	$sql ="SELECT * FROM eventconfer WHERE eventconfer_start >= '$datestart' AND  eventconfer_end <= '$dateend'";
	$sql = "SELECT * FROM invipav_tb WHERE (invipav_datefirst BETWEEN '$datestart' AND '$dateend') OR (invipav_datelast BETWEEN '$datestart' AND '$dateend') ";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

?>
