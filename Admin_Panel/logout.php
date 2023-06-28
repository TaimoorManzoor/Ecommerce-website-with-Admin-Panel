<?php
session_start();
unset($_SESSION['last_active_time']);
unset($_SESSION['is_login']);
header('Location:admin_login.php');
?>