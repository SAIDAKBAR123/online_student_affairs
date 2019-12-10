<?php
session_start();
session_destroy();
unset($_SESSION["username"]);
//session_regenerate_id(TRUE);
header('Location: login.html');
?>