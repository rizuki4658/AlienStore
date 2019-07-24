<?php
 session_start();
 spl_autoload_register(function($class){
	require_once '../Class/'.$class.'.php';
});
$user 	= new User();
$database = new Database();
$inventory = new Inventory();
?>