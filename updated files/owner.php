<?php
session_start();
$uname = $_SESSION['uname'];
$connection = oci_connect('arafatx','arafatx','localhost/XE')
				or die(oci_error());
$wrongPass = false;
// close the connection

$sql ="select * from user_table natural join social_media where username='$uname'";
$stid = oci_parse($connection, $sql);
$r = oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);

echo $row['USERNAME'] . " " . $row['PROFILE_LINK'];




?>