<?php
// © 2017 Regents of the University of Minnesota. All rights reserved.

error_reporting(E_ALL & ~E_NOTICE);

$folders_dir = "/website/test/folders";
$folders_url = "https://".$_SERVER['SERVER_NAME']."/test/folders";
$trash_dir = "/website/test/trash";
$logs_dir = "/website/test/logs";
$status_dir = "/website/test/status";

#-----------------------------------------------------------
# Check setup
#-----------------------------------------------------------
if( $folders_dir == "" ) {
	error_exit("Missing folders_dir in config.");
}
if( ! is_dir( $folders_dir ) ) {
	error_exit("Missing folders_dir $folders_dir");
}
if( ! is_writable( $folders_dir ) ) {
	error_exit("folders_dir $folders_dir is not writable by the web server");
}
if( $folders_url == "" ) {
	error_exit("Missing folders_url in config.");
}

if( $trash_dir == "" ) {
	error_exit("Missing trash_dir in config.");
}
if( ! is_dir( $trash_dir ) ) {
	error_exit("Missing trash_dir $trash_dir");
}
if( ! is_writable( $trash_dir ) ) {
	error_exit("trash_dir $trash_dir is not writable by the web server");
}
	
if( $logs_dir == "" ) {
	error_exit("Missing logs_dir in config.");
}
if( ! is_dir( $logs_dir ) ) {
	error_exit("Missing logs_dir $logs_dir");
}
if( ! is_writable( $logs_dir ) ) {
	error_exit("logs_dir $logs_dir is not writable by the web server");
}

if( $status_dir == "" ) {
	error_exit("Missing status_dir in config.");
}
if( ! is_dir( $status_dir ) ) {
	error_exit("Missing status_dir $status_dir");
}
if( ! is_writable( $status_dir ) ) {
	error_exit("status_dir $status_dir is not writable by the web server");
}

