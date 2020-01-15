<?php
	ob_clean();
	header('HTTP/1.1 200 OK');
	header('Content-Type: application/octet-stream');
	header("Content-disposition:attachment;filename=clean.bat;");
	echo "@echo off";
	echo "\r\nslmgr /upk";
	echo "\r\nslmgr /ckms";
	echo "\r\nslmgr /rearm";
?>
