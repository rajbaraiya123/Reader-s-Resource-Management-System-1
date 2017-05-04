<?php

session_start();
unset($_COOKIE["login"]);
session_destroy();
header("Location: login.php");


?>