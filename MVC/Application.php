<?php
define ("MAIN_URL","http://localhost:8080/www/");
define ("POST_PER_PAGE",2);

session_start();

require_once "./MVC/core/App.php";
require_once "./MVC/core/Controllers.php";
require_once "./MVC/core/Connection.php";

$myApp = new App();
?>