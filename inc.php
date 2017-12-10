<?php
@ob_start();
@session_start();
include "inc/config.php";
include "inc/function.php";
$St=getSet();
date_default_timezone_set("Africa/Cairo"); 
$Gapp = isv("app");
$Gtype = isv("type");

?>
