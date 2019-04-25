<?php
$port = " -p 6600";
if ($_GET["command"] == "skip")
	exec("mpc next".$port);
if ($_GET["command"] == "status")
	echo exec("mpc".$port);
if ($_GET["command"] == "toggle")
	exec ("mpc toggle".$port);
if ($_GET["command"] == "random")
	exec ("mpc random".$port);
if ($_GET["command"] == "list")
{
	$out = array();
	exec("mpc lsplaylist".$port, $out);
	foreach($out as $line) {
		echo $line."<br>";
	}
}
if ($_GET["command"] == "load"&& isset($_GET['playlist']))
{
	exec("mpc clear".$port);
	echo ("mpc load ".$_GET["playlist"].$port);
	exec ("mpc".$port." load ".$_GET["playlist"]);
}
?>
