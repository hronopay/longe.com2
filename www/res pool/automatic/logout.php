<?
session_start();
include("config.php");
include("engine.php");
session_unset();
session_destroy();
redirect_to("clientregister.php");
?>