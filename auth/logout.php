<?php
session_start();
session_unset();
session_destroy();
define("PATH","http://realestate.test");
header("location: ".PATH);

?>