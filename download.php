<?php
if (isset($_GET['file'])) {
$file = $_GET['file'];
if (file_exists($file) && is_readable($file) && preg_match('/\.pdf$/',$file)) {
	header('Content-Type: application/pdf');
	header("Content-Disposition: attachment; filename=\"$file\"");
	readfile($file);
	}
else if (file_exists($file) && is_readable($file) && preg_match('/\.xlsx$/',$file)) {
	header('Content-Type: application/xlsx');
	header("Content-Disposition: attachment; filename=\"$file\"");
	readfile($file);
	}
}
?>