<?php
include '../includes/common.php';
session_unset();
session_destroy();
header('location:../html/admin-login.php');
?>