<?php
session_start();
//unset($_SESSION['profile_id']);
//unset($_SESSION['email_id']);
session_destroy();
header("Location:index.php");

?>