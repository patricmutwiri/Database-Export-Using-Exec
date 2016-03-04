<?php 
require_once("dbconfig.php");
ini_set('display_errors', 'on');
$config 	= new config();
$pass 		= $config->password;
$dbname 	= $config->database;
$username = $config->username;
$path 		= 'C:\\path\\to\\mysql\\mysqldump.exe -u'; //add -p if you have a password
$file 		= $dbname.'_'.time().'.sql.zip';
$destination 	= "C:\\xampp\\htdocs\\uchumi_intranet\\db_backups\\".$file."";
function backup($path,$username,$dbname,$destination){
	if(!exec($path.$username.' '.$dbname.' > '.$destination,$out)){
		print_r($out); //return
	}
}
backup($path,$username,$dbname,$destination);
