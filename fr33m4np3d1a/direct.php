<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header("Location:https://www.mycodeproject.ga/13/");
?>