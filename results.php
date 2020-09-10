<?php
include 'header-secure.php';

$not_found="";
if ($_SESSION['username'] == NULL){
	header('location: notlogged.php');
}

?>